<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Template\Template;


class UserController extends Controller
{
    public function Test_blade(Request $request){
        $nom=$request->input('nom');
        return $nom;
    }

}
