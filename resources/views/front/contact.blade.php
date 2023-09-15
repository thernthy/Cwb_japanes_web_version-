@extends('front.layout')

@push('styles')
<script src="https://kit.fontawesome.com/c49fa14979.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
@endpush
<style>
    form{
        width: 90%;
    }
    .form-group input{
        box-shadow: inset 2px 2px 10px rgba(0, 0, 0, 0.20);
        border-radius: 30px;
        background-color: transparent;
        border: 2px solid #2BFBE8;
        animation: input_form_anime 2s ease;
    }
    .form-group textarea{
        box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.30);
        border-radius: 30px;
        background-color: transparent;
        border: 2px solid #2BFBE8;
        animation: textarea_up 2s ease-in-out;
    }
    .contact_icon{
        margin: auto auto;
        font-size: 5rem;
        display: flex;
        justify-content: flex-end;
        padding: 10px 0;
        color: #2BFBE8;
    }
    .alert-info{
        background-color: red;
    }
    .contact_option{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .contact_option h2{
        border-bottom: 2px solid #2BFBE8;
        padding-bottom: 5px;
        margin-bottom: 20px;
    }
    .contact_option ul li{
        display: flex;
        padding: 15px 10px;
        justify-content: center;
        align-items: center;
        font-size: 1rem;
        font-weight: lighter;
        letter-spacing: 1px;
        font-family: 'Inclusive Sans', sans-serif;
        animation: textarea_up 2s ease-in-out;
    }
    .contact_option ul li i{
        font-size: 2.5rem;
        color: #2BFBE8;
        box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.20);
        padding: 10px;
        border-radius: 10px;
        transition: box-shadow .5s ease-out;
    }
    .contact_option strong{
        box-shadow:inset 1px 1px 10px rgba(0, 0, 0, 0.10);
        padding: 6px 10px;
        border-bottom-right-radius: 10px;
        border-top-right-radius: 10px;
        transition: box-shadow .5s ease-out;
    }
    .contact_option li:hover strong{
        box-shadow:unset;
        
    }
    .contact_option li:hover i{
        box-shadow:unset;
        
    }
    @keyframes input_form_anime {
        from{
            transform: rotate(-10deg);
            opacity: 0;
        }
        to{
            transform: rotate(0deg);
            opacity: 1;
        }
    }
    @keyframes textarea_up{
        from{
           transform: translateY(200px);
           opacity: 0;
        }
        to{
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>
@section('content')
<div class="col contact_contaner">
   <!-- <div class="row mt-5">
        <div class="col-xs-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                </ol>
            </nav>
        </div>
    </div>-->
    <div class="row mt-5 pt-3 pd-5">
        <div class="col-6 contact_option">
        <h2>ការិយាល័យសហគមន៍</h2>
        <p>
           ទំនាក់ទំនងតាមរយះព័ត៍មានខាងក្រោមនឹងទទួលបានការឆ្លើយតបយ៉ាងរហ័ស៖
        </p>
            <ul>
                <li>
                    <i class="fa-brands fa-facebook"></i>
                    <strong>Kuipedia</strong>
                </li>
                <li>
                    <i class="fa-brands fa-telegram"></i>
                    <strong>@kuipedia</strong>
                </li>
                <li>
                    <i class="fa-solid fa-phone-volume"></i>
                    <strong>+885| 2342 5446 67</strong>
                </li>
            </ul>
        </div>
        <div class="col-6">
        <!--    <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Submit Form</h4>
                <p>This form is used to register/applicate/contact regarding our activities and information on this website.</p>
                <hr>
                <p class="mb-0">CWB Community is not </p>
            </div>-->
            <form action=''>
                <div class="contact_icon">
                <i class="fa-solid fa-comment-dots"></i>
                </div>
                <div class="form-group">
                    <!-- <label for="inputAddress">Name</label> -->
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <!-- <label for="inputAddress">Address/Origin</label> -->
                    <input type="text" class="form-control" name="address" id="address" placeholder="Your Address/Origin">
                </div>
                <div class="form-group">
                    <!-- <label for="inputAddress2">e-mail</label> -->
                    <input type="email" class="form-control" name="email" id="email"
                        placeholder="your@emailaddress">
                </div>
                <div class="form-group">
                    <!-- <label for="inputAddress2">Message</label> -->
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>
                <div class="alert alert-info" role="alert">
                    *Note: Make sure you check all the fields before submitting all data!
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- .row .tm-services-row -->
</div>


@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
<script type="text/javascript">
    /* Google map
    ------------------------------------------------*/
    const map = L.map('map').setView([51.505, -0.09], 13);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    const marker = L.marker([51.5, -0.09]).addTo(map)
        .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

    const circle = L.circle([51.508, -0.11], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(map).bindPopup('I am a circle.');

    const polygon = L.polygon([
        [51.509, -0.08],
        [51.503, -0.06],
        [51.51, -0.047]
    ]).addTo(map).bindPopup('I am a polygon.');


    const popup = L.popup()
        .setLatLng([51.513, -0.09])
        .setContent('I am a standalone popup.')
        .openOn(map);

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent(`You clicked the map at ${e.latlng.toString()}`)
            .openOn(map);
    }

    map.on('click', onMapClick);

</script>
@endpush
