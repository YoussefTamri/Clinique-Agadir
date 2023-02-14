@extends('admin.master')
@section('css')

@section('title')
{{__('task.edite_room')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
{{__('task.edite_room')}}
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
                            <form action="{{route('Rooms.update','test')}}" method="post" >
                             {{method_field('patch')}}
                             @csrf
                          <div class="form-row">

                                <div class="col">

                                    <label for="title">{{trans('doctors.number')}}</label>

                                    <input type="text" name="number" value="{{ $room->number}}" class="form-control">

                                    <input id="id" type="hidden" name="id" class="form-control"  value="{{ $room->id }}">
                                    @error('number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputCity">{{trans('doctors.status')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Status_id">
                                        <option value="{{$room->Status_id}}">{{$room->Status->Name}}</option>
                                        @foreach($status as $statu)
                                            <option value="{{$statu->id}}">{{$statu->Name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Status_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col">
                                    <label for="inputState">{{trans('doctors.doctor')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Doctors_id">
                                        <option value="{{$room->doctors_id}}">{{$room->doctors->Name}}</option>
                                        @foreach($doctor as $doctors)
                                            <option value="{{$doctors->id}}">{{$doctors->Name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Doctors_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('doctors.date')}}</label>
                                    <div class='input-group date'>

                                        <input class="form-control" type="text"  id="datepicker-action"  value="{{$room->date}}" name="date" data-date-format="yyyy-mm-dd"  required>
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
