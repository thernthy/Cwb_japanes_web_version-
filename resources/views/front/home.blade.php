@extends('front.layout')

@push('styles')
<style>
    .side_bar_right{
        background: #b7a7a7;
        padding-bottom: 20px;
    }
    .side_bar_right h2{
        padding:10px 0;
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
        padding: 5px 5px;
        background: #9D5139;
        border-radius: 10px;
        color: white;
        text-decoration: none;
    }

</style>
@endpush

@section('content')
    <!--<video playsinline="playsinline" autoplay="autoplay" id="myVideo" muted="muted" loop="loop" style="width: 100%;">
		<source src="{{ asset('img/video/Home_page_cover.mp4') }}" type="video/mp4">
    </video>-->
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-sm-8">
                
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
                <div style="transform: rotate(4deg);">
                    <a href="" class="realative_page">ミャンマーのページとの比較</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        AOS.init();
    </script>
	<script type="text/javascript">

	</script>
@endpush
