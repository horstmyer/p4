<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;

class MissingController extends Controller
{

    public function flyer($pet_id)
    {
        // Get this pet
        $pet  = \App\Pet::find($pet_id);

        // Convert the photo to base64
        $pet->photo = base64_encode(file_get_contents($pet->photo));
        $pet->photo = "data:image/jpg;base64,".$pet->photo;

        // Generate the view, passing it `pet` and `user`
        $html = view('pdfs.missing')
            ->with('pet', $pet)
            ->with('user', \Auth::user())
            ->render();

        //return PDF::load($html)->show();
        return $html;
    }


}
