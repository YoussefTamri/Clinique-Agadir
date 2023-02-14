@extends('admin.master')
@section('css')

@section('title')
    {{ trans('task.edite_patient') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
{{ trans('task.edite_patient') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">

        @if ($errors->any())
        <div class="error">{{ $errors->first('Name') }}</div>
        @endif

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
                            <br><br>
                            <form action="{{route('Patients.update','test')}}" method="post" >
                             {{method_field('patch')}}
                             @csrf
                          <div class="form-row">

                                <div class="col">

                                    <label for="title">{{trans('doctors.name_ar')}}</label>

                                    <input type="text" id="id_ar" name="Name_ar" value="{{ $Patient->getTranslation('name', 'ar') }}" dir="rtl" class="keyboardInput">

                                    <input id="id" type="hidden" name="id" class="form-control"  value="{{$Patient->id}}">
                                    @error('Name_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <br>
                                <div class="col">
                                    <label for="title">{{trans('doctors.name_en')}}</label>

                                    <input type="text" name="Name_en" value="{{ $Patient->getTranslation('name', 'en') }}" class="form-control">

                                    @error('Name_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputCity">{{trans('doctors.status')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Room_id">
                                        <option value="{{$Patient->Room_id}}">{{$Patient->rooms->number}}</option>
                                        @foreach($Room as $Rooms)
                                            <option value="{{$Rooms->id}}">{{$Rooms->number}}</option>
                                        @endforeach
                                    </select>
                                    @error('Room_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col">
                                    <label for="inputState">{{trans('doctors.doctor')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Doctors_id">
                                        <option value="{{$Patient->doctors_id}}">{{$Patient->doctors->Name}}</option>
                                        @foreach($doctor as $doctors)
                                            <option value="{{$doctors->id}}">{{$doctors->Name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Doctors_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputCity">{{trans('doctors.status')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="PatientStatus_id">
                                        <option value="{{$Patient->status_id}}">{{$Patient->status->Name}}</option>
                                        @foreach($PatientState as $PatientStates)
                                            <option value="{{$PatientStates->id}}">{{$PatientStates->Name}}</option>
                                        @endforeach
                                    </select>
                                    @error('PatientStatus_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col">
                                    <label for="inputState">{{trans('doctors.doctor')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Payments_id">
                                        <option value="{{$Patient->payment_id}}">{{$Patient->payment->Name}}</option>
                                        @foreach($payment as $payments)
                                            <option value="{{$payments->id}}">{{$payments->Name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Payments_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('doctors.date')}}</label>
                                    <div class='input-group date'>

                                        <input class="form-control" type="text"  id="datepicker-action"  value="{{$Patient->date}}" name="date" data-date-format="yyyy-mm-dd"  required>
                                    </div>
                                    @error('form_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>








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
