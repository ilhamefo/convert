@extends('layouts.app')
@section('title', 'Admin')
@section('main')
{{-- {{dd($data['rates'][0])}} --}}
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

                    <form action="{{route('update.rates' , ['rates' => $data['rates'][0]->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <label class="col-sm-4 form-control-label">Nama Provider: <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <select class="form-control select2-show-search" data-placeholder="Pilih..." name="id_isp">
                                    <option label="Pilih..." name="id_isp"></option>
                                        @forelse ($data['providers'] as $i)
                                            @if ($data['rates'][0]->id_isp == $i->id)
                                                <option label="" value="{{$i->id}}" selected>{{$i->nama_provider}}</option>
                                            @else
                                                <option label="" value="{{$i->id}}">{{$i->nama_provider}}</option>
                                            @endif
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

                                <input type="text" class="form-control" placeholder="100000" name="dari" value="{{$data['rates'][0]->dari}}">
                                @error('dari')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><!-- row -->
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">sampai: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                                <input type="text" class="form-control" placeholder="200000" name="sampai" value="{{$data['rates'][0]->sampai}}">
                                @error('sampai')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><!-- row -->
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">rate: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                                <input type="text" class="form-control" placeholder="0.99" name="rate" value="{{$data['rates'][0]->rate}}">
                                @error('rate')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><!-- row -->

                        <div class="form-layout-footer mg-t-30">
                            <button class="btn btn-info">Edit</button>
                        </div><!-- form-layout-footer -->
                    </form>
                </div><!-- form-layout -->
            </div><!-- col-6 -->

            <hr>
    </div>

  </div>
  @endsection
