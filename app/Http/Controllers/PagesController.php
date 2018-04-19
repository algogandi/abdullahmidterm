<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home() {
        return view('pages.home');
    }
    //function about() {
        //return view('pages.about');
    //}
    function login() {
        return view('pages.login');
    }
    function register() {
        return view('pages.register');
    }
    //function contact() {
        //return view('pages.contact');
    //}
    //function store(Request $request) {

        //$name = $request->name;
        //dd($request); for showimg what is inside

        //return redirect()->route('thanks',['name' => $name ]);
    //}
    //function thanks($name, Request $request) {



        //return view('pages.thankyou')->with(compact('name'));
    //}

}
