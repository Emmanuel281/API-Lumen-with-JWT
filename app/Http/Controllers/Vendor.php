<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DB;

class Vendor extends Controller
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

    public function get()
    {
        $vendors = DB::table('ms_vendor')->get();
        return $vendors;
    }

    public function getwithid($id)
    {
        $vendors = DB::table('ms_vendor')->where('id', '=', $id)->get();
        return $vendors;
    }
}
