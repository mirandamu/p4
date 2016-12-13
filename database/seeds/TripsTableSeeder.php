<?php

use Illuminate\Database\Seeder;
use App\User;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user_id = User::where('name','=','jill')->pluck('id')->first();

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'New York, NY',
            'departure_date' => '2016-12-01',
            'departure_time' => '11:00:00',
            'departure_airport' => 'BOS',
            'departure_airline' => 'Delta',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2016-12-03',
            'return_time' => '19:30:00',
            'return_airport' => 'LGA',
            'return_airline' => 'Delta',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'Park Hotel',
            'accomodation_address' => '800 W40th St, New York, NY 10024',
            'notes' => 'Call client week before',
            'user_id' => $user_id
        ]);

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'Copenhagen, Denmark',
            'departure_date' => '2016-12-30',
            'departure_time' => '15:00:00',
            'departure_airport' => 'BOS',
            'departure_airline' => 'SAS',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2017-01-03',
            'return_time' => '16:30:00',
            'return_airport' => 'CPH',
            'return_airline' => 'SAS',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'KBH Hotel',
            'accomodation_address' => 'Gothersgade 17, 1100 København K',
            'notes' => 'Make reservations for NOMA',
            'user_id' => $user_id
        ]);

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'Phoenix, AZ',
            'departure_date' => '2017-06-01',
            'departure_time' => '09:40:00',
            'departure_airport' => 'BOS',
            'departure_airline' => 'United',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2017-06-09',
            'return_time' => '21:10:00',
            'return_airport' => 'PHX',
            'return_airline' => 'United',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => "Brittany's Place",
            'accomodation_address' => '72 4th St, Phoenix, AZ 83974',
            'notes' => 'Confirm that we can stay with Brittany',
            'user_id' => $user_id
        ]);

        $user_id2 = User::where('name','=','jamal')->pluck('id')->first();

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'New York, NY',
            'departure_date' => '2016-12-01',
            'departure_time' => '11:00:00',
            'departure_airport' => 'BOS',
            'departure_airline' => 'Delta',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2016-12-03',
            'return_time' => '19:30:00',
            'return_airport' => 'LGA',
            'return_airline' => 'Delta',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'Park Hotel',
            'accomodation_address' => '800 W40th St, New York, NY 10024',
            'notes' => 'Call client week before',
            'user_id' => $user_id2
        ]);

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'Copenhagen, Denmark',
            'departure_date' => '2016-12-30',
            'departure_time' => '15:00:00',
            'departure_airport' => 'BOS',
            'departure_airline' => 'SAS',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2017-01-03',
            'return_time' => '16:30:00',
            'return_airport' => 'CPH',
            'return_airline' => 'SAS',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'KBH Hotel',
            'accomodation_address' => 'Gothersgade 17, 1100 København K',
            'notes' => 'Make reservations for NOMA',
            'user_id' => $user_id2
        ]);

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'Phoenix, AZ',
            'departure_date' => '2017-06-01',
            'departure_time' => '09:40:00',
            'departure_airport' => 'BOS',
            'departure_airline' => 'United',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2017-06-09',
            'return_time' => '21:10:00',
            'return_airport' => 'PHX',
            'return_airline' => 'United',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => "Brittany's Place",
            'accomodation_address' => '72 4th St, Phoenix, AZ 83974',
            'notes' => 'Confirm that we can stay with Brittany',
            'user_id' => $user_id2
        ]);

    }
}
