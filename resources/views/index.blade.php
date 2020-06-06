
@extends('layouts.index')
@section('title', 'Admin')
@section('content')
<div class="header">
    <div class="container header-container">
        <div class="col-lg-6 header-img-section">
            <img src="{{asset('')}}assets/images/header.png">
        </div>
        <div class="col-lg-5 offset-lg-1 header-title-section">
        <p class="header-subtitle">{{$data['company'][0]->nama_perusahaan}}</p>
            <h1 class="header-title">Jasa Convert Pulsa</h1>
            <p class="header-title-text">{!!$data['company'][0]->deskripsi!!}</p>
            <div class="learn-more-btn-section">
                <a class="nav-link learn-more-btn btn-invert" href="#" data-toggle="modal" data-target="#order">Order.</a>
            </div>
        </div>
    </div>
</div>

<br><br>

<div id="services"></div>

<div class="services-section">
    <div class="services-section-bg-graphics">
        <img src="{{asset('')}}assets/images/services-section-bg.png">
    </div>
    <div class="container services-container">
        <div class="col-lg-5 services-title-section">
            <p class="services-subtitle">Siapa Kami?</p>
            <h2 class="services-title">Dan Apa Saja Jasa Kami?</h2>
            <p class="services-text">Berikut adalah Jasa Kami.</p>
            <div class="services-accordion">
                <button class="accordion">
                    Convert Pulsa
                </button>
                <div class="panel">
                    <p>
                        Menukarkan Pulsa Anda Ke Uang Tunai
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 offset-lg-1 services-header-img-section">
            <img src="{{asset('')}}assets/images/services-header.png">
        </div>
    </div>
</div>

<div class="services-sales-section">
    <div class="container services-container">
        <div class="col-lg-6 services-header-img-section padding-0">
            <img src="{{asset('')}}assets/images/services-sales-header.png">
        </div>
        <div class="col-lg-5 offset-lg-1 services-title-section">
            <p class="services-subtitle"></p>
            <h2 class="services-title">Terpercaya.</h2>
            <p class="services-text">Sejak 2008 sudah berjalan, dan sudah dipercayai oleh pelanggan kami</p>

            <div class="learn-more-btn-section">
                <a class="nav-link learn-more-btn btn-invert" href="#testi">Lihat Testimoni</a>
            </div>

        </div>
    </div>
</div>

<div id="rate"></div>

<div class="pricing-section">
    <div class="pricing-section-left-bg-graphics">
        <img src="{{asset('')}}assets/images/pricing-section-left-bg.png">
    </div>
    <div class="pricing-section-right-bg-graphics">
        <img src="{{asset('')}}assets/images/pricing-section-right-bg.png">
    </div>
    <div class="container pricing-container">
        <div class="pricing-title">
            <h2>Rate Kami.</h2>
            <p>Rate selalu kami update setiap hari.</p>
        </div>

        <div class="pricing-plan-cards-section">
            <div class="row">

                @foreach ($data['providers'] as $i)
                <div class="col-lg-4 col-md-8 col-xs-10 pricing-card-section">
                    <div class="pricing-card featured">
                        <p class="pricing-rate"> {{$i->header}} </p>
                        <p class="pricing-period">{{$i->nama_provider}}</p>
                        <p class="pricing-text">Rate UbahSaldo.com Terbaik.</p>
                        <div class="pricing-all-plan-features-section basic-plan-features-section">
                            <ul>
                                @forelse ($data['rates'] as $r)
                                    @if ($i->id == $r->id_isp)
                                        <li>{{$r->dari}} &lt; {{$r->sampai}} rate {{$r->rate}} </li>
                                    @endif
                                @empty
                                    <li>Kosong..</li>
                                @endforelse

                            </ul>
                        </div>
                        <a class="nav-link learn-more-btn btn_mdl" href="#"  data-id_isp="{{$i->id}}" data-toggle="modal" data-target="#hitung_rate">Hitung Rate</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div id="testi"></div>

<div class="clients-section">
    <div class="container clients-container">
        <div class="clients-title-section">
            <p class="clients-subtitle">Transaksi Berhasil Kami</p>
            <h2 class="clients-title">Testimonial</h2>
        </div>
        <div class="clients-slider">
            <div class="owl-carousel owl-theme clients-slider-section">
                @foreach ($data['testimonial'] as $item)
                <div class="item client-logo-section">
                <a class="example-image-link" href="{{asset('img/testimonial')}}/{{$item->image}}" data-lightbox="example-set" data-title="{!! $item->deskripsi !!}"><img class="example-image" src="{{asset('img/testimonial')}}/{{$item->image}}"></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<br>
<div id="tos"></div>

<div class="services-section">
    <div class="services-section-bg-graphics">
    <img src="{{asset('')}}assets/images/services-section-bg.png">
    </div>
    <div class="container services-container">
        <div class="col-lg-12 services-title-section">
            <p class="services-subtitle">Syarat & Ketentuan</p>
            <h2 class="services-title">Menggunakan Jasa Kami</h2>
            <p class="services-text">Berikut adalah TOS kami dan Cara transaksi dengan kami.</p>
            <div class="services-accordion">
                @foreach ($data['tos'] as $item)
                <button class="accordion">
                    {{$item->nama_tos}}
                </button>
                <div class="panel">
                    <p>
                        {!!$item->deskripsi!!}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<br><br>
<div id="contact"></div>

<div class="contact-section">
    <div class="container contact-container">
        <div class="col-md-6 contact-title-section">
            <!-- <p class="contact-subtitle">Contact</p> -->
            <h2 class="contact-title">Ada Pertanyaan?<br>Kontak Kami</h2>
            <p class="contact-text">Silahkan kontak kami melalui link sosial media kami yang berada pada bawah website.</p>
            <!-- <div class="learn-more-btn-section">
                <a class="nav-link learn-more-btn btn-invert" href="https://demo.codefest.co.uk/cdn-cgi/l/email-protection#c5aba4a8a085a1aaa8a4acabeba6aaa8">Send
                    an Email</a>
            </div> -->
        </div>
        <div class="col-md-6 contact-header-img">
        <img src="{{asset('')}}assets/images/contact-header-img.png">
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="modal_order" aria-hidden="true" id="order">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <p class="services-subtitle">Order Convert Pulsa Via</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <a href="https://wa.me/6287783036094">
                            <img class="card-img-top" src="{{asset('')}}assets/images/whatsapp.png" alt="Card image cap">
                        </a>
                        <div class="card-body">
                          <p class="card-text text-center">Order via Whatsapp</p>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <a href="http://fb.com/fajarmcv">
                            <img class="card-img-top" src="{{asset('')}}assets/images/facebook-new.png" alt="Card image cap">
                        </a>
                        <div class="card-body">
                          <p class="card-text text-center">Order Via Facebook</p>
                        </div>
                      </div>
                </div>
              </div>

        </div>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="hitung_rate" tabindex="-1" role="dialog" aria-labelledby="hitung_rateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <p class="services-subtitle">Hitung Rate </p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <input class="form-control" id="nominal" type="text" placeholder="Masukkan Nominal...">
            <hr>
                <h4>Yang akan anda terima : </h4> <h4><b class="hasil"></b></h4>
            <hr>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary hitung">Hitung...</button>
        </div>
    </div>
    </div>
</div>
@endsection
