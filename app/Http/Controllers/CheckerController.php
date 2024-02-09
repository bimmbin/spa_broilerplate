<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckerController extends Controller
{
  public function store(Request $request)
  {

    return response()->json(['status' => $request->data]);
  }
}
