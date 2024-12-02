@extends('template')
@section('tulisan1', 'Edit Sepatu')

@section('link1')
    <a href="/sepatu">Kembali</a>
@endsection

@section('konten')
    @foreach ($sepatu as $s)
        <form action="/sepatu/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $s->kodesepatu }}"> <br/>

            <div class="row mb-3">
                <label for="kode" class="col-sm-2 control-label">Kode Sepatu</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="kode" class="form-control" id="kode" value="{{ $s->kodesepatu }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="merk" class="col-sm-2 control-label">Merk Sepatu</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="merk" id="merk" class="form-control" value="{{ $s->merksepatu }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="stock" class="col-sm-2 control-label">Stock Sepatu</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="stock" id="stock" class="form-control" value="{{ $s->stocksepatu }}">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 control-label">Tersedia</label>
                <div class="col-sm-5">
                    <input type="checkbox" name="tersedia" id="tersedia" class="form-check-input" value="Y"
                    {{ $s->tersedia == 'Y' ? 'checked' : '' }}>
                    <label for="tersedia" class="form-check-label">Tersedia</label>
                </div>
                <div class="col-sm-5">
                    <input type="checkbox" name="tidak_tersedia" id="tidak_tersedia" class="form-check-input" value="N"
                    {{ $s->tersedia == 'N' ? 'checked' : '' }}>
                    <label for="tidak_tersedia" class="form-check-label">Tidak Tersedia</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12">
                    <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
                </div>
            </div>
        </form>
    @endforeach
@endsection
