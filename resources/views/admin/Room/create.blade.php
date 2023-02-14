@extends('admin.master')
@section('css')


@section('title')
{{__('task.add_room')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{__('task.add_room')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">

                <li class="breadcrumb-item active">{{__('task.add_room')}}</li>
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
                    <form action="{{Route('Rooms.store')}}"  method="post" >
                     @csrf



                    <div class="form-row">
                        <div class="col">
                            <label for="title">{{trans('room.room_nomber')}}</label>
                            <input  required type="number" name="number" class="form-control">
                            @error('Name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <br>



                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputCity">{{trans('doctors.doctors')}}</label>
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
                        <div class="form-group col">
                            <label for="inputState">{{trans('doctors.status')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="Status_id">
                                <option selected disabled>{{trans('doctors.status')}}...</option>
                                @foreach($Status as $Statu)
                                    <option value="{{$Statu->id}}">{{$Statu->Name}}</option>
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
