<?php
​
namespace App\Http\Controllers;
​
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
​
class MissingController extends Controller
{
​
    public function flyer()
    {
        $html = view('pdfs.missing')->render();
​
        return PDF::load($html)->show();
    }
}
