<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class alternatifController extends Controller
{
    //
    public function index()
    {
        $alternatifs = Alternatif::paginate(10);
        return view('alternatif', compact('alternatifs'));
    }

    public function edit($id)
    {
        $alternatif = Alternatif::find($id);

        return view('editAlternatif', compact('alternatif'));
        // dd($criteria);
    }
    // public function tambah()
    // {
    //     return view('alternatif.tambah');
    // }
    
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //     ]);
    
    //     Alternatif::create($request->all());
    
    //     return redirect('/alternatifs')->with('success', 'Data berhasil ditambahkan!');
    // }
    
    public function update(Request $request, $id)
    {

        Alternatif::find($id)->update($request->all());

        return redirect('/alternatifs');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
    
        if ($query) {
            $alternatifs = Alternatif::where('name', 'like', "%$query%")
                ->orderBy('name', 'asc')
                ->paginate(10);
        } else {
            $alternatifs = Alternatif::paginate(10);
        }
    
        return view('alternatif', ['alternatifs' => $alternatifs, 'query' => $query]);
    }
}