<header>
        <nav class="nav affix">
            <div class="menu_containter ContainerUnactive">
                <div class="logo">
                    <a href="{{ url('/') }}">W</a>
                </div>
                <div id="mainListDiv" class="main_list">
                    <ul class="navlinks">
                            <li class="{{ (request()->is('trandictoinal')? 'active' : '' ) }} ">
                                <a href="{{ url('/trandictoinal') }}">カンボジアの伝統料理</a>
                            </li>
                        <li class="{{ (request()->is('phumasia-activity')? 'active' : '' ) }}"><a href="{{ url('/phumasia-activity') }}">クイアクティビティ</a></li>
                        <li><a href="{{ url('welcomepage') }}">プーマシア活動</a></li>
                        <li><a href="#">環境</a></li>
                        <li><a href="#">起業家精神</a></li>
                        <li><a href="#">コラボレーション</a></li>
                    </ul>
                </div>
                <div class="d-flex">
                    <a href="#"><div class="page_darection"><div class="sybol" style="background-image: url({{ asset('img/Flag_of_Japan.svg.webp') }});"></div></div></a>
                    <a href="#"><div class="page_darection un_active"><div class="sybol" style="background-image: url({{ asset('img/Flag_of_Myanmar.svg.png') }});"></div></div></a>
                </div>        
            </div>
                <span class="navTrigger unactive">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
        </nav>
    </header>