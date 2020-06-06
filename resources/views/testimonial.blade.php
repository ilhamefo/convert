@extends('layouts.app')
@section('title', 'Admin')
@section('main')
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Tambah Testimonial</h6>
            <p class="mg-b-30 tx-gray-600"></p>
            <div class="col-md-12">
              <div class="form-layout form-layout-4">
              <form action="{{route('store.testimonial')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <label class="col-sm-3 form-control-label">Deskripsi: <span class="tx-danger">*</span></label>
                  <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                  <textarea name="deskripsi" class="ckeditor" id="ckeditor"></textarea>
                  @error('deskripsi')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                  </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-3 form-control-label">Gambar: <span class="tx-danger">*</span></label>
                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <label class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <span class="custom-file-control"></span>
                          </label>
                    @error('image')
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
                            <th style="width:10%">No</th>
                            <th style="width:40%">Deskripsi</th>
                            <th style="width:40%">Image</th>
                            <th style="width:10%">Action</th>
                        </tr>
                    </thead>
                    <tbody id="id_provider">
                        @foreach ($testimonial as $i)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{!! $i->deskripsi !!}</td>
                            <td> <img src="{{asset('img/testimonial')}}/{{$i->image}}" style="height: 200px"> </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{route('edit.testimonial', ['testimonial' => $i->id])}}" class="btn btn-primary"><i class="fa fa-cogs"></i></a>
                                    <form action="{{route('destroy.testimonial',['testimonial' => $i->id])}}" method="POST"
                                        class="target">
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
