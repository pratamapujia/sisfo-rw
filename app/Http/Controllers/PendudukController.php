<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PendudukController extends Controller
{
  public function index(Request $request)
  {
    $penduduk = Penduduk::all();
    // dd($penduduk);

    // $search = $request->get('search');
    // $penduduk = Penduduk::when($search, function ($query) use ($search) {
    //   return $query->where('nama_lengkap', 'LIKE', "%{$search}%")
    //     ->orWhere('nik', 'LIKE', "%{$search}%");
    // })->paginate(10);

    return view('penduduk.index', ['penduduk' => $penduduk]);
    // return view('penduduk.index');
  }

  public function create()
  {
    return view('penduduk.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'nik' => 'required',
      'nama_lengkap' => 'required',
      'alamat' => 'required',
      'jenis_kelamin' => 'required',
      'agama' => 'required',
      'status' => 'required',
      'tempat' => 'required',
      'tanggal_lahir' => 'required|date',
    ]);

    Penduduk::create($request->all());

    return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil disimpan.');
  }

  public function edit($id)
  {
    $penduduk = Penduduk::findOrFail($id);

    return view('penduduk.edit', compact('penduduk'));
  }

  public function update(Request $request, $id)
  {
    $penduduk = Penduduk::findOrFail($id);

    $request->validate([
      'nik' => 'required',
      'nama_lengkap' => 'required',
      'alamat' => 'required',
      'jenis_kelamin' => 'required',
      'agama' => 'required',
      'status' => 'required',
      'tempat' => 'required',
      'tanggal_lahir' => 'required|date',
    ]);

    $penduduk->update($request->all());

    return redirect()->route('penduduk.index')->with('success', 'Data Warga berhasil diperbarui.');
  }

  public function destroy(string $id) 
  {
    $penduduk = Penduduk::findOrFail($id);

    if ($penduduk->delete()) {
        return redirect(route('penduduk.index'))->with('success', 'Data Warga berhasil dihapus!');
    } else {
        return redirect(route('penduduk.index'))->with('error', 'Maaf, tidak dapat menghapus data!');
    }

    return redirect(route('penduduk.index'));
  }

}
