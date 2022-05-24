<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        echo "Index Function";
    }
    public function test(){
        return view('home.test');
    }
    public function param($id){
        echo "Parameter 1:", $id;
        return view('home.test2', [
            'id' => $id
        ]);
    }

    public function save(Request $request){

        return view('home.test3', [
            'fname' => $_REQUEST['fname'],
            'lname' => $_REQUEST['lname']
        ]);
    }
}
