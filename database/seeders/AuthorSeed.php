<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
class AuthorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Author::insert([
            [
                "name" => "eithar", 
                "age" =>10
            ] , 
            [
                "name" => "ash", 
                "age" =>20
            ] ,
            [
                "name" => "ahmed", 
                "age" =>30
            ],
            [
                "name" => "rana", 
                "age" =>40
            ]
            , [
                "name" => "Abdo", 
                "age" =>50
            ]
        ]);
    }
}
