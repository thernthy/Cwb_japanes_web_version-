<!-- Navigation -->
<div class="row">
    <div class="col-lg-12 head">
        <nav class="navbar">

            <div id="tmNavbar">
                <div class="nav navbar-nav tm-nav">

                    <div
                        class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair tm-dummy-nav-item">
                        <div class="nav-item">
                            @if(Request::segment(1) != null)
                            <a href="{{ url('/') }}"><img class="white-logo"
                                    src="{{ asset('vendor/img/new-world-putih.png') }}" alt="logo new world"></a>
                            @endif
                        </div>
                        <div class="nav-item">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item none">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item none">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                            <!-- <a class="nav-link" href="#!">Eng/日本語</a> -->
                            <ul id="menu">
                                <li class="parent"><a href="#!"><i class="fa fa-navicon"></i> Menu</a>
                                    <ul class="child this">
                                        <li><a href="{{ url('about') }}">Our Philosophy</a></li>
                                        <li class="parent"><a href="#">CWB Communities <span class="expand">»</span></a>
                                            <ul class="child">
                                                @foreach($data['nav_footer']['nav_country'] as $item)
                                                <li><a href="{{ url('countries').'/'.$item->slug }}">{{ $item->title }}</a></li>
                                                @endforeach
                                            </ul></li>
                                        <li><a href="{{ url('contact') }}">Contact Us</a></li>
                                        <li><a href="{{ url('join-us') }}">Join Us</a></li>
                                    </ul></li>
                            </ul>

                            <!--  -->
                        </div>
                    </div>
                </div>

            </div>
        </nav>
    </div>
</div> <!-- row -->
