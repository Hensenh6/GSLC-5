<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function test(){

        if (isset($_GET["hari"])){
            $hari= $_GET["hari"];
        }
        else{
            $hari="";
        };
        return view("switch",["hari"=>$hari]);
    }
}
