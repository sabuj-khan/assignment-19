<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    function socialData(){
        return Social::get();
    }
}
