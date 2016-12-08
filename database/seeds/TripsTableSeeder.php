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
            'origin' => 'Boston, MA',
            'destination' => 'New York, NY',
            'departure_date' => '2016-12-01',
            'departure_time' => '11:00:00',
            'departure_airline' => 'Delta',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2016-12-03',
            'return_time' => '19:30:00',
            'return_airline' => 'Delta',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'Park Hotel',
            'accomodation_address' => '800 W40th St, New York, NY 10024',
            'user_id' => $user_id
        ]);

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'Copenhagen, Denmark',
            'departure_date' => '2016-12-30',
            'departure_time' => '11:00:00',
            'departure_airline' => 'Delta',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2017-01-03',
            'return_time' => '19:30:00',
            'return_airline' => 'Delta',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'York Hotel',
            'accomodation_address' => '800 W40th St, New York, NY 10024',
            'user_id' => $user_id
        ]);

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'Phoenix, AZ',
            'departure_date' => '2017-02-01',
            'departure_time' => '11:00:00',
            'departure_airline' => 'Delta',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2016-12-03',
            'return_time' => '19:30:00',
            'return_airline' => 'Delta',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'Phoenix Hotel',
            'accomodation_address' => '800 W40th St, New York, NY 10024',
            'user_id' => $user_id
        ]);

        $user_id2 = User::where('name','=','jill')->pluck('id')->first();

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'New York, NY',
            'departure_date' => '2016-12-01',
            'departure_time' => '11:00:00',
            'departure_airline' => 'Delta',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2016-12-03',
            'return_time' => '19:30:00',
            'return_airline' => 'Delta',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'Park Hotel',
            'accomodation_address' => '800 W40th St, New York, NY 10024',
            'user_id' => $user_id2
        ]);

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'Copenhagen, Denmark',
            'departure_date' => '2016-12-30',
            'departure_time' => '11:00:00',
            'departure_airline' => 'Delta',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2017-01-03',
            'return_time' => '19:30:00',
            'return_airline' => 'Delta',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'York Hotel',
            'accomodation_address' => '800 W40th St, New York, NY 10024',
            'user_id' => $user_id2
        ]);

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'Phoenix, AZ',
            'departure_date' => '2017-02-01',
            'departure_time' => '11:00:00',
            'departure_airline' => 'Delta',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2016-12-03',
            'return_time' => '19:30:00',
            'return_airline' => 'Delta',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'Phoenix Hotel',
            'accomodation_address' => '800 W40th St, New York, NY 10024',
            'user_id' => $user_id2
        ]);

        $user_id3 = User::where('name','=','jamal')->pluck('id')->first();

                DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'New York, NY',
            'departure_date' => '2016-12-01',
            'departure_time' => '11:00:00',
            'departure_airline' => 'Delta',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2016-12-03',
            'return_time' => '19:30:00',
            'return_airline' => 'Delta',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'Park Hotel',
            'accomodation_address' => '800 W40th St, New York, NY 10024',
            'user_id' => $user_id3
        ]);

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'Copenhagen, Denmark',
            'departure_date' => '2016-12-30',
            'departure_time' => '11:00:00',
            'departure_airline' => 'Delta',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2017-01-03',
            'return_time' => '19:30:00',
            'return_airline' => 'Delta',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'York Hotel',
            'accomodation_address' => '800 W40th St, New York, NY 10024',
            'user_id' => $user_id3
        ]);

        DB::table('trips')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'origin' => 'Boston, MA',
            'destination' => 'Phoenix, AZ',
            'departure_date' => '2017-02-01',
            'departure_time' => '11:00:00',
            'departure_airline' => 'Delta',
            'departure_confirmation' => 'PW198JM',
            'departure_flight_number' => 'DT890',
            'return_date' => '2016-12-03',
            'return_time' => '19:30:00',
            'return_airline' => 'Delta',
            'return_confirmation' => 'PW198JM',
            'return_flight_number' => 'DT700',
            'accomodation_name' => 'Phoenix Hotel',
            'accomodation_address' => '800 W40th St, New York, NY 10024',
            'user_id' => $user_id3
        ]);
    }
}
