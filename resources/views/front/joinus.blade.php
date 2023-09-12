@extends('front.layout')

@push('styles')
@endpush

@section('content')

<div class="row">
    <div class="col-xs-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Join Us</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row tm-services-row detail">
    <div class="col-xs-12 text-tengah">
        <h1 class="text-xs-center">
            <span>
            Join Us
            </span>
        </h1>
        <h4 class="text-xs-center">Be a creative member for new society!</h4>
        <p>There are several ways to join our activites. As we mentioned in <b><a href="{{ url('about') }}">Our Philosophy</a></b>, we emphasize
mutual inspiration. Mere donation of money is the last thing we want. We ask you what you can do for each community. We offer you what each community wants. We ask you how eager you want to learn from others, even if you teach something to others. We offer you opportunities to be a creative member, create a new society with us!</p>
        {!! CRUDBooster::getSetting('joinus') !!}
    </div>
</div>
<!-- .row .tm-services-row -->

<div class="row section">
	<!-- <div class="col-xs-12 text-tengah">
		<div class="section-header">
			<h3><span>CWB 's Link</span></h3>
			<p>All URL, SNS, Social Media link that related to CWB.</p>
		</div>
	</div> -->

	<div class="col-xs-12">
		<ul class="justify-content-md-center">
			<li class="tm-tab-link-item col-md-4">
				<a id="tab2" href="{{ url('community-tourism') }}" class="tm-tab-link">
					<i class="fa fa-user-secret tm-tab-icon"></i>
					<span class="tm-tab-link-label">
                        Community Tourism
					</span>
				</a>
			</li>
            <li class="tm-tab-link-item col-md-4">
				<a id="tab2" href="{{ url('trust-member') }}" class="tm-tab-link">
					<i class="fa fa-users tm-tab-icon"></i>
					<span class="tm-tab-link-label">
                        "Trust Member"
					</span>
				</a>
			</li>
            <li class="tm-tab-link-item col-md-4">
				<a id="tab2" href="{{ url('ticket') }}" class="tm-tab-link">
					<i class="fa fa-support tm-tab-icon"></i>
					<span class="tm-tab-link-label">
                        Ticket for Future
					</span>
				</a>
			</li>
		</ul>
	</div>

</div>
@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush
