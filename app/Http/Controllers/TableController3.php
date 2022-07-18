<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTableRequest;
use App\Http\Requests\UpdateTableRequest;
use App\Models\Table;
use Illuminate\Http\Request;

use Illuminate\Http\Request as HttpRequest;

class TableController3 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table pegawai
        $table = Table::sortable()
        ->latest()
        // ->take(96)
        ->paginate(10)->onEachSide(2)->fragment('datakolam');

        // mengirim data pegawai ke view index
        return view('listTable3', ['table' => $table]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $table = Table::sortable()
        ->latest()
        // ->take(96)
            ->where('id', 'like', "%" . $cari . "%")
            ->paginate(10)->onEachSide(2)->fragment('datakolam');

        // mengirim data pegawai ke view index
        return view('listTable3', ['table' => $table]);
    }
}
