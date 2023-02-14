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
                            <form action="{{route('Doctors.update','test')}}" method="post" enctype="multipart/form-data">
                             {{method_field('patch')}}
                             @csrf
                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('doctors.email')}}</label>
                                    <input type="hidden" value="{{$doctor->id}}" name="id">
                                    <input type="email" name="email" value="{{$doctor->email}}" class="form-control">
                                    @error('Email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="title">{{trans('doctors.password')}}</label>
                                    <input type="password" name="Password"  class="form-control">
                                    @error('Password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>


                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('doctors.name_ar')}}</label>
                                    <input id="id_ar" type="text" name="Name_ar" value="{{ $doctor->getTranslation('Name', 'ar') }}" dir="rtl" class="keyboardInput">
                                    @error('Name_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="title">{{trans('doctors.name_en')}}</label>
                                    <input type="text" name="Name_en" value="{{ $doctor->getTranslation('Name', 'en') }}" class="form-control">
                                    @error('Name_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputCity">{{trans('doctors.category')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="category_id">
                                        <option value="{{$doctor->Category_id}}">{{$doctor->Categoys->Name}}</option>
                                        @foreach($Categoys as $Categorys)
                                            <option value="{{$Categorys->id}}">{{$Categorys->Name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Categoys_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col">
                                    <label for="inputState">{{trans('doctors.gender')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Gender_id">
                                        <option value="{{$doctor->Gender_id}}">{{$doctor->genders->Name}}</option>
                                        @foreach($genders as $gender)
                                            <option value="{{$gender->id}}">{{$gender->Name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Gender_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('doctors.from_date')}}</label>
                                    <div class='input-group date'>
                                        <input class="form-control" type="text"  id="datepicker-action"  value="{{$doctor->from_date}}" name="form_date" data-date-format="yyyy-mm-dd"  required>
                                    </div>
                                    @error('form_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="form-group">
                                <div class="col">
                                    <label for="title">{{trans('doctors.phone')}}</label>
                                    <input type="text" value="{{$doctor->Phone}}" name="phone" class="form-control">
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <br>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{trans('doctors.chose_image')}}  </label>
                                    <input type="file" class="form-control" name="photo" required>
                                    @error('photo')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>


                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{trans('doctors.address')}}</label>
                                <textarea class="form-control" name="Address"
                                          id="exampleFormControlTextarea1" rows="4">{{$doctor->Address}}</textarea>
                                @error('Address')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{trans('doctors.description')}}</label>
                                <textarea class="form-control" name="description"
                                          id="exampleFormControlTextarea1" rows="4">{{$doctor->Description}}</textarea>
                                @error('description')
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
