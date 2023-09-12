@extends('front.layout')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="{{ asset('css/countries.css') }}">
<style>
	.col-md-8 img {
		width: 100% !important;
	}
	.post-img img {
		height: 225px !important;
    	object-fit: cover !important;
	}
</style>
@endpush

@section('content')

<div class="row">
	<div class="col-xs-12">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{ $data['data']->title }}</li>
			</ol>
		</nav>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-11 offset-md-1 text-tengah">
		<h3 class="tm-about-title">
			<span>CWB {{ $data['data']->title }}</span>
		</h3>
	</div>
</div>

<div class="container-fluid">
	<div class="col-md-3">
		<img class="country" src="{{ asset($data['data']->logo) }}">
	</div>
	<div class="col-md-8">
		{!! $data['data']->desc !!}
	</div>
</div>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:wght@300&display=swap"
	rel="stylesheet">

<div class="container-fluid">
	@foreach($data['story'] as $item)
	<div class="card">
		<figure class="card__thumb">
			<img src="{{ asset($item->img_header) }}" alt="{{ $item->title }}"
				class="card__image">
			<figcaption class="card__caption">
				<h2 class="card__title">{{ $item->title }}</h2>
				<i class="fa fa-clock-o"></i> <i>{{ date('F d, Y', strtotime($item->created_at)) }}</i>
				<p class="card__snippet">
					{!! Str::limit(strip_tags($item->caption_desc), 150) !!}
				</p>
				<p>By <i>{{ $item->name }}</i></p>
				<a href="{{ url('story').'/'.$item->slug }}" class="card__button">Read more</a>
			</figcaption>
		</figure>
	</div>
	@endforeach

</div>

<div class="row section">
	<div class="col-xs-12 text-tengah">
		<div class="section-header">
			<h3><span>{{ $data['data']->title }}'s Activities</span></h3>
			<p>These are activities we do on this country.</p>
		</div>
	</div>
	<div class="row-fluid">
		<div class="col-xs-12">
			@if($data['activity']->isEmpty())
				<div class="no-data">
					<img src="{{ asset('vendor/img/no-data.png') }}" alt="Image" class="img-responsive tm-pad-0">
				</div>
			@endif
			<div class="blog_slider_area owl-carousel">
			@foreach($data['activity'] as $item)
				<div class="box-area box-shadow">
					<div class="single-blog">
						<div class="post-img">
							<img src="{{ asset($item->photo_cover) }}" alt="{{ $item->title }}" />
						</div>
						<div class="single_blog">
							<a href="{{ url('activity').'/'.$item->slug }}">
								<h3 class="post-title">{{ $item->title_en }}</h3>
							</a>
							<!-- <ul class="icon-area">
								<li>
								<span class="label label-default"></span>
								</li>
							</ul> -->
							<p class="blog-text">
							{!! Str::limit(strip_tags($item->desc_en), 150) !!}
							</p>
							<div class="btn-area">
								<a href="{{ url('activity').'/'.$item->slug }}" class="btn btn-default main_btn">check it out</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
	<!-- .row-fluid -->
</div>

<div class="row section">
	<div class="col-xs-12 text-tengah">
		<div class="section-header">
			<h3><span>Photos on {{ $data['data']->title }}</span></h3>
			<p>These are our photos doing some activities with the young and others in {{ $data['data']->title }}.</p>
		</div>
	</div>

	<div class="col-xs-12">
		<article class='gallery'>
		@if($data['gallery']->isEmpty())
			<div class="no-data">
				<img src="{{ asset('vendor/img/no-data.png') }}" alt="Image" class="img-responsive tm-pad-0">
			</div>
		@endif
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

<div class="row section">
	<div class="col-xs-12 text-tengah">
		<div class="section-header">
			<h3><span>CWB {{ $data['data']->title }}'s Link</span></h3>
			<p>All URL, SNS, Social Media link that related to CWB {{ $data['data']->title }}.</p>
		</div>
	</div>

	<div class="col-xs-12">
		<ul class="justify-content-md-center">
			@if($data['sns']->isEmpty())
			<div class="no-data">
				<img src="{{ asset('vendor/img/no-data.png') }}" alt="Image" class="img-responsive tm-pad-0">
			</div>
			@endif
			@foreach($data['sns'] as $item)
			<li class="tm-tab-link-item col-md-4">
				<a id="tab2" target="_blank" href="{{ $item->url }}" class="tm-tab-link">
					<i class="fa fa-{{ $item->logo }} tm-tab-icon"></i>
					<span class="tm-tab-link-label">
						{{ $item->title }}
						<br>{{ $item->desc }}
					</span>
				</a>
			</li>
			@endforeach
		</ul>
	</div>

