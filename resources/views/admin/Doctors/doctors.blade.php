@extends('admin.master')
@section('css')


@section('title')
{{__('doctors.add_doctors')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{__('doctors.add_doctors')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">

                <li class="breadcrumb-item active">{{__('doctors.add_doctors')}}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->



<div class="row">


    @if ($errors->any())
    <div class="error">{{ $errors->first('Name') }}</div>
    @endif


    <div class="col-xl-12 mb-30">
      <div class="card card-statistics h-100">
        <div class="card-body">


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
              </div>
            @endif




            <br><br>
            <div class="col-xs-12">
                <div class="col-md-12">
                    <br>
                    <form action="{{Route('Doctors.store')}}"  method="post" enctype="multipart/form-data">
                     @csrf
                    <div class="form-row">
                        <div class="col">
                            <label for="title">{{trans('doctors.email')}}</label>
                            <input type="email" name="Email" class="form-control">
                            @error('Email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">{{trans('doctors.password')}}</label>
                            <input type="password" name="Password" class="form-control">
                            @error('Password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>


                    <div class="form-row">
                        <div class="col">
                            <label for="title">{{trans('doctors.name_ar')}}</label>
                            <input id="id_ar" type="text" name="Name_ar" dir="rtl" class="keyboardInput">
                            @error('Name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">{{trans('doctors.name_en')}}</label>
                            <input type="text" name="Name_en" class="form-control">
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
                                <option selected disabled>{{trans('doctors.category')}}...</option>
                                @foreach($Category as $Categorys)
                                    <option value="{{$Categorys->id}}">{{$Categorys->Name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputState">{{trans('doctors.gender')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="Gender_id">
                                <option selected disabled>{{trans('doctors.gender')}}...</option>
                                @foreach($Gender as $gender)
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
                                <input class="form-control" type="text"  id="datepicker-action" name="From_date" data-date-format="yyyy-mm-dd"  required>
                            </div>
                            @error('from_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col">
                            <label for="title">{{trans('doctors.phone')}}</label>
                            <input type="text" name="phone" class="form-control">
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> {{trans('doctors.chose_image')}} </label>
                            <input type="file" class="form-control" name="photo" required>
                            @error('photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>





                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">{{trans('doctors.address')}}</label>
                        <textarea class="form-control" name="Address"
                                  id="exampleFormControlTextarea1" rows="4"></textarea>
                        @error('Address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>




                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">{{trans('doctors.description')}}</label>
                        <textarea class="form-control" name="Description"
                                  id="exampleFormControlTextarea1" rows="4"></textarea>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('doctors.next')}}</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
@section('js')

@endsection
