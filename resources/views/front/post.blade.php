@extends('front.layout')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endpush

@section('content')

<div class="row">
	<div class="col-xs-12">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
				<li class="breadcrumb-item"><a href="{{ url('/countries/'.$data['data']->country_slug) }}">{{ $data['data']->country_title }}</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{ $data['data']->title }}</li>
			</ol>
		</nav>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-11 offset-md-1 text-tengah">
		<h3 class="tm-about-title">
			<span>{{ $data['data']->title }}</span>
		</h3>
	</div>
</div>

<main>
	<article>
		<span class="post-date">
			{{ date('F d, Y', strtotime($data['data']->created_at)) }} · {{ $data['data']->country_title }} · by <i>{{ $data['data']->name }}</i>
		</span>
		<div class="share-button">
			<!-- AddToAny BEGIN -->
			<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
			<a class="a2a_dd" href="https://www.addtoany.com/share#url={{url()->full()}}"></a>
			<a class="a2a_button_facebook"></a>
			<a class="a2a_button_twitter"></a>
			<a class="a2a_button_email"></a>
			</div>
			<script async src="https://static.addtoany.com/menu/page.js"></script>
			<!-- AddToAny END -->
		</div>
		<hr>
		<header>
			<img src="{{ asset($data['data']->img_header) }}" alt="{{ $data['data']->title }}">
		</header>
		<div class="multicol">
			<h3>{{ $data['data']->caption }}</h3>
			<h2></h2>
			{!! $data['data']->caption_desc !!}
		</div>

		@if($data['data']->img_body!=null)
			<img src="{{ asset($data['data']->img_body) }}" alt="">
		@else
			<hr>
		@endif

		<div class="multicol">
			{!! $data['data']->desc_body !!}
		</div>
		
		@if($data['data']->img_footer!=null)
			<img src="{{ asset($data['data']->img_footer) }}" alt="">
		@else
			<hr>
		@endif

		<div class="multicol">
			{!! $data['data']->desc_footer !!}

			<p class="credits">{{ $data['data']->footer_note }}</p>
		</div>
		
		<hr>
		<span class="post-date">
			{{ date('F d, Y', strtotime($data['data']->created_at)) }} · {{ $data['data']->country_title }} · by <i>{{ $data['data']->name }}</i>
		</span>
		<div class="share-button">
			<!-- AddToAny BEGIN -->
			<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
			<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
			<a class="a2a_button_facebook"></a>
			<a class="a2a_button_twitter"></a>
			<a class="a2a_button_email"></a>
			</div>
			<script async src="https://static.addtoany.com/menu/page.js"></script>
			<!-- AddToAny END -->
		</div>

		<div class="row story-page section">
			<div class="col-xs-12 text-tengah">
				<div class="section-header">
					<h3><span>Related Stories</span></h3>
				</div>
			</div>
			<div class="row">
			@if($data['recents']->isEmpty())
				<div class="no-data">
					<img src="{{ asset('vendor/img/no-data.png') }}" alt="Image" class="img-responsive tm-pad-0">
				</div>
			@endif
			@foreach($data['recents'] as $item)
				<div class="col-md-4">
					<a href="{{ url('story').'/'.$item->slug }}">
						<div class="card mb-4 box-shadow">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<span class="label label-default"><i class="fa fa-clock-o"></i> {{ date('F d, Y', strtotime($item->created_at)) }}</span> <span class="label label-default"> {{ $item->country_title }}</span>
									</h1>
								</div>
								<h5>{{ $item->title }}</h5>
								<p class="card-text">{!! Str::limit(strip_tags($item->caption_desc), 150) !!}</p>
							</div>
							<img class="card-img-top"
								alt="Photo of {{ $item->title }}" style="width: 100%; display: block;"
								src="{{ asset($item->img_header) }}" data-holder-rendered="true">
						</div>
					</a>
				</div>
			@endforeach
			</div>
			<!-- .row-fluid -->
		</div>
	</article>
</main>



<div class="row section">
	<div class="col-md-12">
		<div id="disqus_thread"></div>
		<script>
			/**
			*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
			/*
			var disqus_config = function () {
			this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			*/
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://cwb-world.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	</div>
</div>

@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush
