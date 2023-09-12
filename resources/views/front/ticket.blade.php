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
                <li class="breadcrumb-item active" aria-current="page">Ticket for Future</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row tm-services-row detail">
    <div class="col-xs-12 text-tengah">
        <h1 class="text-xs-center">
            <span>
            Ticket for Future
            </span>
        </h1>
        <p>You can buy a ticket to contribute to future society. This ticket goes two ways.</p>

		<ol>
			<li>You can learn some knowledge, wisdom, etc, from other communities. You can enlarge your abilities and possibilities.</li>
			<li>You can teach your skills and knowledge. There are many youths who are eager to learn. Community youth can inherit your skills and knowledge that are precious but no youth wants to inherit in your homeland.</li>
		</ol>

		<p>
		You can buy a ticket for another person. For example, you want to conserve hand spinning yarn, but you do not have the skill. Your friend has the skill. You buy a ticket on behalf of your friend. Your friend teaches his/her skill to community youth who are eager to learn such skill.</p>

		<hr>
		<h4><b>Interested?</b></h4>
		<p>If you are interested with our activity and want to join or contribute, please go to the contact us page or click button below. Thank you!</p>
		<a href="{{ url('/contact') }}" class="btn btn-primary">Contact Us</a>
    </div>
</div>
<!-- .row .tm-services-row -->
<!-- 
<div class="row section cwb-category">
    <div class="col-xs-12 cards">
        <div class="card card-4">
            <div class="card__icon">
				<img src="{{ asset('/uploads/1/2023-07/indigenous_people.png') }}">
			</div>
            <h4 class="card__title">Work & Learn</h4>
			<div class="card__body">
			You can learn some knowledge, wisdom, etc, from other communities. You can enlarge your abilities and possibilities.
			</div>
            <p class="card__apply">
                <a class="card__link" href="{{ url('contact') }}">Contact Us <i class="fa fa-chevron-right"></i></a>
            </p>
        </div>

		<div class="card card-7">
            <div class="card__icon">
				<img src="{{ asset('/uploads/1/2023-07/indigenous_people.png') }}">
			</div>
            <h4 class="card__title">Grand Tour</h4>
			<div class="card__body">
			You can teach your skills and knowledge. There are many youths who are eager to learn. Community youth can inherit your skills and knowledge that are precious but no youth wants to inherit in your homeland.
			</div>
            <p class="card__apply">
                <a class="card__link" href="{{ url('contact') }}">Contact Us <i class="fa fa-chevron-right"></i></a>
            </p>
        </div>
        
    </div>
</div> -->

@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush
