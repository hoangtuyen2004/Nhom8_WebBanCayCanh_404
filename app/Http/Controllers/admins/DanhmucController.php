<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\Danhmuc;
use Illuminate\Http\Request;

class DanhmucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('admins.sanpham.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Danhmuc $danhmuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Danhmuc $danhmuc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Danhmuc $danhmuc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Danhmuc $danhmuc)
    {
        //
    }
}
