<?php


namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {             
            DB::table('users')->insert([
                'name' => 'Admin', 
                'role' => 'admin', 
                'email' => 'admin@laravel.com', 
                'password' => '$2y$10$OKs76KOXGGZ2lLqlRrViSOt2dsqlYbxuSNPww/nkBOxZXKsYM.Osa', 
                'phone' => '564546546', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        
        
    }
}
