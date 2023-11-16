<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PubController extends Controller
{
    public function getDrinks(){
        $drinks = DB::select("SELECT * FROM drinks");

        //echo "<pre>";
        //print_r($drinks);
        foreach($drinks as $drink){
            print_r($drink->name. "<br>" .drink->amount ."<br>");
        }

    }
    public function getName(){
        $name = DB::select("SELECT name FROM drinks WHERE drinkid =2");
        // id = ?, [2]
        // id = :id, [id=>2]
    echo "<pre>";
    print_r($name);
}
}