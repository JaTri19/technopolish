<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanFasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_pk()
    {


        return view('admin.peminjamanFasilitas.pk.create');
    }

        public function create_lk()
    {


        return view('admin.peminjamanFasilitas.lk.create');
    }

        public function create_gsp()
    {


        return view('admin.peminjamanFasilitas.gsp.create');
    }

        public function create_tk()
    {


        return view('admin.peminjamanFasilitas.tk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
