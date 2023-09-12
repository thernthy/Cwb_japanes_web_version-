@extends('front.layout')

@push('styles')
@endpush

@section('content')

<div class="row">
    <div class="col-xs-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Philosophy</li>
            </ol>
        </nav>
    </div>
</div>
<div class="col-xs-12 text-tengah">
    <h1 class="text-xs-center">
        <span>
        Our Philosophy
        </span>
    </h1>
</div>

<div class="row tm-services-row detail">
    <div class="col-xs-12 text-tengah">
        {!! CRUDBooster::getSetting('about') !!}
    </div>
</div>
<!-- .row .tm-services-row -->
@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush
