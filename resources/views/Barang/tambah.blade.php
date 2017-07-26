@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                  <div class="header">
                      <h4 class="title">Tambah Barang</h4>
                  </div>
                  <div class="content">
                      <form>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukan Nama Barang" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Satuan</label>
                                    <input type="text" class="form-control" placeholder="Masukan Satuan" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Harga Satuan (Rp.)</label>
                                    <input type="number" class="form-control" value='0'>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Barang</button>
                        <div class="clearfix"></div>
                      </form>
                  </div>
                </div>
            </div>
    </div>
</div>
@endsection
