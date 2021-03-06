<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Trip;
use App\Tag;
use Session;
use Carbon\Carbon;

class TripController extends Controller
{

    public function index(Request $request)
    {
        $today = Carbon::today();
        $user = $request->user();

        if($user) {
            $trips = Trip::where([
                ['user_id', '=', $user->id],
                ['return_date', '>', $today ]
                ])->orderBy('departure_date','ASC')->get();
        }
        else {
            $trips = [];
        }
        return view('trip.index')->with([
            'trips' => $trips
        ]);
    }

    public function past(Request $request)
    {
        $today = Carbon::today();
        $user = $request->user();

        if($user) {
            $trips = Trip::where([
                ['user_id', '=', $user->id],
                ['return_date', '<', $today ]
                ])->orderBy('departure_date','DESC')->get();
        }
        else {
            $trips = [];
        }
        return view('trip.past')->with([
            'trips' => $trips
        ]);
    }


    public function create()
    {
        $tags_for_checkboxes = Tag::getForCheckboxes();

        return view('trip.create')->with(['tags_for_checkboxes' => $tags_for_checkboxes]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'origin' => 'required|min:3',
            'destination' => 'required|min:3',
            'departure_date' => 'required|date_format:Y-m-d',
            'return_date' => 'required|date_format:Y-m-d|after:departure_date',
            'departure_time' => 'date_format:H:i',
            'return_time' => 'date_format:H:i',
            'departure_airport' => 'max:40',
            'return_airport' => 'max:40',
            'departure_airline' => 'max:40',
            'return_airline' => 'max:40',
            'departure_confirmation' => 'max:40',
            'return_confirmation' => 'max:40',
            'departure_flight_number' => 'max:40',
            'return_flight_number' => 'max:40',
            'accomodation_name' => 'max:70',
            'accomodation_address' => 'max: 100'
        ]); 

        $trip = new Trip();
        $trip->origin = $request->input('origin');
        $trip->destination = $request->input('destination');
        $trip->departure_date = $request->input('departure_date');
        $trip->departure_time = $request->input('departure_time');
        $trip->departure_airport = $request->input('departure_airport');
        $trip->departure_airline = $request->input('departure_airline');
        $trip->departure_confirmation = $request->input('departure_confirmation');
        $trip->departure_flight_number = $request->input('departure_flight_number');
        $trip->return_date = $request->input('return_date');
        $trip->return_time = $request->input('return_time');
        $trip->return_airport = $request->input('return_airport');
        $trip->return_airline = $request->input('return_airline');
        $trip->return_confirmation = $request->input('return_confirmation');
        $trip->return_flight_number = $request->input('return_flight_number');
        $trip->accomodation_name = $request->input('accomodation_name');
        $trip->accomodation_address = $request->input('accomodation_address');
        $trip->notes = $request->input('notes');
        $trip->user_id = $request->user()->id;
        $trip->save();

        $tags = ($request->tags) ?: [];
        $trip->tags()->sync($tags);
        $trip->save();
        
        Session::flash('flash_message', 'Your trip to '.$trip->destination.' was added');
        return redirect('/trips');
    }


    public function show($id)
    {
        $trip = Trip::find($id);
        if(is_null($trip)) {
            Session::flash('flash_message','Trip not found');
            return redirect('/trips');
        }

        $departure_date = new Carbon($trip->departure_date);
        $return_date = new Carbon($trip->return_date);
        $number_days = ($return_date->diffInDays($departure_date));

        return view('trip.show')->with([
            'trip' => $trip,
            'number_days' => $number_days
        ]);
    }


    public function edit($id)
    {
        $trip = Trip::find($id);

        $tags_for_checkboxes = Tag::getForCheckboxes();
        $tags_for_this_trip = [];
        foreach($trip->tags as $tag) {
            $tags_for_this_trip[] = $tag->name;
        }
        return view('trip.edit')->with(
            [
                'trip' => $trip,
                'tags_for_checkboxes' => $tags_for_checkboxes,
                'tags_for_this_trip' => $tags_for_this_trip,
            ]
        );
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'origin' => 'required|min:3',
            'destination' => 'required|min:3',
            'departure_date' => 'required|date_format:Y-m-d',
            'return_date' => 'required|date_format:Y-m-d|after:departure_date',
            'departure_time' => 'date_format:H:i',
            'return_time' => 'date_format:H:i',
            'departure_airport' => 'max:40',
            'return_airport' => 'max:40',
            'departure_airline' => 'max:40',
            'return_airline' => 'max:40',
            'departure_confirmation' => 'max:40',
            'return_confirmation' => 'max:40',
            'departure_flight_number' => 'max:40',
            'return_flight_number' => 'max:40',
            'accomodation_name' => 'max:70',
            'accomodation_address' => 'max: 100'
        ]); 

        $trip = Trip::find($id);
        $trip->origin = $request->origin;
        $trip->destination = $request->destination;
        $trip->departure_date = $request->departure_date;
        $trip->departure_time = $request->departure_time;
        $trip->departure_airport = $request->departure_airport;
        $trip->departure_airline = $request->departure_airline;
        $trip->departure_confirmation = $request->departure_confirmation;
        $trip->departure_flight_number = $request->departure_flight_number;
        $trip->return_date = $request->return_date;
        $trip->return_time = $request->return_time;
        $trip->return_airport = $request->return_airport;
        $trip->return_airline = $request->return_airline;
        $trip->return_confirmation = $request->return_confirmation;
        $trip->return_flight_number = $request->return_flight_number;
        $trip->accomodation_name = $request->accomodation_name;
        $trip->accomodation_address = $request->accomodation_address;
        $trip->notes = $request->notes;
        $trip->save();

        if($request->tags) {
            $tags = $request->tags;
        }
        else {
            $tags = [];
        }

        $trip->tags()->sync($tags);
        $trip->save();

        Session::flash('flash_message', 'Your trip to '.$trip->destination.' has been updated');
        return redirect('/trips');
    }

    public function delete($id) {
        $trip = Trip::find($id);
        return view('trip.delete')->with('trip', $trip);
    }

    public function destroy($id)
    {

        $trip = Trip::find($id);
        if(is_null($trip)) {
            Session::flash('flash_message','Trip not found.');
            return redirect('/trips');
        }

        if($trip->tags()) {
            $trip->tags()->detach();
        }

        $trip->delete();

        Session::flash('flash_message', 'Your trip to '.$trip->destination.' was deleted');
        return redirect('/trips');

    }

}
