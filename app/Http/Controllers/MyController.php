<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $data = [
        ["id" => 1, 'judul' => 'mencari jati diri', 'harga' => 75000, 'kategori' => 'Self improvment'],
        ["id" => 2, 'judul' => 'bacaan sholat dan dzikir', 'harga' => 25000, 'kategori' => 'Bacaan'],
        ["id" => 3, 'judul' => 'laravel 12 fundamental', 'harga' => 35000, 'kategori' => 'Teknologi'],
    ];

    public function index(){
        $buku = session('data_buku', $this->data);
        return view('buku.index', compact('buku'));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){
        $buku = session('data_buku', $this->data);
        $newid = collect($buku)->max('id') + 1;

        //membuat id baru
        $buku[] = [
            'id' => $newid,
            'judul' => $request->judul,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
        ];

        //menambahkan buku ke session data_buku melalui variabel buku
        session(['data_buku' => $buku]);

        return redirect('buku');
    }

    public function show($id){
        $buku = session('data_buku', $this->data);
        $buku = collect($buku)->firstWhere('id', $id);

        if(! $buku) {
            abort(404);
        }
        return view('buku.show', compact('buku'));
    }

}
