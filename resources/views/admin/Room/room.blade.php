@extends('admin.master')
@section('css')

@section('title')
{{__('task.List_room')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
{{__('task.List_room')}}
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
                                <a href="{{Route('Rooms.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{ trans('Task.add_room') }}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('room.room_nomber')}}</th>
                                            <th>{{trans('doctors.doctors')}}</th>
                                            <th>{{trans('doctors.date')}}</th>

                                            <th>{{trans('doctors.status')}}</th>
                                            <th>{{trans('category.action')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @foreach($Rooms as $Room)
                                            <tr>
                                            <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td>{{$Room->number}}</td>
                                            <td><select class="custom-select my-1 mr-sm-2" name="Doctors_id">
                                                <option value="{{$Room->doctors_id}}">{{$Room->doctors->Name}}</option>
                                                @foreach($doctor as $doctors)
                                                    <option value="{{$doctors->id}}">{{$doctors->Name}}</option>
                                                @endforeach
                                            </select></td>
                                            <td>{{$Room->date}}</td>
                                            <td>  <select class="custom-select my-1 mr-sm-2" name="Doctors_id">
                                                <option value="{{$Room->Status_id}}">{{$Room->status->Name}}</option>
                                                @foreach($Status as $Statu)
                                                    <option value="{{$Statu->id}}">{{$Statu->Name}}</option>
                                                @endforeach
                                            </select></td>
                                                <td>
                                                    <a href="{{route('Rooms.edit',$Room->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_Task{{ $Room->id }}" title="{{ trans('Grades_trans.Delete') }}"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="delete_Task{{$Room->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('Rooms.destroy',$Room->id)}}" method="post">
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
                                                            <p> {{ trans('doctors.room_delete_warrning') }}</p>
                                                            <input type="hidden" name="id"  value="{{$Room->id}}">
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
