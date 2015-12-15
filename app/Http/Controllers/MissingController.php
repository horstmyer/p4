<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MissingController extends Controller
{
  private $pdf;

  public function __construct(Pdf $pdf)
  {
    $this->pdf = $pdf;
  }

  public function flyer()
  {
    $html = view('pdfs.missing')->render();

return $this->pdf
    ->load($html)
    ->show();
  }
}
