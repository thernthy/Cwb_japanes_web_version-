<!-- ======= Footer ======= -->
<footer class="bg-light text-lg-start">
	<!-- Grid container -->
	<div class="container p-4">
		<!--Grid row-->
		<div class="row">
			<!--Grid column-->
			<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
				<h6>About Us</h6>

				<p>
				All our activities are based on and/or reflect our Philosophy, ‘Inspired Economy’.
First of all, economy means that we do not reject money itself, nor market system. But we do not accept its tendency to make humans into mere money-mongers. In Inspired Economy, money is just one of the tools of transactions. Also we use a market system to make each transaction easier.
				</p>
				<br>

				<h6>Tags/Keywords</h6>

				<div>
				@foreach($data['nav_footer']['foot_keyword'] as $item)
					<a class="bn" href="{{ url('keyword').'/'.$item->slug }}">
						<span class="badge-normal badge-primary">
							{{ $item->title_en }}
						</span>
					</a>
				@endforeach
				</div>
			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
				<h5 class="text-uppercase">Community Without Border</h5>

				<p>
				CWB is stand for Community Works without Border. We participate in each community to make jobs for community youth to make each community sustainable. Till now, youth go outside to get new opportunity. That is not bad thing. Youth go outside, meet various kinds of persons, customs, religions, get new insight of themself and their community. But in the tide of globalisation, going out of community makes youth (and also their parents) as uniform style. We lost our global diversity. We want to keep diversity of customs, traditions in each community through making jobs.
				</p>
				<br>

				<div>
				<!-- flag countries -->
				@foreach($data['nav_footer']['nav_country'] as $item)
					<a href="{{ url('countries').'/'.$item->slug }}"><img class="flag-small" src="{{ asset($item->logo) }}"></a>
				@endforeach
				</div>
			</div>
			<!--Grid column-->
		</div>
		<!--Grid row-->
	</div>
	<!-- Grid container -->

	<!-- Copyright -->
	<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
	<small>Copyright © 2023 Community Work without Border. <u><a href="{{ url('privacy-policy') }}">Privacy Policy</a></u></small>
	</div>
	<!-- Copyright -->
</footer>
<!-- End Footer -->