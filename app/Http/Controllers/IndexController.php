<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getIndex()
       {
           $pets = \App\Pet::where('user_id', '=', \Auth::id())->orderBy('id', 'DESC')->get();
           return view('index')->with('pets', $pets);
       }}
