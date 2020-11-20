<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Customer;
use App\Jo;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index(Request $request) {
        // dd($request->all());
        $jo=Jo::find($request->jo_id);
        $asset = Asset::join('jo', 'asset.jo_id', 'jo.id')->join('project', 'jo.project_id', 'project.id')->join('customer', 'project.customer_id', 'customer.id')->where('jo.id', $request->jo_id)->get();
        // dd($asset);
        // $asset= Asset::all();
        return view('asset.index', compact('asset', 'jo'));
    }

    public function show() {

    }

    public function store(Request $request) {

        $asset = Asset::create($request->except('foto'));
        if ($request->hasFile('foto')) {
            // Mengambil file yang diupload
            $uploaded_foto = $request->file('foto');
            // mengambil extension file
            $extension = $uploaded_foto->getClientOriginalExtension();
            // membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
            // menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $uploaded_foto->move($destinationPath, $filename);
            // mengisi field cover di book dengan filename yang baru dibuat
            $asset->foto = $filename;
            $asset->save();
        }
        return redirect()->route('asset.index', ['jo_id'=>$request->jo_id]);
    }

    public function create(Request $request) {
        $jo=Jo::find($request->jo_id);
            $customer = Customer::all();
            return view('asset.create', compact('customer', 'jo'));
    }

    public function edit(Request $request, Asset $asset) {
    // dd($asset);
        $customer = Customer::all();
        $jo=Jo::find($request->jo_id);
        return view('asset.edit', compact('asset', 'customer', 'jo'));
    }

    public function update(Request $request, Asset $asset) {

        $asset->update($request->all());
        if ($request->hasFile('foto')) {
            // mengambil foto yang diupload berikut ekstensinya
            $filename = null;
            $uploaded_foto = $request->file('foto');
            $extension = $uploaded_foto->getClientOriginalExtension();
            // membuat nama file random dengan extension
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            // memindahkan file ke folder public/img
            $uploaded_foto->move($destinationPath, $filename);
            // hapus foto lama, jika ada
            if ($asset->foto) {
            $old_foto = $asset->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
            . DIRECTORY_SEPARATOR . $asset->foto;
            try {
                 File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }

        $asset->serial_number = $request->serial_number;
        $asset->produk_id = $request->produk_id;
        $asset->produk_type = $request->produk_type;
        $asset->foto = $filename;
        $asset->save();
        }

        return redirect()->route('asset.index', ['jo_id'=>$asset->jo_id])->with('status','Data Asset updated!')->with('success', true);
    }

    public function destroy(Request $request, Asset $asset) {
        $jo=Jo::find($asset->jo_id);
        $asset->delete();
        return redirect()->route('asset.index', ['jo_id'=>$jo->id])->with('Data Asset deleted!')->with('success', true);
    }
}
