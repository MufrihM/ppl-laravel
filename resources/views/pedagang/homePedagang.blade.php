@extends('dashboard.layout.main')

@section('container')
    <div class="row">
        @foreach($produk as $produk)
            <div class="my-3 col-sm-12 col-md-6 col-lg-4 col-xl-3 rounded-5">
                <div class="card ms-2 mb-3" style=" height: 300px; background-color: #CAF4A9;">
                    <img src="img/{{ $produk->gambar }}" class="card-img-top" height="200px" alt="{{ $produk->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="#">{{ $produk->nama }}</a>
                        </h5>
                        <p class="card-text">{{ $produk->harga }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection