<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Ambil semua data mahasiswa
        $mahasiswa = Mahasiswa::orderBy('created_at', 'desc')->get();

        // Kirim ke view
        return view('index', compact('mahasiswa'));
    }
}