<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class rogzit extends Controller
{

   public function getContent(){
    
            $adatatok = DB::select("SELECT * FROM adat ORDER BY id ASC");
    
            return view("adat",["adat" => $adatatok]);
        }
        public function adat(Request $req){
            $req->validate(
                [
                    "vnev" => "required|text",
                    "knev" => "required|text",
                    "szev" => "required|numeric"
                ],
                
                [
                    "vnev.required" => "Add meg a vezetékneved!",
                    "vnev.text" => "Csak szöveget írhatsz",
                    "knev.required" => "Add meg a keresztneved!",
                    "knev.text" => "Csak szöveget írhatsz",
                    "szev.required" => "Add meg a születési éved!",
                    "szev.numeric" => "Csak számot írhatsz"
    
                ]
            );
            DB::insert("INSERT INTO adat(id, vnev, knev, szev) VALUES (?,?,?,?)", 
            [$req->get('id'),
            $req->get('vnev'),
            $req->get('knev'),
            $req->get('szev'),
            ]);
    
            return redirect("/rogzites")->with("success","Az adatokat sikeresen rögzítettük!");
        }
}