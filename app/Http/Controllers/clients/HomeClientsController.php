<?php

namespace App\Http\Controllers\clients;

use App\Models\SanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeClientsController extends Controller
{
    public function index(){
        $list =SanPham ::get();
        return view('clients.trangchu',compact('list'));
    }
}
