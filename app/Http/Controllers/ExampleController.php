<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // hanya
        // $this->middleware('age', ['only' => ['getUser']]);
        // kecuali
        // $this->middleware('age', ['except' => ['getUser','foo']]);
    }
    public function generateKey(){
        return str_random(32);
    }
    public function foo(){
        return 'foo example';
    }
    public function getUser($id){
        return 'user id '.$id;
    }
    public function getPost($cat1, $cat2){
        return 'category = '.$cat1. ' Category 2= '.$cat2;
    }
    public function getProfile(){
        return '<a href="'.route('profile.action').'"> Profile Aciton button </a>';
    }

    public function getProfileAction(){
        return '<a href="'.route('profile').'"> Profile button </a>';
    }

    //
}
