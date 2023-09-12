@extends('front.layout')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.css" />
<style>
    .container #MapBox {
        margin-bottom: 0.75rem;
    }

</style>
@endpush

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Service Area</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="section-header">
                <h2>Service Area</h2>
                <p>This is our service area location on the map. Please take a look below!</p>
            </div>

            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>Denpasar, Bali</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>{{ CRUDBooster::getSetting('e_mail') }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p><a target="_blank" href="https://wa.me/{{ CRUDBooster::getSetting('whatsapp') }}">{{ CRUDBooster::getSetting('whatsapp') }}</a></p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-8">
                    <div id="MapBox" style="height: 41rem"></div>
                </div><!-- End Map -->

            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js"></script>
<script type="text/javascript">
    $(function () {
        setLocation = [-8.6358915, 115.2116867];
        var map = L.map('MapBox').setView(setLocation, 14);
        L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        map.attributionControl.setPrefix(false);

        var marker = new L.marker(setLocation, {
            draggable: false
        });

        marker.bindPopup("<b>Location number One</b><br><b>Address</b>: pattimura st.").openPopup();

        map.addLayer(marker);
    })

</script>
@endpush
