<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Muhamad Zaki Raihan',
            'gender' => 'L',
            'shift' => 'Pagi'
        ];
        return response()->json($data);
    }
}
