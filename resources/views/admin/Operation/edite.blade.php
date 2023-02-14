@extends('admin.master')
@section('css')

@section('title')
    {{ trans('task.operation_edite') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('task.operation_edite') }}
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
                            <form action="{{route('Operations.update','test')}}" method="post" >
                             {{method_field('patch')}}
                             @csrf
                          <div class="form-row">

                                <div class="col">

                                    <label for="title">{{trans('doctors.name_ar')}}</label>

                                    <input type="text" id="id_ar" name="Name_ar" value="{{ $Operation->getTranslation('name', 'ar') }}" dir="rtl" class="keyboardInput">

                                    <input id="id" type="hidden" name="id" class="form-control"  value="{{$Operation->id}}">
                                    @error('Name_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <br>
                                <div class="col">
                                    <label for="title">{{trans('doctors.name_en')}}</label>

                                    <input type="text" name="Name_en" value="{{ $Operation->getTranslation('name', 'en') }}" class="form-control">

                                    @error('Name_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputCity">{{trans('room.room')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Room_id">
                                        <option value="{{$Operation->Room_id}}">{{$Operation->rooms->number}}</option>
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
                                        <option value="{{$Operation->doctors_id}}">{{$Operation->doctors->Name}}</option>
                                        @foreach($doctor as $doctors)
                                            <option value="{{$doctors->id}}">{{$doctors->Name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Doctors_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col">
                                    <label for="inputState">{{trans('doctors.dure')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="dure">
                                        <option value="{{$Operation->dure}}">{{$Operation->dure}}</option>

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

                                <div class="form-group col">
                                    <label for="inputState">{{trans('task.status')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Status_id">
                                        <option value="{{$Operation->status_id}}">{{$Operation->status->Name}}</option>
                                        @foreach($OperationStatus as $OperationState)
                                            <option value="{{$OperationState->id}}">{{$OperationState->Name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Status_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('doctors.date')}}</label>
                                    <div class='input-group date'>

                                        <input class="form-control" type="text"  id="datepicker-action"  value="{{$Operation->date}}" name="date" data-date-format="yyyy-mm-dd"  required>
                                    </div>
                                    @error('date')
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
