@extends('front.layout')

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<style>

</style>
@endpush

@section('content')
<!-- <div class="row tm-content-boxes-row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 offset-md-6">
		<form class="form-inline">
			<input class="form-control" type="search" placeholder="Search" aria-label="Search">
		</form>
		<p>Please choose keywords from the circle to start!</p>
	</div>
</div> -->
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 img-logo">
    <img src="{{ asset('vendor/img/new-world.png') }}" alt="new-world-logo">
</div>
<div class="row">
    <div class="card-body" id="map" style="width: 100%; height: 400px;"></div>
</div>

<!-- 
<div class="row tm-row-margin-b tm-content-boxes-row">
	<div class="col-md-12 bunderan">
		<div class="icon"><img src="{{ asset('vendor/img/new_world_center.png') }}" alt="">
			<ul class="menu">
			@foreach($data['keywords'] as $item)  
				<li class="spread">
					<a class="unit" href="{{ url('keyword').'/'.$item->slug }}">
						<span class="text-bunder">{{ $item->title_jp }}<br>{{ $item->title_en }}</span>
					</a>
				</li>
			@endforeach
			</ul>
		</div>
	</div>
</div> -->
<div class="row section intro">
    <div class="col-xs-12 text-tengah bg-text">
        <h1 class="text-xs-center big-font">
            <span><i>C</i>ommunity <i>N</i>etwork <i>W</i>ithout <i>B</i>order</span>
        </h1>
        <div class="text-center intro-page">
            {!! CRUDBooster::getSetting("intro_text") !!}
        </div>
    </div>
</div>

<div class="row story-page section">
    <div class="col-xs-12 text-tengah">
        <div class="section-header">
            <h2><span>Success Story</span></h2>
            <p>These articles below are our success story with the communities around the world.</p>
        </div>
    </div>
    <div class="row">
        @foreach($data['story'] as $item)
        <div class="col-md-4">
            <a href="{{ url('story').'/'.$item->slug }}">
                <div class="card mb-4 box-shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="label label-default"><i class="fa fa-clock-o"></i>
                                {{ date('F d, Y', strtotime($item->created_at)) }}</span> <span
                                class="label label-default"> {{ $item->country_title }}</span>
                        </div>
                        <h5>{{ $item->title }}</h5>
                        <p class="card-text">{!! Str::limit(strip_tags($item->caption_desc), 150) !!}</p>
                    </div>
                    <img class="card-img-top" alt="Photo of {{ $item->title }}"
                        style="height: 225px; width: 100%; display: block;" src="{{ asset($item->img_header) }}"
                        data-holder-rendered="true">
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <!-- .row-fluid -->
</div>

<div class="row section cwb-category">
    <div class="col-xs-12 text-tengah">
        <div class="section-header">
            <h2><span>CWB Category</span></h2>
            <p>These are our comunity work, these community work divided into some category.</p>
        </div>
    </div>

    <div class="col-xs-12 cards">
	@php $i = 1; @endphp
	@foreach($data['actions'] as $item)
		@if($i==8) @php $i = 1; @endphp @endif
        <div class="card card-{{ $i++ }}">
            <div class="card__icon">
				<img src="{{ asset($item->img) }}">
			</div>
            <h4 class="card__title">{{ $item->title_en }}</h4>
			<div class="card__body">
			{!! Str::limit(strip_tags($item->desc_en), 100) !!}
			</div>
            <p class="card__apply">
                <a class="card__link" href="{{ url('action').'/'.$item->slug }}">Read More <i class="fa fa-chevron-right"></i></a>
            </p>
        </div>
	@endforeach
        
    </div>
</div>

<div class="row story-page section">
    <div class="col-xs-12 text-tengah">
        <div class="section-header">
            <h2><span>Our Galleries</span></h2>
            <p>These are our photos doing some activities with the youngs and others in each of the CWB Community.</p>
        </div>
    </div>
    <div class="col-xs-12">
        <article class='gallery'>
            @foreach($data['gallery'] as $item)
            @if(!empty($item->slug))
            <a class='gallery-link' onclick="location.href='{{ url('activity').'/'.$item->slug }}';">
            @else
            <a class='gallery-link' href='{{ asset($item->img) }}'>
            @endif
                <figure class='gallery-image'>
                    <img height='1000' src='{{ asset($item->img) }}' width='1400'>
                    <figcaption>{{ $item->title }}</figcaption>
                </figure>
            </a>
                
            @endforeach
        </article>
    </div>
</div>

<!-- <div class="row section">
    <div class="col-xs-12 text-tengah">
        <div class="section-header">
            <h3><span>Instagram</span></h3>
            <p>Our activites on social media.</p>
        </div>
    </div>

    <div class="col-md-12">
        <script src="https://s.electricblaze.com/widget.js" defer></script>
        <div class="electricblaze-id-2Uhx9Oy"></div>
    </div>
</div> -->

<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

@endsection

