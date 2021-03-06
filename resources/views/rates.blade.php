@extends('layouts.app')
@section('title', 'Admin')
@section('main')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
{{-- {{var_dump($data['providers'])}} --}}

            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Menu Rate</h6>
            <p class="mg-b-30 tx-gray-600"></p>
            <div class="col-xl-6">
                <div class="form-layout form-layout-4">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Tambah Rate</h6>
                    <p class="mg-b-30 tx-gray-600">*Rate berguna untuk menghitung nominal yang akan didapat pelanggan.</p>

                    <form action="{{route('store.rates')}}" method="POST">
                        @csrf
                        <div class="row">
                            <label class="col-sm-4 form-control-label">Nama Provider: <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <select class="form-control select2-show-search" data-placeholder="Pilih..." name="id_isp">
                                    <option label="Pilih..." name="id_isp"></option>
                                        @forelse ($data['providers'] as $i)
                                        <option label="" value="{{$i->id}}">{{$i->nama_provider}}</option>
                                        @empty
                                        <option label="">Kosong</option>
                                        @endforelse
                                  </select>
                                @error('id_isp')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><!-- row -->
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">dari: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                                <input type="text" class="form-control" placeholder="100000" name="dari" value="{{old('dari')}}">
                                @error('dari')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><!-- row -->
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">sampai: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                                <input type="text" class="form-control" placeholder="200000" name="sampai"
                                    value="{{old('sampai')}}">
                                @error('sampai')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><!-- row -->
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">rate: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                                <input type="text" class="form-control" placeholder="0.99" name="rate"
                                    value="{{old('rate')}}">
                                @error('rate')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><!-- row -->

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
                            <th style="width:20%">Nama</th>
                            <th style="width:20%">Dari</th>
                            <th style="width:20%">Sampai</th>
                            <th style="width:20%">Rate</th>
                            <th style="width:10%">Action</th>
                        </tr>
                    </thead>
                    <tbody id="id_provider">
                        @foreach ($data['rates'] as $i)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$i->nama_provider}}</td>
                            <td>{{$i->dari}}</td>
                            <td>{{$i->sampai}}</td>
                            <td>{{$i->rate}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{route('edit.rates', ['rates' => $i->id])}}" class="btn btn-primary"><i class="fa fa-cogs"></i></a>
                                    <form action="{{route('destroy.rates',['rates' => $i->id])}}" method="POST" class="target">
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
            </div><!-- bd -->

        </div><!-- row -->

    </div>

</div>
@endsection
