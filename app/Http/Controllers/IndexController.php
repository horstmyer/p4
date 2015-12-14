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
	//You want it to get the pets with a certain status, so the query changes like this
	$pets = \App\Pet::where('status', '=', 1)->orderBy('id', 'DESC')->get();

           return view('index')->with('pets', $pets);
       }}
