@extends('template')

@section('tulisan1','Keranjang Belanja')

@section('link1')
    <a href="/keranjangbelanja/create" class="btn btn-primary"> + Add to cart</a>
@endsection

@section('konten')
<div class="container">
    <h1>Keranjang Belanja</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr style="text-align: center;">
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keranjangbelanja as $k)
                <tr style="text-align: center;">
                    <td>{{ $k->ID }}</td>
                    <td>{{ $k->KodeBarang }}</td>
                    <td>{{ $k->Jumlah }}</td>
                    <td align="right">{{ number_format($k->Harga, 0, ',', '.') }}</td>
                    <td align="right">{{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="/keranjangbelanja/create" class="btn btn-info">Beli</a>
                        {{-- <form action="/keranjangbelanja/destroy/{{ $k->ID }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br/>
</div>
@endsection
