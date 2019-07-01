<?php

namespace App\Http\Controllers\Swoole;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class SwooleController extends Controller
{
    //

    public function a(){
      return view('swoole.swoole');
    }
}
