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


    public function create()
    {
        $tags_for_checkboxes = Tag::getForCheckboxes();

        return view('trip.create')->with(['tags_for_checkboxes' => $tags_for_checkboxes]);
    }


    public function store(Request $request)
    {
         # Validate
        /* $this->validate($request, [
            'title' => 'required|min:3',
            'published' => 'required|min:4|numeric',
            'cover' => 'required|url',
            'purchase_link' => 'required|url',
        ]); 

        don't forget : url NEEDS http:// in front
        date must be certain format
        time must be certain format */



        # If there were errors, Laravel will redirect the
        # user back to the page that submitted this request
        # The validator will tack on the form data to the request
        # so that it's possible (but not required) to pre-fill the
        # form fields with the data the user had entered
        # If there were NO errors, the script will continue...

        # Get the data from the form
        $trip = new Trip();
        $trip->origin = $request->input('origin');
        $trip->destination = $request->input('destination');
        $trip->departure_date = $request->input('departure_date');
        $trip->departure_time = $request->input('departure_time');
        $trip->departure_airline = $request->input('departure_airline');
        $trip->departure_confirmation = $request->input('departure_confirmation');
        $trip->departure_flight_number = $request->input('departure_flight_number');
        $trip->return_date = $request->input('return_date');
        $trip->return_time = $request->input('return_time');
        $trip->return_airline = $request->input('return_airline');
        $trip->return_confirmation = $request->input('return_confirmation');
        $trip->return_flight_number = $request->input('return_flight_number');
        $trip->accomodation_name = $request->input('accomodation_name');
        $trip->accomodation_address = $request->input('accomodation_address');
        $trip->accomodation_address = $request->input('accomodation_website');
        $trip->user_id = $request->user()->id;
        $trip->save();

        $tags = ($request->tags) ?: [];
        $trip->tags()->sync($tags);
        $trip->save();
        
        Session::flash('flash_message', 'Your trip to '.$trip->destination.' was added.');
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
        # Validate
        /*$this->validate($request, [
            'title' => 'required|min:3',
            'published' => 'required|min:4|numeric',
            'cover' => 'required|url',
            'purchase_link' => 'required|url',
        ]);*/

        $trip = Trip::find($id);
        $trip->origin = $request->origin;
        $trip->destination = $request->destination;
        $trip->departure_date = $request->departure_date;
        $trip->departure_time = $request->departure_time;
        $trip->departure_airline = $request->departure_airline;
        $trip->departure_confirmation = $request->departure_confirmation;
        $trip->departure_flight_number = $request->departure_flight_number;
        $trip->return_date = $request->return_date;
        $trip->return_time = $request->return_time;
        $trip->return_airline = $request->return_airline;
        $trip->return_confirmation = $request->return_confirmation;
        $trip->return_flight_number = $request->return_flight_number;
        $trip->accomodation_name = $request->accomodation_name;
        $trip->accomodation_address = $request->accomodation_address;
        $trip->save();

        if($request->tags) {
            $tags = $request->tags;
        }
        else {
            $tags = [];
        }

        $trip->tags()->sync($tags);
        $trip->save();

        Session::flash('flash_message', 'Your changes to '.$trip->title.' were saved.');
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

        Session::flash('flash_message', $trip->title.' was deleted.');
        return redirect('/trips');

    }

}
