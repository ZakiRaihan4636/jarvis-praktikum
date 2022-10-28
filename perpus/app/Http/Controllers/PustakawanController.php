<?php

namespace App\Http\Controllers;

use App\Models\Pustakawan;
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
