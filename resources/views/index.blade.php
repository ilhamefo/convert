
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
            <h1 class="header-title">Jasa Convert Pulsa, XXXX, XXXX.</h1>
            <p class="header-title-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
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
            <p class="services-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor.</p>
            <div class="services-accordion">
                <button class="accordion">
                    Convert Pulsa
                </button>
                <div class="panel">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                </div>
                <button class="accordion">
                    Convert xxx
                </button>
                <div class="panel">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
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
            <p class="services-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>

            <div class="learn-more-btn-section">
                <a class="nav-link learn-more-btn btn-invert" href="#pricing">Lihat Testimoni</a>
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
                        <a class="nav-link learn-more-btn btn_mdl" href="#"  data-header="{{$i->header}}" data-toggle="modal" data-target="#hitung_rate">Hitung Rate</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div id="tos"></div>

<div class="services-section">
    <div class="services-section-bg-graphics">
    <img src="{{asset('')}}assets/images/services-section-bg.png">
    </div>
    <div class="container services-container">
        <div class="col-lg-12 services-title-section">
            <p class="services-subtitle">Syarat & Ketentuan</p>
            <h2 class="services-title">Menggunakan Jasa Kami</h2>
            <p class="services-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor.</p>
            <div class="services-accordion">
                <button class="accordion">
                    Convert Pulsa
                </button>
                <div class="panel">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                </div>
                <button class="accordion">
                    Convert xxx
                </button>
                <div class="panel">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                </div>
                <button class="accordion">
                    Cara
                </button>
                <div class="panel">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                </div>
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
            <p class="contact-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor.</p>
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
            <p class="services-subtitle">Order Convert Pulsa </p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <form id="regForm" action="{{route('order')}}" method="POST">
            @csrf
                <div class="tab">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="John Doe" name="nama" {{old('nama')}}>
                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                      <input type="text" class="form-control" name="email" placeholder="Another input" value="{{old('email')}}">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="tab">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <select data-placeholder="Pilih Provider" data-allow-clear="1" name="id_isp">
                            <option label="Pilih..." ></option>
                                @forelse ($data['providers'] as $i)
                                        <option value="{{$i->id}}">{{$i->nama_provider}}</option>
                                @empty
                                        <option label="">Kosong</option>
                                @endforelse
                          </select>
                          @error('id_isp')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="nominal_pulsa">nominal pulsa</label>
                        <input type="text" class="form-control" name="nominal_pulsa" placeholder="100000" value="{{old('nominal_pulsa')}}">
                        @error('nominal_pulsa')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="nomor_pengirim">Nomor Pengirim</label>
                        <input type="text" class="form-control" name="nomor_pengirim" placeholder="081111XXXXX" value="{{old('nomor_pengirim')}}">
                        @error('nomor_pengirim')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                </div>
                <div class="tab">

                      <div class="form-group">
                        <label for="nama">Pilih Bank</label>
                        <select data-placeholder="Pilih Provider" data-allow-clear="1" name="id_bank">
                            <option label="Pilih..." ></option>
                                @forelse ($data['banks'] as $i)
                                        <option value="{{$i->id}}">{{$i->nama_bank}}</option>
                                @empty
                                        <option label="">Kosong</option>
                                @endforelse
                          </select>
                          @error('id_bank')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="atas_nama">Atas Nama</label>
                        <input type="text" class="form-control" name="atas_nama" placeholder="John Doe" value="{{old('email')}}" >
                        @error('atas_nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="nomor_rekening">Nomor Rekening</label>
                        <input type="text" class="form-control" name="nomor_rekening" placeholder="333-XXX-XXX" value="{{old('nomor_rekening')}}">
                        @error('nomor_rekening')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                </div>


                <div style="text-align:center;margin-top:40px;">
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                </div>

        </form>
        </div>
        <div class="modal-footer">
            <div style="overflow:auto;">
                <div style="float:right;">
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-info">Previous</button>
                  <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-info">Next</button>
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
            <p class="services-subtitle">Hitung Rate Telkomsel </p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <input class="form-control" id="nominal" type="text" placeholder="Masukkan Nominal...">
            <hr>
                <h4>Yang akan anda terima : </h4> <h4>Rp. <b class="hasil"></b></h4>
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
