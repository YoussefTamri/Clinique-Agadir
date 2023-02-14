@extends('admin.master')
@section('css')

@section('title')
    {{ trans('doctors.edite_doctor') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('doctors.edite_doctor') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <form action="{{route('Users.update','test')}}" method="post" enctype="multipart/form-data">
                             {{method_field('patch')}}
                             @csrf
                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('doctors.email')}}</label>
                                    <input type="hidden" value="{{$user->id}}" name="id">
                                    <input type="email" name="email" value="{{$user->email}}" class="form-control">
                                    @error('Email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <br>


                            <br>
                            <div class="form-row">
                                <div class="col">
                              <select name="admin" value="{{$user->is_admin}}" class="form-select" aria-label="Default select example">
                                <option selected> <?php if($user->is_admin){
                                    echo "Admin";
                                }else {
                                    echo "Not Admin";
                                } ?></option>
                                <option value="1">Admin</option>
                                <option value="0">Not Admin</option>

                              </select>
                                </div>

                              <br>

                              <div class="col">
                              <select  name="super_admin" value="{{$user->is_super}}" class="form-select" aria-label="Default select example">
                                <option  selected><?php if($user->is_super){
                                    echo "Super Admin";
                                }else {
                                    echo "Not Super Admin";
                                } ?></option>
                                <option value="1">Super Admin</option>
                                <option value="0">Not Super Admin</option>

                              </select>
                            </div>

                            </div>
                              <br>
                              <br>


                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('doctors.name')}}</label>
                                    <input id="id_ar" type="text" name="name" value="{{ $user->name }}"  class="form-control">
                                    @error('Name_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <br>





                            <div class="form-group">
                                <div class="col">
                                    <label for="title">{{trans('doctors.phone')}}</label>
                                    <input type="text" value="{{$user->phone}}" name="phone" class="form-control">
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>




                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{trans('doctors.address')}}</label>
                                <textarea class="form-control" name="Address"
                                          id="exampleFormControlTextarea1" rows="4">{{$user->address}}</textarea>
                                @error('Address')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>




                            <button class="btn btn-success btn-sm" type="submit">{{trans('doctors.next')}}</button>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

@endsection
