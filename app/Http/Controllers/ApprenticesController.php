<?php

namespace App\Http\Controllers;

use App\Models\Apprentices;
use Illuminate\Http\Request;

class ApprenticesController extends Controller
{
    public function apprentices(){
        $apprentices = Apprentices::get();
        return view('apprentices',['aprentices'=>$apprentices]);
    }
}
