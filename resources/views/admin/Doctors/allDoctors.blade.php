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
                                <a href="{{Route('Doctors.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{ trans('doctors.add_doctors') }}</a><br><br>
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
                                            <th>{{trans('doctors.category')}}</th>
                                            <th>{{trans('category.action')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @foreach($doctors as $Doctor)
                                            <tr>
                                            <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td>{{$Doctor->Name}}</td>
                                            <td>{{$Doctor->genders->Name}}</td>
                                            <td>{{$Doctor->from_date}}</td>
                                            <td><img  style="width: 90px; height: 90px;" src="{{asset('images/doctors/'.$Doctor->image)}}"></td>
                                            <td>{{$Doctor->Categoys->Name}}</td>
                                                <td>
                                                    <a href="{{route('Doctors.edit',$Doctor->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_Teacher{{ $Doctor->id }}" title="{{ trans('Grades_trans.Delete') }}"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="delete_Teacher{{$Doctor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('Doctors.destroy',$Doctor->id)}}" method="post">
                                                        {{method_field('delete')}}
                                                        {{csrf_field()}}
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">{{ trans('doctors.doctors_delete') }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p> {{ trans('doctors.doctors_delete_warrning') }}</p>
                                                            <input type="hidden" name="id"  value="{{$Doctor->id}}">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">{{ trans('category.Close') }}</button>
                                                                <button type="submit"
                                                                        class="btn btn-danger">{{ trans('category.Delete') }}</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
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
