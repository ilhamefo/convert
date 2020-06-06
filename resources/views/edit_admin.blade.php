@extends('layouts.app')
@section('title', 'Admin')
@section('main')
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Admin</h6>
            <p class="mg-b-30 tx-gray-600"></p>
            <div class="col-xl-6">
                <div class="col-md-12">
                    <div class="form-layout form-layout-4">
                    <form action="{{route('update.admin', ['admin' => $data['admin'][0]->id])}}" method="POST" >
                      @csrf
                      @method('PUT')
                      <div class="row">
                        <label class="col-sm-3 form-control-label">Nama Admin: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" placeholder="John Doe" name="name" value="{{$data['admin'][0]->name}}">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                      </div>
                      <div class="row mg-t-20">
                        <label class="col-sm-3 form-control-label">Email : <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" class="form-control" placeholder="namamu@gmail.com" name="email" value="{{$data['admin'][0]->email}}">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                      </div>
                      <div class="row mg-t-20">
                        <label class="col-sm-3 form-control-label">Password: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="password" class="form-control" placeholder="XXXXXXX" name="password" value="">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                      </div>
                      <div class="row mg-t-20">
                          <label class="col-sm-3 form-control-label">Konfirmasi Password: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="password" class="form-control" placeholder="XXXXXXX" name="password_confirmation" value="">
                          @error('password_confirmation')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                          </div>
                        </div>
                      <!-- row -->

                      <div class="form-layout-footer mg-t-30">
                        <button class="btn btn-info">Ubah</button>
                      </div><!-- form-layout-footer -->
                  </form>
                    </div><!-- form-layout -->
                  </div><!-- col-6 -->

            </div><!-- col-6 -->
            <hr>
    </div>

  </div>
  @endsection
