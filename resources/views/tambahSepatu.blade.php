@extends('template')
@section('tulisan1', 'Data Sepatu')

@section('link1')
    <a href="/sepatu">Kembali</a>
@endsection

@section('konten')
    <form action="/sepatu/store" method="post">
        {{ csrf_field() }}

        <div class="row mb-3">
            <label for="merk" class="col-sm-2 control-label">Merk Sepatu</label>
            <div class="col-sm-10">
                <input name="merk" type="text" class="form-control" id="merk" required="required" placeholder="Masukkan Merk Sepatu">
            </div>
        </div>

        <div class="row mb-3">
            <label for="stock" class="col-sm-2 control-label">Stock</label>
            <div class="col-sm-10">
                <input name="stock" type="number" class="form-control" id="stock" required="required" placeholder="Masukkan Stock Sepatu">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 control-label">Tersedia</label>
            <div class="col-sm-5">
                <input type="checkbox" name="tersedia" id="tersedia" class="form-check-input" value="Y">
                <label for="tersedia" class="form-check-label">Tersedia</label>
            </div>
            <div class="col-sm-5">
                <input type="checkbox" name="tidak_tersedia" id="tidak_tersedia" class="form-check-input" value="N">
                <label for="tidak_tersedia" class="form-check-label">Tidak Tersedia</label>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
        </div>
    </form>
@endsection
