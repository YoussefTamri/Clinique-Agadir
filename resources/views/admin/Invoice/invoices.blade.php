@extends('admin.master')
@section('css')

@section('title')
{{ trans('Task.invoice_list') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
{{ trans('Task.invoice_list') }}
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
                                <a href="{{Route('Invoices.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{ trans('Task.Add_Invoice') }}</a>

                                   <a href="{{Route('InvoicesPaid')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{ trans('doctors.invoicePaid') }}</a>

                                   <a href="{{Route('InvoicesNotPaid')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{ trans('doctors.invoiceNotPaid') }}</a>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('doctors.price')}}</th>
                                            <th>{{trans('doctors.doctors')}}</th>
                                            <th>{{trans('doctors.date')}}</th>
                                            <th>{{trans('doctors.Patient')}}</th>
                                            <th>{{trans('task.paid')}}</th>
                                            <th>{{trans('doctors.operation')}}</th>
                                            <th>{{trans('category.action')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @foreach($Invoice as $Invoices)
                                            <tr>
                                            <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td>{{$Invoices->price}} {{trans('doctors.devise')}} </td>
                                            <td>{{$Invoices->Doctors->Name}}</td>
                                            <td>{{$Invoices->date}}</td>
                                            <td>{{$Invoices->patients->name}}</td>
                                            <td>{{$Invoices->payment->Name}}</td>
                                            <td>{{$Invoices->operations->name}}</td>

                                                <td>

                                                    <a href="{{route('Invoices.show',$Invoices->id)}}" class="btn btn-success btn-sm" role="button" aria-pressed="true"><i class="fa fa-eye"></i></a>
                                                    <a href="{{route('Invoices.edit',$Invoices->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_Task{{ $Invoices->id }}" title="{{ trans('Grades_trans.Delete') }}"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="delete_Task{{$Invoices->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('Invoices.destroy',$Invoices->id)}}" method="post">
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
                                                            <p> {{ trans('doctors.invoice_delete_warrning') }}</p>
                                                            <input type="hidden" name="id"  value="{{$Invoices->id}}">
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
