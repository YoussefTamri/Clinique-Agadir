@extends('admin.master')
@section('css')

@section('title')
{{ trans('doctors.list_doctor') }}

@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
{{ trans('doctors.list_doctor') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->

    @if(Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
      </div>
    @endif


    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                              <br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('doctors.name')}}</th>
                                            <th>{{trans('doctors.gender')}}</th>
                                            <th>{{trans('doctors.from_date')}}</th>
                                            <th>{{trans('doctors.image')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @foreach($doctor as $Doctor)
                                            <tr>
                                            <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td>{{$Doctor->Name}}</td>
                                            <td>{{$Doctor->genders->Name}}</td>
                                            <td>{{$Doctor->from_date}}</td>

                                            <td><img  style="width: 90px; height: 90px;" src="{{asset('images/doctors/'.$Doctor->image)}}"></td>
                                            </tr>


                                        @endforeach
                                    </table>
                                </div>
                            </div>
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
