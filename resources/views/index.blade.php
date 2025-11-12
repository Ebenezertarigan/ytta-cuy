@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h5 class="m-0">Daftar Mahasiswa</h5>
            <a href="{{ route('logout') }}" class="btn btn-danger btn-sm">Logout</a>
        </div>

        <div class="card-body">
             @auth
            <p>Selamat datang, <b>{{ Auth::user()->name }}</b>! Berikut daftar mahasiswa:</p>
               @endauth

            <table class="table table-striped table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Program Studi</th>
                        <th>SKS</th>
                        <th>IPK</th>
                        <th>Status</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $mhs->nim }}</td>
                            <td>
                                {{ $mhs->nama }}
                                @if($mhs->ipk > 3.5)
                                    <span class="text-warning">⭐</span>
                                @endif
                            </td>
                            <td>{{ $mhs->program_studi ?? $mhs->{'Program Studi'} }}</td>
                            <td>{{ $mhs->sks }}</td>
                            <td>{{ $mhs->ipk }}</td>
                            <td>
                                @if($mhs->sks < 144)
                                    <span class="badge bg-danger">Belum Lulus</span>
                                @else
                                    <span class="badge bg-success">Lulus</span>
                                @endif
                            </td>
                            <td>
                                @if($mhs->sks < 80)
                                    <span class="badge bg-primary">Mahasiswa Baru</span>
                                @elseif($mhs->sks < 140)
                                    <span class="badge bg-warning text-dark">Mahasiswa Madya</span>
                                @else
                                    <span class="badge bg-info text-dark">Mahasiswa Akhir</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer bg-dark text-white text-center">
            © 2025 Daftar Mahasiswa | Nama: [Isi Nama Anda] | NIM: [Isi NIM Anda]
        </div>
    </div>
</div>
@endsection
