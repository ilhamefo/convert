@extends('layouts.app')
@section('title', 'Admin')
@section('main')
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Menu Provider</h6>
            <p class="mg-b-30 tx-gray-600"></p>
            <div class="col-xl-6">
              <div class="form-layout form-layout-4">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Provider</h6>
                <p class="mg-b-30 tx-gray-600">*Header Berfungsi Memberi Rate Pada Header Card.</p>

              <form action="{{route('update.providers', ['providers' => $data[0]->id])}}" method="POST" >
                @csrf
                @method('PUT')
                <div class="row">
                  <label class="col-sm-4 form-control-label">Nama Provider: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" placeholder="XL / Tsel / dll" name="nama_provider" value="{{$data[0]->nama_provider}}">
                  @error('nama_provider')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Header: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                  <input type="text" class="form-control" placeholder="0.99" name="header" value="{{$data[0]->header}}">
                  @error('header')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                  </div>
                </div><!-- row -->

                <div class="form-layout-footer mg-t-30">
                  <button class="btn btn-info">Update</button>
                </div><!-- form-layout-footer -->
            </form>
              </div><!-- form-layout -->
            </div><!-- col-6 -->
            <hr>
    </div>

  </div>
  @endsection
