<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Muhamad Zaki Raihan",
            "gender" => "male",
            "address" => "Bogor",
            "is_student" => true
        ];

        return response()->json($data);
    }
}
