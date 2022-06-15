<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTableRequest;
use App\Http\Requests\UpdateTableRequest;
use App\Models\Table;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cari = $request->query('cari');

        // if (!empty($cari)) {
        //     $tables = Table::sortable()
        //         ->where('id', 'like', '%' . $cari . '%')
        //         ->orWhere('ph_1', 'like', '%' . $cari . '%')
                // ->orWhere('temp_1', 'like', '%' . $cari . '%')
                // ->orWhere('temp_2', 'like', '%' . $cari . '%')
                // ->orWhere('temp_3', 'like', '%' . $cari . '%')
                // ->orWhere('feeder_distance', 'like', '%' . $cari . '%')
                // ->orWhere('water_distance', 'like', '%' . $cari . '%')
                // ->orWhere('water_flow', 'like', '%' . $cari . '%')
        //         ->paginate(10)->onEachSide(2)->fragment('datakolam');
        // } else {
        //     $tables = Table::sortable()->paginate(10)->onEachSide(2)->fragment('datakolam');
        // }

        // return view('listTable')->with([
        //     'Table' => $tables,
        //     'cari' => $cari,
        // ]);

        
    		// mengambil data dari table pegawai
            $table = Table::sortable()->paginate(10)->onEachSide(2)->fragment('datakolam');
 
    		// mengirim data pegawai ke view index
		return view('listTable',['table' => $table]);
 
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTableRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function show(Table $table)
    {
        //
    }

    public function listTable(Table $table)
    {





        // $tables = Table::sortable()->paginate(10)->onEachSide(2)->fragment('datakolam');
        // return view('listTable', compact('tables'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTableRequest  $request
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTableRequest $request, Table $table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        //
    }
}
