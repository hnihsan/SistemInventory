<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengadaanController extends Controller
{
  public function index(){
    return view('Pengadaan.index')->with('title', 'Pengadaan Barang')->with('sidePengadaan', 'active');
  }

  public function store(Request $req){

  }

  public function create(){
    return view('Pengadaan.tambah')->with('title', 'Pengadaan Barang')->with('sidePengadaan', 'active');
  }

  public function show($Pengadaan){

  }

  public function edit($Pengadaan){

  }

  public function update($Pengadaan){

  }

  public function destroy($Pengadaan){

  }
}
