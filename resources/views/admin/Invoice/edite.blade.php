@extends('admin.master')
@section('css')

@section('title')
    {{ trans('Teacher_trans.Edit_Teacher') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('Teacher_trans.Edit_Teacher') }}
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
                            <form action="{{route('Invoices.update','test')}}" method="post" >
                             {{method_field('patch')}}
                             @csrf
                          <div class="form-row">

                                <div class="col">

                                    <label for="title">{{trans('doctors.price')}}</label>

                                    <input type="text" name="price" value="{{ $Invoice->price }}" class="form-control">

                                    <input id="id" type="hidden" name="id" class="form-control"  value="{{$Invoice->id}}">
                                    @error('Name_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <br>

                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputCity">{{trans('doctors.operation')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Operations_id">
                                        <option value="{{$Invoice->operation_id}}">{{$Invoice->operations->name}}</option>
                                        @foreach($Operation as $Operations)
                                            <option value="{{$Operations->id}}">{{$Operations->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Operations_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col">
                                    <label for="inputState">{{trans('doctors.doctors')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Doctors_id">
                                        <option value="{{$Invoice->doctor_id}}">{{$Invoice->doctors->Name}}</option>
                                        @foreach($Doctor as $doctors)
                                            <option value="{{$doctors->id}}">{{$doctors->Name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Doctors_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-group col">
                                    <label for="inputState">{{trans('task.paid')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="payment_id">
                                        <option value="{{$Invoice->payment_id}}">{{$Invoice->payment->Name}}</option>
                                        @foreach($Payment as $Payments)
                                            <option value="{{$Payments->id}}">{{$Payments->Name}}</option>
                                        @endforeach
                                    </select>
                                    @error('payment_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col">
                                    <label for="inputState">{{trans('task.paid')}}</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Patient_id">
                                        <option value="{{$Invoice->patient_id}}">{{$Invoice->patients->name}}</option>
                                        @foreach($Patient as $Patients)
                                            <option value="{{$Patients->id}}">{{$Patients->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Patient_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('doctors.date')}}</label>
                                    <div class='input-group date'>

                                        <input class="form-control" type="text"  id="datepicker-action"  value="{{$Invoice->date}}" name="date" data-date-format="yyyy-mm-dd"  required>
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
