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

        $user_id = User::where('name','=','miranda')->pluck('id')->first();

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'departure_date' => '2016-12-01',
            'departure_time' => '11:00:00',
            'return_date' => '2016-12-03',
            'return_time' => '19:30:00',
            'origin' => 'Boston, MA',
            'destination' => 'New York, NY',
            'airline' => 'Delta',
            'flight_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'Park Hotel',
            'accomodation_address' => '800 W40th St, New York, NY 10024',
            'purpose' => 'Work',
            'user_id' => $user_id
        ]);

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'departure_date' => '2016-12-30',
            'departure_time' => '13:00:00',
            'return_date' => '2017-01-07',
            'return_time' => '9:17:00',
            'origin' => 'Boston, MA',
            'destination' => 'Copenhagen, Denmark',
            'airline' => 'SAS',
            'flight_confirmation' => 'SA81JU7',
            'departure_flight_number' => 'SAS120',
            'return_flight_number' => 'SAS70',
            'accomodation_name' => 'The Madsens',
            'accomodation_address' => 'Gammeltorv 17, 1100 København K',
            'purpose' => 'Leisure',
            'user_id' => $user_id
        ]);

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'departure_date' => '2017-03-07',
            'departure_time' => '9:48:00',
            'return_date' => '2017-03-17',
            'return_time' => '14:36:00',
            'origin' => 'Boston, MA',
            'destination' => 'Phoenix, AZ',
            'airline' => 'United',
            'flight_confirmation' => 'UA8F34',
            'departure_flight_number' => 'U2968',
            'return_flight_number' => 'U7251',
            'accomodation_name' => 'Holiday Inn',
            'accomodation_address' => '127 N28th Dr, Phoenix, AZ 85022',
            'purpose' => 'Work',
            'user_id' => $user_id
        ]);
    }
}
