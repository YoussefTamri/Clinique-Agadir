@extends('admin.master')
@section('css')


@section('title')
{{trans('task.Add_Operations')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">            {{trans('task.Add_Operations')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">

                <li class="breadcrumb-item active">           {{trans('task.Add_Operations')}}</li>
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
                    <form action="{{Route('Operations.store')}}"  method="post" >
                     @csrf



                    <div class="form-row">
                        <div class="col">


                            <label for="title">{{trans('doctors.name_ar')}}</label>
                            <input type="text" id="id_ar" name="Name_ar" dir="rtl" class="keyboardInput">
                            @error('Name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">{{trans('doctors.name_en')}}</label>
                            <input  type="text" name="Name_en" class="form-control">
                            @error('Name_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>



                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputCity">{{trans('room.room_nomber')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="Room_id">
                                <option selected disabled>{{trans('room.room_nomber')}}...</option>
                                @foreach($Room as $Rooms)
                                    <option value="{{$Rooms->id}}">{{$Rooms->number}}</option>
                                @endforeach
                            </select>
                            @error('Room_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputState">{{trans('doctors.doctors')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="Doctors_id">
                                <option selected disabled>{{trans('doctors.doctors')}}...</option>
                                @foreach($Doctor as $Doctors)
                                    <option value="{{$Doctors->id}}">{{$Doctors->Name}}</option>
                                @endforeach
                            </select>
                            @error('Doctors_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group col">
                        <div class="form-group col">
                            <label for="inputState">{{trans('doctors.Patient')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="Patient_id">
                                <option selected disabled>{{trans('doctors.Patient')}}...</option>
                                @foreach($Patient as $Patients)
                                    <option value="{{$Patients->id}}">{{$Patients->name}}</option>
                                @endforeach
                            </select>
                            @error('Patient_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col">
                            <label for="inputState">{{trans('doctors.status')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="Status_id">
                                <option selected disabled>{{trans('doctors.status')}}...</option>
                                @foreach($OperationStatus as $OperationState)
                                    <option value="{{$OperationState->id}}">{{$OperationState->Name}}</option>
                                @endforeach
                            </select>
                            @error('Status_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col">
                            <label for="inputState">{{trans('doctors.dure')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="dure">
                                <option selected disabled>{{trans('doctors.dure')}}...</option>

                                    <option value="1"> 1 {{trans('doctors.Hour')}}</option>
                                    <option value="1.5"> 1,5 {{trans('doctors.Hour_and_half')}} </option>

                                    <option value="2"> 2 {{trans('doctors.tow_Hours')}}</option>
                                    <option value="3"> 3 {{trans('doctors.Hours')}}</option>
                                    <option value="4"> 4 {{trans('doctors.Hours')}}</option>
                                    <option value="6"> 6 {{trans('doctors.Hours')}}</option>
                                    <option value="12"> 12 {{trans('doctors.Hour')}}</option>
                                    <option value="24"> 24 {{trans('doctors.Hour')}}</option>

                            </select>
                            @error('dure')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="title">{{trans('doctors.date')}}</label>
                            <div class='input-group date'>
                                <input class="form-control" type="text"  id="datepicker-action" name="date" data-date-format="yyyy-mm-dd"  required>
                            </div>
                            @error('date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>



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
