<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'John Doe',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'department head',
            'tag_id' => '1234567890',
            'permissions' => '{"view_schedules": true, "create_schedules": true, "edit_schedules": true, "delete_schedules": true, "view_users": true, "create_users": true, "edit_users": true, "delete_users": true, "view_logs": true}'
        ]);

        Schedule::create([
            'start_time' => '00:00',
            'end_time' => '23:59',
            'days'=> 'Monday',
            'faculty_id'=>1,
            'laboratory'=>'lab1',
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Schedule::create([
            'start_time' => '00:00',
            'end_time' => '23:59',
            'days'=> 'Tuesday',
            'faculty_id'=>1,
            'laboratory'=>'lab1',
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Schedule::create([
            'start_time' => '00:00',
            'end_time' => '23:59',
            'days'=> 'Friday',
            'faculty_id'=>2,
            'laboratory'=>'lab2',
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Schedule::create([
            'start_time' => '00:00',
            'end_time' => '23:59',
            'days'=> 'Friday',
            'faculty_id'=>1,
            'laboratory'=>'lab2',
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
