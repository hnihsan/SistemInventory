<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
      return view('Barang.index')->with('title','Barang')->with('sideBarang', 'active');
    }

    public function store(Request $req){

    }

    public function create(){
      return view('Barang.tambah')->with('title','Barang')->with('sideBarang', 'active');
    }

    public function show($Barang){

    }

    public function edit($Barang){

    }

    public function update(){

    }

    public function destroy($Barang){

    }


}
