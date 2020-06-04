
@extends('layouts.index')
@section('title', 'Admin')
@section('content')
{{-- {{dd(urlencode($data['text']))}} --}}
<div class="header">
    <div class="container header-container">
        <div class="col-lg-3 header-img-section">
        <img src="{{asset('')}}assets/images/blog-card-1.png">
        </div>
        <div class="col-lg-8 offset-lg-1 header-title-section">
        <p class="header-subtitle">{{$data['company'][0]->nama_perusahaan}}</p>
            <h1 class="header-title">Terima Kasih</h1>
            <p class="header-title-text">Sudah Menggunakan Layanan Kami. Berikut Adalah Detail Order Anda. Untuk Melanjutkan Order, Silahkan Tekan Tombol Lanjutkan dibawah.</p>
            <p>
                {{$data['strip']}} <br>

                ID Order : {{$data['order'][0]->id_order}} <hr>
                Nama : {{$data['order'][0]->nama}} <hr>
                E-mail : {{$data['order'][0]->email}}<hr>
                Nama Provider : {{$data['order'][0]->nama_provider}}<hr>
                Nominal Pulsa : {{$data['order'][0]->nominal_pulsa}}<hr>
                Nomor Pengirim : {{$data['order'][0]->nomor_pengirim}}<hr>
                Bank : {{$data['order'][0]->nama_bank}}<hr>
                Atas Nama :{{$data['order'][0]->atas_nama}}<hr>
                Nomor Rekening : {{$data['order'][0]->nomor_rekening}}<hr>
                {{$data['strip']}} <br>
                Yang akan dapatkan : {{number_format($data['order'][0]->nominal_pulsa * $data['rate'][0]->rate,2,",",".")}} <br>
                {{$data['strip']}}<br>
            </p>
            <div class="learn-more-btn-section">
            <a class="nav-link learn-more-btn btn-invert" href="https://wa.me/6287889655707?text={{urlencode($data['text'])}}" >Lanjutkan.</a>
            </div>
        </div>
    </div>
</div>

<br><br>

@endsection
