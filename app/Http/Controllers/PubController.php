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
public function insertDrink(){
    DB::insert("INSERT INTO  drinks(name,amount,typeid,quantityid)
    VALUES (?,?,?,?)",[
        "Barack pálinka",
        20,
        3,
        1
    ]);
}
public function modifyDrink(){

    $drink =DB::update("UPDATE drinks SET amount = ?
    WHERE did = ?",[
        12,8
    ]);
    print_r($drink);
}
public function removeDrink(){
$drink = DB::delete("DELETE FROM drinks WHERE did = ?",
[
    8
]);
print_r($drink);
}
}