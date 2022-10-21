<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    public function index()
    {
        $data = [
            "nama" => "Muhamad Zaki Raihan",
            "gender" => "Laki-Laki",
            "ship" => "Malam"
        ];

        return response()->json($data);
    }
}
