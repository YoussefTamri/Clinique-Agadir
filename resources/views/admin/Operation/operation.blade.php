@extends('admin.master')
@section('css')

@section('title')
{{trans('task.operation_list')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
{{trans('task.operation_list')}}
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
                                <a href="{{Route('Operations.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">           {{trans('task.Add_Operations')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('doctors.operation')}}</th>
                                            <th>{{trans('doctors.doctors')}}</th>
                                            <th>{{trans('doctors.date')}}</th>

                                            <th>{{trans('room.room')}}</th>
                                            <th>{{trans('doctors.Patient')}}</th>
                                            <th>{{trans('doctors.dure')}}</th>
                                            <th>{{trans('category.action')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @foreach($Operation as $Operations)
                                            <tr>
                                            <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td>{{$Operations->name}}</td>
                                            <td>{{$Operations->Doctors->Name}}</td>
                                            <td>{{$Operations->date}}</td>
                                            <td>{{$Operations->rooms->number}}</td>
                                            <td>{{$Operations->patients->name}}</td>
                                            <td>{{$Operations->dure}} {{trans('doctors.Hours')}}</td>
                                                <td>
                                                    <a href="{{route('Operations.edit',$Operations->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_Task{{ $Operations->id }}" title="{{ trans('Grades_trans.Delete') }}"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="delete_Task{{$Operations->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('Operations.destroy',$Operations->id)}}" method="post">
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
                                                            <p> {{ trans('doctors.operation_delete_warrning') }}</p>
                                                            <input type="hidden" name="id"  value="{{$Operations->id}}">
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
