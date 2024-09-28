<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use  Illuminate\Database\QueryException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;  
use App\Models\User;  

class DatabaseSeeder extends Seeder  
{  
    public function run()  
    {  
        // seed admin user  
        User::create([  
            'name' => 'Admin',  
            'email' => 'admin@admin.com',  
            'password' => Hash::make('password'),  
            'role' => 'admin',  
        ]);  
    }  
}
