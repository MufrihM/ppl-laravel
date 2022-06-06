@extends('dashboard.layout.main')

@section('container')
    <div class="container-fluid" >
        <a href="/home" class="btn mt-2"><ion-icon name="arrow-back-outline"></ion-icon></a>
        <div class="row justify-content-center">
            <div class="col-lg-8" style="background-color: #EEF1E0; height: 400px;">
                <h4 class="pt-3 px-3">Mengubah Produk</h4>
                <div class="mb-2 pt-2 px-3">
                    <label class="form-label" for="input1">Nama Produk</label>
                    <input class="form-control" type="text" id="input1" placeholder="Masukkan nama produk">
                </div>
                <div class="mb-2 px-3">
                    <label class="form-label" for="input2">Harga Produk</label>
                    <input class="form-control" type="text" id="input2" placeholder="Masukkan harga produk">
                </div>
                <div class="mb-2 px-3">
                    <label class="form-label" for="input3">Gambar Produk</label>
                    <input class="form-control" type="text" id="input3" placeholder="Masukkan nama produk">
                </div>
                <div class="row justify-content-center pt-4">
                    <button type="submit" class="mb-2 mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 btn text-light" style="background-color: #448D09;" name="submit">Simpan</button>
                    <button type="button" class="mb-2 mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 btn text-light" style="background-color: #DD2902;">Batal</button>
                </div>
            </div>
        </div>
    </div>
@endsection