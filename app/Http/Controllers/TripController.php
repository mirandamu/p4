<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Trip;
use Session;


class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $user = $request->user();

        if($user) {
            $trips = Trip::where('user_id', '=', $user->id)->orderBy('id','DESC')->get();
        }
        else {
            $trips = [];
        }
        return view('trips.index')->with([
            'trips' => $trips
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         # Validate
        /* $this->validate($request, [
            'title' => 'required|min:3',
            'published' => 'required|min:4|numeric',
            'cover' => 'required|url',
            'purchase_link' => 'required|url',
        ]); */

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
        $trip->purpose = $request->input('purpose');
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
        $trip->user_id = $request->user()->id;
        $trip->save();
        
        Session::flash('flash_message', 'Your trip to '.$trip->destination.' was added.');
        return redirect('/trips');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