@push('scripts')
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
    // konfigurasi peta
    $(function () {
        setLocation = [17.8852266, 100.7893092];
        var map = L.map('map', null, {
            zoomControl: false
        }).setView(setLocation, 14);
        map.removeControl(map.zoomControl);
        // 
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_nolabels/{z}/{x}/{y}{r}.png', {
            // L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.jpg', {
            maxZoom: 4,
            minZoom: 4,
        }).addTo(map);
        map.attributionControl.setPrefix(false);
        // var marker = new L.marker(setLocation, {
        //     draggable: false
        // });
        // map.addLayer(marker);

        const LeafIcon = L.Icon.extend({
            options: {
                iconSize: [45, 45],
                iconAnchor: [15, 15],
                shadowAnchor: [4, 62],
                popupAnchor: [10, -10]
            }
        });

        var dynamicIcon = [];
        var mapMarker = [];

        $.getJSON(window.location.origin + '/api-countries',
            function (data) {
                // console.log(data.list);
                // exit();
                for (var i = 0; i < data.list.length; i++) {
                    dynamicIcon[i] = new LeafIcon({
                        iconUrl: window.location.origin + '/' + data.list[i].logo
                    })

                    mapMarker[i] = L.marker([data.list[i].cord_lat, data.list[i].cord_long], {
                        icon: dynamicIcon[i]
                    }).bindPopup('<a href="' + window.location.origin + '/countries/' + data.list[i]
                        .slug + '">CWB ' + data.list[i].title + '</a>').addTo(map);
                }
            });

    })

</script>

<script src="{{ asset('js/magnific-popup.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function ($) {
        $('.gallery-link').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
                titleSrc: function (item) {
                    return item.el.find('figcaption').text() || item.el.attr('title');
                }
            },
            zoom: {
                enabled: true
            },
            // duration: 300
            gallery: {
                enabled: true,
                navigateByImgClick: false,
                tCounter: ''
            },
            disableOn: function () {
                return $(window).width() > 640;
            }
        });

    });

    //# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFBQSxDQUFBLENBQUUsZUFBRixDQUFrQixDQUFDLGFBQW5CLENBQ0U7SUFBQSxJQUFBLEVBQU0sT0FBTjtJQUNBLG1CQUFBLEVBQXFCLElBRHJCO0lBRUEsY0FBQSxFQUFnQixLQUZoQjtJQUdBLFNBQUEsRUFBVyw4QkFIWDtJQUlBLEtBQUEsRUFDRTtNQUFBLFdBQUEsRUFBYSxJQUFiO01BQ0EsUUFBQSxFQUFVLFFBQUEsQ0FBQyxJQUFELENBQUE7ZUFDUixJQUFJLENBQUMsRUFBRSxDQUFDLElBQVIsQ0FBYSxZQUFiLENBQTBCLENBQUMsSUFBM0IsQ0FBQSxDQUFBLElBQXFDLElBQUksQ0FBQyxFQUFFLENBQUMsSUFBUixDQUFhLE9BQWI7TUFEN0I7SUFEVixDQUxGO0lBUUEsSUFBQSxFQUNFO01BQUEsT0FBQSxFQUFTO0lBQVQsQ0FURjs7SUFXQSxPQUFBLEVBQ0U7TUFBQSxPQUFBLEVBQVMsSUFBVDtNQUNBLGtCQUFBLEVBQW9CLEtBRHBCO01BRUEsUUFBQSxFQUFVO0lBRlYsQ0FaRjtJQWVBLFNBQUEsRUFBVyxRQUFBLENBQUEsQ0FBQTthQUNULENBQUEsQ0FBRSxNQUFGLENBQVMsQ0FBQyxLQUFWLENBQUEsQ0FBQSxHQUFvQjtJQURYO0VBZlgsQ0FERjtBQUFBIiwic291cmNlc0NvbnRlbnQiOlsiJCgnLmdhbGxlcnktbGluaycpLm1hZ25pZmljUG9wdXBcbiAgdHlwZTogJ2ltYWdlJ1xuICBjbG9zZU9uQ29udGVudENsaWNrOiB0cnVlXG4gIGNsb3NlQnRuSW5zaWRlOiBmYWxzZVxuICBtYWluQ2xhc3M6ICdtZnAtd2l0aC16b29tIG1mcC1pbWctbW9iaWxlJ1xuICBpbWFnZTogXG4gICAgdmVydGljYWxGaXQ6IHRydWVcbiAgICB0aXRsZVNyYzogKGl0ZW0pIC0+XG4gICAgICBpdGVtLmVsLmZpbmQoJ2ZpZ2NhcHRpb24nKS50ZXh0KCkgfHwgaXRlbS5lbC5hdHRyKCd0aXRsZScpXG4gIHpvb206XG4gICAgZW5hYmxlZDogdHJ1ZVxuICAgICMgZHVyYXRpb246IDMwMFxuICBnYWxsZXJ5OlxuICAgIGVuYWJsZWQ6IHRydWVcbiAgICBuYXZpZ2F0ZUJ5SW1nQ2xpY2s6IGZhbHNlXG4gICAgdENvdW50ZXI6ICcnXG4gIGRpc2FibGVPbjogLT5cbiAgICAkKHdpbmRvdykud2lkdGgoKSA+IDY0MCAiXX0=
    //# sourceURL=coffeescript

</script>
@endpush
