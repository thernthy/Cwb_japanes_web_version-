@extends('front.layout')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<div class="row">
    <div class="col-xs-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
				<li class="breadcrumb-item"><a href="{{ url('join-us') }}">Join Us</a></li>
                <li class="breadcrumb-item active" aria-current="page">Community Tourism</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row tm-services-row detail">
    <div class="col-xs-12 text-tengah">
        <h1 class="text-xs-center">
            <span>
            Community Tourism
            </span>
        </h1>
        <p>
		In the CWB world, tour does not mean sightseeing nor doing some activities. We offer you opportunities to find your new aspects, abilities, possibilities and limitations. One of our core concept, Work &amp; Learn is a foundation of this community tourism. Working with community people, you can communicate without words. It would lead to many misunderstandings and troubles.</p><p>Through such “difficulties” you can get new insight into yourself. It is real intercourse between different cultures. You can cross borders—nation, language, gender, ethnic, religion, etc. Of course, community tourism is based on community. It does not mean community people just welcome you. They have their problems, issues. They are eager to learn, and want to solve their problems by themselves. You should commit to community people’s wants, difficulties. It takes time. After you go back to your homeland, your tour does not end. You can participate in the community you visit after you return to your homeland. You will be a member of the community you visit.
		</p>
    </div>
</div>
<!-- .row .tm-services-row -->

<div class="row section cwb-category">
    <div class="col-xs-12 cards">
        <div class="card card-4">
            <div class="card__icon">
				<img src="{{ asset('/uploads/1/2023-07/indigenous_people.png') }}">
			</div>
            <h4 class="card__title">Work & Learn</h4>
			<div class="card__body">
			At least 1 month.
			<br><b>Work:</b> you work with community youth
			<br><b>Learn:</b> teach and learn each other.
			<hr>
			<b>ex:</b> you teach English — community youth teach agriculture
			<hr>
			You will find new abilities and possibility.
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
			For 1 month.
			<br>Teach your professional skills all over CWB.
			<hr>
			<b>ex:</b> You can teach natural dying in Myanmar. Myanmar CWB members take videos, photos to share the knowledge. When you go somewhere or go back to your homeland, you can follow up with community youth. Also you can teach how to make products using natural dye materials. When some other community wants you to teach natural dying, you can go there.
			</div>
            <p class="card__apply">
                <a class="card__link" href="{{ url('contact') }}">Contact Us <i class="fa fa-chevron-right"></i></a>
            </p>
        </div>
        
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush
