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

<div class="row">
    <div class="col-xs-12 col-md-11 offset-md-1 text-tengah">
        <h3 class="tm-about-title">
            <span>{{ $data['data']->title_en }}</span>
        </h3>
    </div>
</div>

    @if(!$data['activities']->isEmpty())
        @foreach($data['activities'] as $item)
        <div class="row tm-services-row list">
            <div class="col-xs-12 col-sm-12 col-md-2 offset-md-2 tm-services-col-left">
                <div>
                    @if($item->photo_cover == NULL)
                        <img src="{{ asset('vendor/img/default-img.jpg') }}" alt="Image" class="img-responsive tm-pad-0">
                    @else
                        <img src="{{ asset($item->photo_cover) }}" alt="Image" class="img-responsive tm-pad-0">
                    @endif
                    <a href="{{ url('action').'/'.$item->action_slug }}"><span class="badge badge-primary">{{ $item->actionnya }}</span></a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 tm-services-col-right">                    
                <div class="tm-services-box">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="country-text tm-blue-text">{{ $item->country }}</p>
                            <h3 >{{ $item->title_en }}</h3>
                        </div>
                        <div class="col-md-6">
                            <p>{!! \Illuminate\Support\Str::limit($item->desc_en, 150, $end='...') !!}</p>
                            <div class="btn-group" role="group">
                                <a href="{{ url('activity').'/'.$item->slug }}"><button type="button" class="btn btn-info">Read More &nbsp;<i class="fa fa-chevron-right"></i></button></a>
                            </div>
                        </div>
                        <!-- .col-md-6 -->
                        <!-- <div class="col-md-6">
                            <p>Using Mottainai Veg, we are trying to make product for preserving food. Please join us and support us here! </p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- .row .tm-services-row -->
        @endforeach
    @else
    <div class="no-data">
        <img src="{{ asset('vendor/img/no-data.png') }}" alt="Image" class="img-responsive tm-pad-0">
    </div>
    @endif

@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('assets/vendor/parallax/parallax.min.js') }}"></script>

<script type="text/javascript">

</script>
@endpush
