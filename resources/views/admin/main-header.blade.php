        <!--=================================
 header start-->
        <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <!-- logo -->
            <div class="text-left navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="{{Route('dashboard')}}"><img src="{{ URL::asset('assets/images/logo-dark.png') }} " alt=""></a>
                <a class="navbar-brand brand-logo-mini" href="{{Route('dashboard')}}"><img src="{{ URL::asset('assets/images/logo-icon-dark.png') }} "
                        alt=""></a>
            </div>
            <!-- Top bar left -->
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
                        href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
                </li>
                <li class="nav-item">
                    <div class="search">
                        <a class="search-btn not_click" href="javascript:void(0);"></a>
                        <div class="search-box not-click">
                            <input type="text" class="not-click form-control" placeholder="Search" value=""
                                name="search">
                            <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- top bar right -->
            <ul class="nav navbar-nav ml-auto">
                <div class="btn-group mb-1">
                    <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      @if (App::getLocale() == 'ar')
                      {{ LaravelLocalization::getCurrentLocaleName() }}
                     <img src="{{ URL::asset('assets/images/flags/SA.png') }}" alt="">
                      @else
                      {{ LaravelLocalization::getCurrentLocaleName() }}
                      <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
                      @endif
                      </button>
                    <div class="dropdown-menu">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                        @endforeach
                    </div>
                </div>
                <li class="nav-item fullscreen">
                    <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
                </li>

                <li class="nav-item dropdown ">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="true"> <i class=" ti-view-grid"></i> </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big">
                        <div class="dropdown-header">
                            <strong>{{__('main_trans.quick_links')}}</strong>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="nav-grid">
                            <a href="{{Route('Tasks.create')}}" class="nav-grid-item"><i class="ti-files text-primary"></i>
                                <h5>{{__('main_trans.Add_task')}}</h5>
                            </a>
                            <a href="{{Route('Tasks.index')}}" class="nav-grid-item"><i class="ti-check-box text-success"></i>
                                <h5>{{__('main_trans.Show_tasks')}} </h5>
                            </a>
                        </div>
                        <div class="nav-grid">
                            <a href="{{Route('Invoices.create')}}" class="nav-grid-item"><i class="ti-pencil-alt text-warning"></i>
                                <h5>{{__('main_trans.new_invoice')}}</h5>
                            </a>
                            <a href="{{Route('Invoices.index')}}" class="nav-grid-item"><i class="ti-files text-info "></i>
                                <h5>{{__('main_trans.invoices')}} </h5>
                            </a>
                        </div>
                    </div>
                </li>


                 @if (Route::has('login'))

                 @auth

                 <li   class="nav-item">
                  <x-app-layout>

                  </x-app-layout>
                 </li>

                 @else

                <li class="nav-item">
                    <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                 </li>
                 <li class="nav-item">
                    <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                 </li>
                 @endauth

                 @endif
            </ul>
        </nav>

        <!--=================================
 header End-->
