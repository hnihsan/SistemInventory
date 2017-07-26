@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Daftar Seluruh Barang</h4>
            <p class="category">Data barang-barang yang pernah disimpan di dalam gudang</p>
          </div>

          <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
              <thead>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Jumlah Stok</th>
                <th>Satuan</th>
                <th>Harga Satuan (Rp.)</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Blanko</td>
                  <td>100</td>
                  <td>Lembar</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Proyektor</td>
                  <td>5</td>
                  <td>Unit</td>
                  <td>250000</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Meja Kantor</td>
                  <td>5</td>
                  <td>Unit</td>
                  <td>100000</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Lemari Besi</td>
                  <td>2</td>
                  <td>Unit</td>
                  <td>300000</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Pulpen</td>
                  <td>100</td>
                  <td>Unit</td>
                  <td>3000</td>
                </tr>
              </tbody>
            </table>
            <a href="/Barang/create" class="btn btn-info btn-fill pull-right"><b class="fa fa-plus"></b> Tambah</a>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
