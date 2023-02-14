@extends('admin.master')
@section('css')

@section('title')
{{__('task.list_users')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
{{__('task.list_users')}}
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
                                            <th>{{trans('doctors.email')}}</th>
                                            <th>{{trans('doctors.phone')}}</th>
                                            <th>{{trans('doctors.category')}}</th>
                                            <th>{{trans('category.action')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @foreach($Users as $User)
                                            <tr>
                                            <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td>{{$User->name}}</td>
                                            <td>{{$User->email}}</td>
                                            <td>{{$User->phone}}</td>
                                            <td>
                                                <?php
                                                if($User->usertype == 0 ){
                                                    echo 'User';
                                                }else {
                                                    echo 'Admin';
                                                }?>
                                                </td>


                                                <td>
                                                    <a href="{{route('Users.edit',$User->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>

                                                </td>

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
