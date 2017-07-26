@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                  <div class="header">
                      <h4 class="title">Tambah Pengadaan Barang</h4>
                  </div>
                  <div class="content">
                      <form>
                        <div class="row">
                            <div class="col-md-5">
                                <div  class="form-group">
                                    <label>Tanggal</label>
                                    <input id="tambah-pengadaan" type="text" class="form-control" placeholder="Tanggal Pengadaan" value="{{date('Y-m-d')}}">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div id="unit-tambah-pengadaan" class="form-group">
                                    <label for="unit-tambah-pengadaa">Unit Kerja Tujuan</label>
                                    <select  class="form-control" placeholder="Masukan Satuan">
                                          <option selected value="">Pilih Unit Tujuan</option>
                                          <option value="">Test 1</option>
                                          <option value="">Test 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="form-group">
                              <label >Vendor</label>
                              <input type="text" class="form-control" placeholder="Masukan Perusahaan Pensuplai">
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right"><b class='fa fa-plus'></b>Tambah</button>
                        <div class="clearfix"></div>
                      </form>
                  </div>
                </div>
            </div>
    </div>
</div>


</script>
@endsection
