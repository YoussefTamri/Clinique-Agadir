<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{__('main_trans.Dashboard')}}</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('dashboard')}}"> {{__('main_trans.Dashboard')}}</a> </li>
                            <li> <a href="{{Route('index')}}"> {{__('main_trans.website')}}</a> </li>

                        </ul>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{__('main_trans.components')}} </li>
                    <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{__('main_trans.Category')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{Route('Category.index')}}">{{__('main_trans.category_show')}}</a></li>

                        </ul>
                    </li>

                    <!-- menu item Charts-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
                            <div class="pull-left"><i class="fa fa-user-md"></i><span
                                    class="right-nav-text">{{__('main_trans.Doctors')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="chart" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('Doctors.create')}}">{{__('main_trans.doctors_create')}}</a> </li>
                            <li> <a href="{{Route('Doctors.index')}}">{{__('main_trans.doctors_show')}}  </a> </li>

                        </ul>
                    </li>

                    <!-- menu font icon-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
                            <div class="pull-left"><i class="fa fa-users"></i><span class="right-nav-text"> {{__('main_trans.user')}}
                                    </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('Users.index')}}" >{{__('main_trans.Show_user')}}</a> </li>

                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon1">
                            <div class="pull-left"><i class="fa fa-h-square"></i><span class="right-nav-text"> {{__('main_trans.Rooms')}}
                                    </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="font-icon1" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('Rooms.index')}}" >{{__('main_trans.Show_rooms')}}</a> </li>
                            <li> <a href="{{Route('Rooms.create')}}" >{{__('main_trans.Add_rooms')}}</a> </li>

                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon2">
                            <div class="pull-left"><i class="fa fa-heart"></i><span class="right-nav-text"> {{__('main_trans.Patients')}}
                                    </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="font-icon2" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('Patients.index')}}" >{{__('main_trans.Show_patients')}}</a> </li>
                            <li> <a href="{{Route('Patients.create')}}" >{{__('main_trans.Add_patients')}}</a> </li>
                        </ul>
                    </li>


                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{__('main_trans.actions')}}</li>





                    <!-- menu title -->

                    <!-- menu item table -->


                    <!-- menu item Custom pages-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-page">
                            <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text">{{__('main_trans.Tasks')}}
                                    </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="custom-page" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('Tasks.create')}}">{{__('main_trans.Add_task')}}</a> </li>
                            <li> <a href="{{Route('Tasks.index')}}"> {{__('main_trans.Show_tasks')}} </a> </li>


                        </ul>
                    </li>
                    <!-- menu item Authentication-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">{{__('main_trans.Operations')}}
                                    </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>

                        <ul id="table" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('Operations.create')}}">{{__('main_trans.Add_operation')}}</a> </li>
                            <li> <a href="{{Route('Operations.index')}}">{{__('main_trans.Show_operations')}}</a> </li>

                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon3">
                            <div class="pull-left"><i class="	fa fa-paste"></i><span class="right-nav-text"> {{__('main_trans.Invoices')}}
                                    </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="font-icon3" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('Invoices.index')}}" >{{__('main_trans.Show_invoices')}}</a> </li>
                            <li> <a href="{{Route('Invoices.create')}}" >{{__('main_trans.Add_invoice')}}</a> </li>
                        </ul>
                    </li>




                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
