@extends('front.layout')

@push('styles')
<style>
    .side_bar_right{
        background: #EAE5E3;
        padding-bottom: 20px;
    }
    .side_bar_right h2{
        padding:10px 0;
        color: #7E3F3F;
        border-bottom: 1.5px solid #978080;
    }
    .side_bar_right li{
        line-height: 2;
        color: white;
    }
    .side_bar_right li a{
        color: #714747;
        text-decoration: none;
    }
    .side_bar_right .realative_page{
        width: 100%;
        padding: 8px 0;
        background: #9D5139;
        border-radius: 27px;
        transform: rotate(4deg);
        padding-left: 10px;
        box-shadow: inset 1px 1px 10px rgb(38 37 37 / 84%);
        margin-bottom: 2rem;
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .side_bar_right .realative_page a{
        color: white;
        text-decoration: none;
         margin:0 10%;
         z-index: 100;
    }
    .realative_page i{
        padding: 10px;
        color: white;
        background: #978080;
        border-radius: 50%;
        box-shadow: 1px 1px 10px rgb(38 37 37 / 84%);
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        z-index: 50;
    }
    .realative_page:hover >i{
        animation: moveRight .5s forwards;
    }
    .img_galery{
        display: flex;
        flex-wrap: wrap;
    }
    .img_galery .img_blocks{
        width: 33.33%;
        height: 150px;
        border-radius: 10px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        transform: rotate(11deg) translateX(10px);
        z-index: 10;
        transition: all .5s;
    }
    .img_blocks:hover {
        z-index: 15;
        transform: rotate(0);
    }
    .img_blocks:nth-child(2):hover {
        transform: rotate(0deg) translateY(-20px);
        z-index: 15;
    }
    .img_blocks:last-child:hover {
        transform: rotate(0deg) translateX(-10px)  translateY(-30px);
        z-index: 15;
    }
    .img_blocks:nth-child(2){
        transform: rotate(11deg) translateY(-20px);
        z-index: 5;
    }
    .img_blocks:last-child{
        transform: rotate(11deg) translateX(-10px) translateY(-30px);
        z-index: 2;
    }
    @keyframes moveRight {
            0% {
                left: 0;
                background: #978080;
            }
            100% {
                left: 91%; /* Adjust this value based on how far you want the element to move */
                background: green;
            }
        }

        .video_component{
            max-width: 350px;
            min-width: 100%;
            text-align: center;
        }
        .video_component .video_vocer_img {
            margin: auto;
            width: 100%;
            height: 300px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            border-radius: 20px;
            transition: all .6s;
        }
        .video_component .video_vocer_img:hover{
            opacity: .5;
        }
        .video_component .video_vocer_img .play_icon{
            position: absolute;
            top: 50%;
            right: 50%;
            transform: translate(50%, -50%);
            font-size: 2.5rem;
            color: white;
        }
        @media screen and (min-width:1050px) {
            .video_component .video_vocer_img {
                max-width: 600px;
                height: 300px;
            }
        }
</style>
@endpush

@section('content')
   <video playsinline="playsinline" autoplay="autoplay" id="myVideo" muted="muted" loop="loop" style="width: 100%;">
		<source src="{{ asset('img/video/Home_page_cover.mp4') }}" type="video/mp4">
    </video>
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-sm-8">
                <div class="row">
                    @foreach($data['new_video_feed'] as $item)
                    <div class="video_component">
                        <a href="{{ url('/watch', $item->title) }}">
                            <div class="video_vocer_img" style="background-image: url('{{asset($item->video_cover) }}');">
                                <div class="play_icon">
                                    <i class="fa-regular fa-circle-play"></i>
                                </div>
                            </div>
                        </a>
                        <div class="video_title">
                            <h4 class="p-3">動画のタイトル</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-4 side_bar_right">
                <h2>当社の魅力</h2>
                <ul>
                    <li>
                        <a href="">クメールのトランジションダンス</a>
                    </li>
                    <li>
                        <a href="">クイ先住民製品づくり</a>
                    </li>
                    <li>
                        <a href="">クイ先住民博物館</a>
                    </li>
                    <li>
                        <a href="">環境活動の</a>
                    </li>
                    <li>
                        <a href="">教育</a>
                    </li>
                </ul>
                <div class="realative_page mt-5">
                    <i class="fa-solid fa-arrow-right"></i>
                    <a href="#sfs" >ミャンマーのページとの比較 </a>
                </div>
                <hr>
                <h2>当社の魅力</h2>
                <p class="mt-3 mb-5">
                    CWBのミッション
                    国境なく働くということは、地理的な境界に制約されずに世界中の人々と協力することを意味するかもしれません。
                    これは多くの場合、テクノロジーとリモートワークの取り決めによって促進されます。
                </p>
                <h2 class="mt-3 mb-5 h4">新しいフィード投稿</h2>
                <div class="img_galery">
                    @foreach($data['New_activty_posting'] as $item)
                    <div class="img_blocks" style="background-image: url({{ asset($item->photo_cover) }});" 
                        onclick='setHref("{{$item->title}}")'>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
	<script type="text/javascript">
	</script>
    <script>
        function setHref(path) {
            console.log(path)
            window.location.href = "{{url('rel')}}/" + path;
        }
   </script>
@endpush
