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
                    "vnev.required" => "Adja meg a vezetéknevét!",
                    "vnev.text" => "Ide csak szöveget írhat!",
                   
                    "knev.required" => "Adja meg a keresztnevét!",
                    "knev.text" => "Ide csak szöveget írhat!",
                    
                    "szev.required" => "Adja meg a születési évét!",
                    "szev.numeric" => "Csak számot adhat meg!"
    
                ]
            );
            DB::insert("INSERT INTO adat(id, vnev, knev, szev) VALUES (?,?,?,?)", 
            [$req->get('id'),
            $req->get('vnev'),
            $req->get('knev'),
            $req->get('szev'),
            ]);
    
            return redirect("/rogzit")->with("success","Az adatok rögzítése sikeres!");
        }
}