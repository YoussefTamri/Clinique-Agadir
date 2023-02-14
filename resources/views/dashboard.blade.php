<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Clinique Agadir  - Hay jadid Agadir" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('admin.head')
</head>

<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="assets/images/pre-loader/loader-01.svg" alt="">
        </div>

        <!--=================================
 preloader -->

        @include('admin.main-header')

        @include('admin.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="mb-0"> {{ trans('main_trans.Dashboard') }}</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                        </ol>
                    </div>
                </div>
            </div>
            <!-- widgets -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class="fa fa-user-circle-o" style="font-size:48px;color:rgb(84, 214, 72)"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ trans('doctors.PatientOnHoppital') }}</p>
                                    <h4>
                                        <?php $i = 0; ?>
                                        @foreach($patient as $patients)

                                            <?php $i++;

                                            ?>
                                            @endforeach
                                            {{ $i }}</h4>
                                    </h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i>
                                {{ trans('doctors.PatientOnHoppital') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-warning">
                                        <i class="fa fa-stethoscope" style="font-size:48px" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark" > {{ trans('main_trans.Operations') }}</p>
                                    <h4>           <?php $i = 0; ?>
                                        @foreach($operation as $operations)

                                            <?php $i++;

                                            ?>
                                            @endforeach
                                            {{ $i }}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fa fa-bookmark-o mr-1" aria-hidden="true"></i> {{__('main_trans.Total_operations')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-success">
                                        <i class="fa fa-users" style="font-size:48px;color:rgb(34, 32, 54)" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ trans('main_trans.user') }}</p>
                                    <h4>           <?php $i = 0; ?>
                                        @foreach($users as $user)

                                            <?php $i++;

                                            ?>
                                            @endforeach
                                            {{ $i }}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                {{ trans('main_trans.user') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-primary">

                                        <i class="fa fa-user-md" style="font-size:48px;color:red" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ trans('doctors.doctors') }}</p>
                                    <h4>
                                        <?php $i = 0; ?>
                                        @foreach($doctors as $Doctor)

                                            <?php $i++;

                                            ?>
                                            @endforeach
                                            {{ $i }}
                                    </h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fa fa-repeat mr-1" aria-hidden="true"></i>
                                {{ trans('doctors.doctor') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Orders Status widgets-->

            <div class="row">
                <div class="col-xl-4 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ trans('doctors.topOperation') }}</h5>
                            <ul class="list-unstyled">
                                @foreach($invoice as $Invoices)
                                <li class="mb-20">
                                    <div class="media">
                                        <div class="position-relative">
                                            <img class="img-fluid mr-15 avatar-small" src="images/item/01.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-0">{{ trans('doctors.operation') }} : {{$Invoices->operations->name}} <span class="float-right text-danger">
                                                {{$Invoices->price}} {{trans('doctors.devise')}}</span> </h6>
                                            <p> {{trans('doctors.Patient')}} : {{$Invoices->patients->name}} </p>
                                        </div>
                                    </div>
                                    <div class="divider dotted mt-20"></div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ trans('doctors.PatientOnHoppital') }}</h5>
                            <ul class="list-unstyled">
                                @foreach($patient as $patients)

                                <li class="mb-20">
                                    <div class="media">
                                        <div class="position-relative">
                                            <img class="img-fluid mr-15 avatar-small" src="images/item/01.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-0"> {{trans('doctors.Patient')}} :  {{$patients->name}}<span class="float-right text-danger">
                                                {{trans('room.room')}}  :   {{$patients->rooms->number}} </span> </h6>
                                            <p> {{trans('doctors.doctors')}}  : {{$patients->Doctors->Name}} </p>
                                        </div>
                                    </div>
                                    <div class="divider dotted mt-20"></div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>






                <div class="col-xl-4 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ trans('doctors.invoiceNotPaid') }}</h5>
                            <ul class="list-unstyled">
                                @foreach($Invoice_not_paid  as $Invoices)
                                <li class="mb-20">
                                    <div class="media">
                                        <div class="position-relative">
                                            <img class="img-fluid mr-15 avatar-small" src="images/item/01.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-0">{{ trans('doctors.operation') }} : {{$Invoices->operations->name}} <span class="float-right text-danger">
                                                {{$Invoices->price}} {{trans('doctors.devise')}}</span> </h6>
                                            <p>{{trans('doctors.Patient')}} : {{$Invoices->patients->name}} </p>
                                        </div>
                                    </div>
                                    <div class="divider dotted mt-20"></div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>


            </div>


            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            @include('admin.footer')
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('admin.footer-scripts')

</body>

</html>
