@extends('front.layout')

@push('styles')
@endpush

@section('content')

<div class="row">
    <div class="col-xs-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
				<li class="breadcrumb-item"><a href="{{ url('join-us') }}">Join Us</a></li>
                <li class="breadcrumb-item active" aria-current="page">Trust Member</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row tm-services-row detail">
    <div class="col-xs-12 text-tengah">
        <h1 class="text-xs-center">
            <span>
            Trust Member
            </span>
        </h1>
        <p>Prepaid for 1 year, we deliver our products to you. These products need to improve more, even though they have a good quality and/or good taste. You can advise/suggest what you think to improve.When you really commit “Trust” products, have a skill, you enjoy creating new products for new society.</p>

		<hr>
		<h4><b>Interested?</b></h4>
		<p>If you are interested with our activity and want to join or contribute, please go to the contact us page or click button below. Thank you!</p>
		<a href="{{ url('/contact') }}" class="btn btn-primary">Contact Us</a>
    </div>
</div>
<!-- .row .tm-services-row -->

@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush
