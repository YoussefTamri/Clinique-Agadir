@extends('admin.master')
@section('css')


@section('title')
{{__('main_trans.doctor_category')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{__('main_trans.doctor_category')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">

                <li class="breadcrumb-item active">{{__('main_trans.doctor_category')}}</li>
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



            <a  data-target="#exampleModal" data-toggle="modal" class="btn btn-success btn-sm" role="button"
            aria-pressed="true">{{ trans('category.add_category') }}</a>
            <br><br>


          <div class="table-responsive">
          <table id="datatable" class="table table-striped table-bordered p-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('category.name')}}</th>
                    <th>{{__('category.Notes')}}</th>
                    <th>{{__('category.action')}}</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                @foreach ($category as $categorys)

               <?php $i++ ; ?>
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{$categorys->Name}}</td>
                    <td>{{$categorys->Notes}}</td>
                    <td>

                        <a href="{{route('Category.show',$categorys->id)}}" class="btn btn-success btn-sm" role="button" aria-pressed="true"><i class="fa fa-eye"></i></a>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#update{{ $categorys->id }}"
                                            title="{{ trans('category.Edit') }}"><i
                                            class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#delete{{ $categorys->id }}"
                                            title="{{ trans('category.Delete') }}"><i
                                            class="fa fa-trash"></i></button>


                    </td>




                </tr>

                   <!-- edit form -->
                   <div class="modal fade" id="update{{ $categorys->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                   id="exampleModalLabel">
                                   {{ trans('category.Edit') }}
                               </h5>
                               <button type="button" class="close" data-dismiss="modal"
                                       aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="modal-body">
                               <!-- add_form -->
                               <form action="{{route('Category.update','test')}}" method="post">
                                   {{method_field('patch')}}
                                   @csrf
                                   <div class="row">
                                       <div class="col">

                                           <label for="Name_ar"
                                           class="mr-sm-2">{{ trans('category.name_ar') }}
                                             :</label>
                                          <input id="id_ar" type="text" dir="rtl" class="keyboardInput"
                                              value="{{$categorys->getTranslation('Name', 'ar')}}"
                                           name="Name_ar" required>




                                           <input id="id" type="hidden" name="id" class="form-control"
                                                  value="{{ $categorys->id }}">
                                       </div>
                                       <div class="col">
                                           <label for="Name_en"
                                                  class="mr-sm-2">{{ trans('category.name_en') }}
                                               :</label>
                                           <input type="text" class="form-control"
                                                  value="{{$categorys->getTranslation('Name', 'en')}}"
                                                  name="Name_en" required>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label
                                           for="exampleFormControlTextarea1">{{ trans('category.Notes') }}
                                           :</label>
                                       <textarea class="form-control" name="Notes"
                                                 id="exampleFormControlTextarea1"
                                                 rows="3">{{ $categorys->Notes }}</textarea>
                                   </div>
                                   <br><br>

                                   <div class="modal-footer">

                                   <a  class="btn btn-secondary btn-sm" type="button"
                                   data-dismiss="modal">{{ trans('category.Close') }}</a>

                                   <a type="submit" class="btn btn-success btn-sm"
                                   aria-pressed="true">{{ trans('category.Save') }}</a>


                                   </div>
                               </form>

                           </div>
                       </div>
                   </div>
               </div>

                 <!-- delete -->
                 <div class="modal fade" id="delete{{ $categorys->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                    id="exampleModalLabel">
                                    {{ trans('category.category_delete') }}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('Category.destroy', 'test') }}" method="post">
                                    {{ method_field('Delete') }}
                                    @csrf
                                    {{ trans('category.category_delete_warrning') }}
                                    <input id="id" type="hidden" name="id" class="form-control"
                                        value="{{ $categorys->id }}">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">{{ trans('category.Close') }}</button>
                                        <button type="submit"
                                            class="btn btn-danger">{{ trans('category.Delete') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




                @endforeach


         </table>
        </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    {{ trans('category.add_category') }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{Route('Category.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="Name" class="mr-sm-2">{{ trans('category.name_ar') }}
                                :</label>
                            <input id="Name" id="id_ar" type="text" name="Name_ar" dir="rtl" class="keyboardInput">
                        </div>
                        <div class="col">
                            <label for="Name_en" class="mr-sm-2">{{ trans('category.name_en') }}
                                :</label>
                            <input type="text" class="form-control" name="Name_en">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">{{ trans('category.Notes') }}
                            :</label>
                        <textarea class="form-control" name="Notes" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">{{ trans('category.Close') }}</button>
                <button type="submit" class="btn btn-success">{{ trans('category.Save') }}</button>
            </div>
            </form>

        </div>
    </div>
</div>
</div>


@endsection
@section('js')

@endsection
