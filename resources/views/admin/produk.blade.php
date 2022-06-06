@extends('dashboard.layout.main')

@section('container')
    <div class="container mt-3">
        <div class="card mb-3" style=" width: 800px; height: 600px; background-color: #CAF4A9;">
            <img src="{{ asset('img/' . $produk->gambar) }}" class="img-fluid mx-0" style="height: 400px">
            <div class="card-body">
                <h4>{{ $produk->nama }}</h4>
                <p class="card-text">{{ $produk->harga }}</p>
            </div>
        </div>
    </div>
@endsection