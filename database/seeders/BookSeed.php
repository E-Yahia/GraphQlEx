<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
class BookSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Book::insert([
            [
                "title" => "eithar", 
                "year" =>2000,
                "number_of_pages"=> 200
            ] , 
            [
                "title" => "ahmed", 
                "year" =>4000,
                "number_of_pages"=> 100
            ] ,
            [
                "title" => "menna", 
                "year" =>3000,
                "number_of_pages"=> 400
            ],
            [
                "title" => "ashraket", 
                "year" =>1000,
                "number_of_pages"=> 300
            ]
            , [
                "title" => "eithar", 
                "year" =>9999,
                "number_of_pages"=> 500
            ]
        ]);
    }
}
