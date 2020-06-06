@extends('layouts.app')
@section('title', 'Admin')
@section('main')
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Ganti Nama Perusahaan</h6>
            <p class="mg-b-30 tx-gray-600"></p>
            <div class="col-md-12">
              <div class="form-layout form-layout-4">
              <form action="{{route('update.company', ['company' => $company[0]->id])}}" method="POST" >
                @csrf
                @method('PUT')
                <div class="row">
                  <label class="col-sm-3 form-control-label">Nama Perusahaan / Jasa: <span class="tx-danger">*</span></label>
                  <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" placeholder="PT. XXX XXXXXXX" name="nama_perusahaan" value="{{$company[0]->nama_perusahaan}}">
                  @error('nama_perusahaan')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                  </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-3 form-control-label">Deskripsi : <span class="tx-danger">*</span></label>
                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                    <textarea class="ckeditor" id="ckedtor" name="deskripsi">{{$company[0]->deskripsi}}</textarea>
                        @error('nama_perusahaan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                  </div>
                <!-- row -->

                <div class="form-layout-footer mg-t-30">
                  <button class="btn btn-info">Tambah</button>
                </div><!-- form-layout-footer -->
            </form>
              </div><!-- form-layout -->
            </div><!-- col-6 -->
          </div><!-- row -->
    </div>
  </div>
  @endsection
