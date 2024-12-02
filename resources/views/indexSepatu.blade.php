@extends('template')

@section('tulisan1', 'Database Sepatu')

@section('link1')
    <a href="/sepatu/tambahSepatu" class="btn btn-primary"> + Tambah Sepatu Baru</a>
@endsection

@section('konten')
    <br>
        <form action="/sepatu/cari" method="GET">
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Cari Merk Sepatu: </label>
                <div class="col-sm-6">
                    <input type="text" name="cari" class="form-control" placeholder="Cari sepatu berdasarkan merk..." value="{{ old('cari') }}">
                </div>
                <div class="col-sm-4">
                    <input type="submit" value="CARI" class="btn btn-success">
                </div>
            </div>
        </form>
    <br/>

    <table class="table table-striped table-hover">
        <tr style="text-align: center;">
            <th>Kode</th>
            <th>Merk Sepatu</th>
            <th>Stock</th>
            <th>Ketersediaan</th>
            <th>Opsi</th>
        </tr>
        @foreach ($sepatu as $s)
            <tr style="text-align: center;">
                <td>{{ $s->kodesepatu }}</td>
                <td>{{ $s->merksepatu }}</td>
                <td>{{ $s->stocksepatu }}</td>
                <td class="align-middle">
                    {{ $s->tersedia == 'Y' ? 'Tersedia' : 'Tidak Tersedia' }}
                </td>

                <td>
                    <a href="/sepatu/edit/{{ $s->kodesepatu }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                    |
                    <a href="/sepatu/hapus/{{ $s->kodesepatu }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
    <br/>
    Halaman : {{ $sepatu->currentPage() }} <br/>
	Jumlah Data : {{ $sepatu->total() }} <br/>
	Data Per Halaman : {{ $sepatu->perPage() }} <br/>

    {{ $sepatu->links() }}

@endsection
