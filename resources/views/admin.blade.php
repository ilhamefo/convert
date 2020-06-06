@extends('layouts.app')
@section('title', 'Admin')
@section('main')
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Tambah Admin (lv2)</h6>
            <p class="mg-b-30 tx-gray-600"></p>
            <div class="col-md-12">
              <div class="form-layout form-layout-4">
              <form action="{{route('store.admin')}}" method="POST" >
                @csrf
                <div class="row">
                  <label class="col-sm-3 form-control-label">Nama Admin: <span class="tx-danger">*</span></label>
                  <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" placeholder="XXXXXXX" name="name" value="{{old('name')}}">
                  @error('name')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-3 form-control-label">Email : <span class="tx-danger">*</span></label>
                  <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" placeholder="XXXXXXX" name="email" value="{{old('email')}}">
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
                  <button class="btn btn-info">Tambah</button>
                </div><!-- form-layout-footer -->
            </form>
              </div><!-- form-layout -->
            </div><!-- col-6 -->
            <hr>
            <div class="bd bd-gray-300 rounded table-responsive">
                <table class="table mg-b-0">
                    <thead>
                        <tr>
                            <th style="width:10%">ID</th>
                            <th style="width:26%">Name</th>
                            <th style="width:26%">Email</th>
                            <th style="width:26%">Level</th>
                            <th style="width:10%">Action</th>
                        </tr>
                    </thead>
                    <tbody id="id_provider">
                        @foreach ($admin as $i)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$i->name}}</td>
                            <td>{{$i->email}}</td>
                            <td>
                                @if ($i->level == '1')
                                    {{'Admin'}}
                                    @else
                                    {{'Petugas'}}
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{route('edit.admin', ['admin' => $i->id])}}"
                                        class="btn btn-primary"><i class="fa fa-cogs"></i></a>
                                    <form action="{{route('destroy.admin',['admin' => $i->id])}}" method="POST" class="target">
                                  @csrf
                                  @method('DELETE')
                                  <button type=" submit" class="btn btn-danger tmb_hps" data-loop="{{$loop->index+1}}">
                                        <i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
          </div><!-- row -->
    </div>
  </div>
  @endsection
