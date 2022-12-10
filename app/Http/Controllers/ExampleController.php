<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function get($id = Null)
    {
        // if ($id != Null) {
        //     $vendors = DB::table('ms_vendor')->where('id', '=', $id)->get();
        // } else {
        //     $vendors = DB::table('ms_vendor')->where('id', '=', $id)->get();
        // }
        $vendors = 'Sucsess';
        return $vendors;
    }
}