</div>

@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('assets/vendor/parallax/parallax.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script>
	$(".blog_slider_area").owlCarousel({
		autoplay: true,
		slideSpeed: 1000,
		items: 3,
		loop: true,
		margin: 30,
		dots: true,
		nav: false,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive: {
			320: {
				items: 1
			},
			767: {
				items: 2
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}

	});
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
      titleSrc: function(item) {
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
    disableOn: function() {
      return $(window).width() > 640;
    }
  });

});

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFBQSxDQUFBLENBQUUsZUFBRixDQUFrQixDQUFDLGFBQW5CLENBQ0U7SUFBQSxJQUFBLEVBQU0sT0FBTjtJQUNBLG1CQUFBLEVBQXFCLElBRHJCO0lBRUEsY0FBQSxFQUFnQixLQUZoQjtJQUdBLFNBQUEsRUFBVyw4QkFIWDtJQUlBLEtBQUEsRUFDRTtNQUFBLFdBQUEsRUFBYSxJQUFiO01BQ0EsUUFBQSxFQUFVLFFBQUEsQ0FBQyxJQUFELENBQUE7ZUFDUixJQUFJLENBQUMsRUFBRSxDQUFDLElBQVIsQ0FBYSxZQUFiLENBQTBCLENBQUMsSUFBM0IsQ0FBQSxDQUFBLElBQXFDLElBQUksQ0FBQyxFQUFFLENBQUMsSUFBUixDQUFhLE9BQWI7TUFEN0I7SUFEVixDQUxGO0lBUUEsSUFBQSxFQUNFO01BQUEsT0FBQSxFQUFTO0lBQVQsQ0FURjs7SUFXQSxPQUFBLEVBQ0U7TUFBQSxPQUFBLEVBQVMsSUFBVDtNQUNBLGtCQUFBLEVBQW9CLEtBRHBCO01BRUEsUUFBQSxFQUFVO0lBRlYsQ0FaRjtJQWVBLFNBQUEsRUFBVyxRQUFBLENBQUEsQ0FBQTthQUNULENBQUEsQ0FBRSxNQUFGLENBQVMsQ0FBQyxLQUFWLENBQUEsQ0FBQSxHQUFvQjtJQURYO0VBZlgsQ0FERjtBQUFBIiwic291cmNlc0NvbnRlbnQiOlsiJCgnLmdhbGxlcnktbGluaycpLm1hZ25pZmljUG9wdXBcbiAgdHlwZTogJ2ltYWdlJ1xuICBjbG9zZU9uQ29udGVudENsaWNrOiB0cnVlXG4gIGNsb3NlQnRuSW5zaWRlOiBmYWxzZVxuICBtYWluQ2xhc3M6ICdtZnAtd2l0aC16b29tIG1mcC1pbWctbW9iaWxlJ1xuICBpbWFnZTogXG4gICAgdmVydGljYWxGaXQ6IHRydWVcbiAgICB0aXRsZVNyYzogKGl0ZW0pIC0+XG4gICAgICBpdGVtLmVsLmZpbmQoJ2ZpZ2NhcHRpb24nKS50ZXh0KCkgfHwgaXRlbS5lbC5hdHRyKCd0aXRsZScpXG4gIHpvb206XG4gICAgZW5hYmxlZDogdHJ1ZVxuICAgICMgZHVyYXRpb246IDMwMFxuICBnYWxsZXJ5OlxuICAgIGVuYWJsZWQ6IHRydWVcbiAgICBuYXZpZ2F0ZUJ5SW1nQ2xpY2s6IGZhbHNlXG4gICAgdENvdW50ZXI6ICcnXG4gIGRpc2FibGVPbjogLT5cbiAgICAkKHdpbmRvdykud2lkdGgoKSA+IDY0MCAiXX0=
//# sourceURL=coffeescript
</script>
@endpush
