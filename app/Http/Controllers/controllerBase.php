<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\MenuRumah;
class controllerBase extends Controller
{
  public function index(){
    $images = [];
        foreach (File::glob(public_path() . '/storage/slideImage/*.*') as $filename) {
            $images[] = '/storage/slideImage/' . basename($filename);
        }
      $rumahs=MenuRumah::all();
      // dd($rumahs);
      return view('welcome')->
      with(['images'=> $images,
            'rumahs'=>$rumahs]);

  }
}
