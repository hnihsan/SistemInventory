@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Daftar Seluruh Pengadaan Barang</h4>
            <p class="category">Data-data keseluruhan pengadaan barang</p>
          </div>

          <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
              <thead>
                <th>Kode</th>
                <th>Tanggal</th>
                <th>Unit Tujuan</th>
                <th>Vendor</th>
                <th>Petugas</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>27 Mei 2017</td>
                  <td>Bid. Kemasyarakatan</td>
                  <td>PT. Teknik Informatika Sejahtera</td>
                  <td>Budi</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>27 Mei 2017</td>
                  <td>Bid. Kesehatan</td>
                  <td>PT. Teknik Informatika Sejahtera</td>
                  <td>Budi</td>
                </tr>
              </tbody>
            </table>
            <a href="/Pengadaan/create" class="btn btn-info btn-fill pull-right"><b class="fa fa-plus"></b> Tambah</a>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
