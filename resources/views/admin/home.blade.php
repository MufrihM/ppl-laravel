@extends('dashboard.layout.main')

@section('container')
    <div class="row">
        @foreach($produk as $produk)
            <div class="my-3 col-sm-12 col-md-6 col-lg-4 col-xl-3 rounded-5">
                <div class="card ms-2 mb-3" style=" height: 300px; background-color: #CAF4A9;">
                    <img src="img/{{ $produk->gambar }}" class="card-img-top" height="200px" alt="{{ $produk->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/home/{{ $produk->slug }}"> {{ $produk->nama }}</a>
                        </h5>
                        <p class="card-text">{{ $produk->harga }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row justify-content-center">
        <a href="/tambahProduk" class="btn mb-2 mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 btn text-light" style="background-color: #448D09;"><ion-icon name="add-outline"></ion-icon>Tambahkan Produk</a>
        <a href="/ubahProduk" class="btn mb-2 mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 btn text-light" style="background-color: #E39908;"><ion-icon name="pencil-outline"></ion-icon>Ubah Produk</a>
        <button type="button" class="mb-2 mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 btn text-light" style="background-color: #DD2902;"><ion-icon name="trash-outline"></ion-icon> Hapus produk</button>
    </div>
@endsection