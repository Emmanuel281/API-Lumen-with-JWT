<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ms_vendor;

class MsVendorController extends Controller
{
    public function get()
    {
        try {
            $vendors = ms_vendor::all();
            return response()->json(['Status' => 'Sucsess', 'Data' => $vendors]);
        } catch (\Throwable $th) {
            return response()->json(['Status' => 'Error', 'error' => $th]);
        }
    }

    public function store(Request $req)
    {
        try {
            $vendors = new ms_vendor();
            $vendors->nama = $req->nama;
            $vendors->description = $req->deskripsi;

            if ($vendors->save()) {
                return response()->json(['Status' => 'Sucsess', 'Message' => 'Vendor Created Sucsesfully']);
            }
        } catch (\Throwable $th) {
            return response()->json(['Status' => 'Error', 'error' => $th]);
        }
    }

    public function update(Request $req, $id)
    {
        try {
            $vendors = ms_vendor::findorfail($id);
            $vendors->nama = $req->nama;
            $vendors->description = $req->deskripsi;

            if ($vendors->save()) {
                return response()->json(['Status' => 'Sucsess', 'Message' => 'Vendor Updated Sucsesfully']);
            }
        } catch (\Throwable $th) {
            return response()->json(['Status' => 'Error', 'error' => $th]);
        }
    }

    // public function getwithid($id)
    // {
    //     // $vendors = DB::table('ms_vendor')->where('id', '=', $id)->get();
    //     return $vendors;
    // }
}
