@extends('front.layout')

@push('styles')
@endpush

@section('content')

<div class="row">
        <div class="col-xs-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $data['data']->title_en }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row tm-services-row detail">
        <div class="col-xs-12 col-sm-12 col-md-4 tm-services-col-left">
            <div>
                @if(!empty(getYouTubeData($data['data']->youtube)))
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/{{ $data['data']->youtube }}?autoplay=1&mute=1&enablejsapi=1"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @endif
                <span class="badge badge-primary">{{ $data['data']->action_en }}</span>
                <div class="menu-detail tm-header-gallery">
                    @if($data['data']->photo1!=null)
                    <a href="{{ asset($data['data']->photo1) }}">
                        <img src="{{ asset($data['data']->photo1) }}" alt="Image"
                        class="img-fluid tm-header-img col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-pad-0">
                    </a>
                    @endif
                    @if($data['data']->photo2!=null)
                    <a href="{{ asset($data['data']->photo2) }}">
                        <img src="{{ asset($data['data']->photo2) }}" alt="Image"
                        class="img-fluid tm-header-img col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-pad-0">
                    </a>
                    @endif
                    @if($data['data']->photo3!=null)
                    <a href="{{ asset($data['data']->photo3) }}">
                        <img src="{{ asset($data['data']->photo3) }}" alt="Image"
                        class="img-fluid tm-header-img col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-pad-0">
                    </a>
                    @endif
                    @if($data['data']->photo4!=null)
                    <a href="{{ asset($data['data']->photo4) }}">
                        <img src="{{ asset($data['data']->photo4) }}" alt="Image"
                        class="img-fluid tm-header-img col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-pad-0">
                    </a>
                    @endif
                </div>
                <ul class="list-group">
                    @foreach($data['links'] as $item)
                    <li class="list-group-item">
                        <a target="_BLANK" href="@if($item->file!=null) {{ asset($item->file) }} @else {{ url($item->url) }} @endif"><i class="fa fa-chevron-right"></i> {{ $item->title }} [@if($item->file!=null){{"PDF"}}@else{{"URL"}}@endif]</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-8 tm-services-col-right">
            <div class="tm-services-box detail">
                <div class="text-tengah">
                    <div class="section-header">
                        <h3><span>{{ $data['data']->title_en }}</span></h3>
                        <p><span class="label label-default"><i class="fa fa-clock-o"></i> {{ date('F d, Y', strtotime($data['data']->created_at)) }}</span> <span class="label label-default"> <a href="{{ url('/countries/'.$data['data']->country_slug) }}">{{ $data['data']->country_title }}</a></span>
                        @foreach($data['action'] as $item)
                            <span class="label label-default"> <a href="{{ url('/action/'.$item->slug) }}">{{ $item->title_en  }}</a></span>
                        @endforeach
                        </p>
                    </div>
                </div>
                <hr>
                    {!! $data['data']->desc_en !!}
                    <br>

                    <div class="menu-detail tm-header-gallery">
                    @foreach($data['gallery'] as $item)
                        <a href="{{ asset($item->img) }}">
                            <img src="{{ asset($item->img) }}" alt="Image"
                            class="img-fluid tm-header-img col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-pad-0">
                        </a>
                    @endforeach
                    </div>

                <hr>
                    <h4><b>Interested?</b></h4>
                    <p>If you are interested with our activity and want to join or contribute, please go to the contact us page or click button below. Thank you!</p>
                    <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Us</a>

                
                <hr>
                    <small class="tags">
                        <i class="fa fa-tags"></i> 
                        Tags/Keywords: 
                        @foreach($data['keyword'] as $item)
                            <a href="{{ url('keyword').'/'.$item->slug }}">#{{ $item->title_en }}</a>
                        @endforeach
                    </small>
                <hr>
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
    </div>
    <!-- .row .tm-services-row -->


@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('vendor/js/jquery.magnific-popup.min.js') }}"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
<script type="text/javascript">
    $(window).load(function(){
        /* Gallery pop up
        -----------------------------------------*/
        $('.tm-header-gallery').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery:{enabled:true}                
        });

        // Tabs
        // http://stackoverflow.com/questions/11645081/how-to-build-simple-tabs-with-jquery
        $('.tm-tab-content-box').hide();                
        //$('#tab1C').fadeIn('slow');
        $('#tab1C').show();

        $('.tm-tab-link').click(function(){
            
            var t = $(this).attr('id');
            
            $('.tm-tab-link').removeClass('active');
            $(this).addClass('active');                    

            $('.tm-tab-content-box').hide();
            $('#'+ t + 'C').fadeIn('slow');

        });

        // Remove preloader
        // https://ihatetomatoes.net/create-custom-preloading-screen/
        $('body').addClass('loaded');
                    
    });
</script>
@endpush
