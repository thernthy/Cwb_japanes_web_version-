@extends('front.layout')
@push('styles')
<style>
    
    </style>
@endpush

@section('content')
    <div class="rout_direction pt-5">
                <div class="controller">
                    
                </div>
                <div class="icon_block">
                    <a href="{{ url('/') }}"><i class="fa-solid fa-circle-left"></i></a>
                </div>
                <a href="">家</a>|<a href="">動画のタイトル</a> 
    </div>
   <div class="container pt-2">
    <main class="pt-2">
            <div id="video-container">
                <video id="video-player" controls style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                    <!-- Replace the video source with your actual video file -->
                    <source src="{{ asset('img/video/Line_Dance_របាំនារីជាជួរ_CjC0fVRiVeE_137.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div id="video-info">
                <h1>動画のタイトル</h1>
                <p>アップロード者:<strong>CWBカンボジア</strong></p>
                <p>公開日: <strong>2024 年 1 月 6 日</strong></p>

                <div id="engagement-buttons">
                    <button>同じく</button>
                    <button>嫌い</button>
                    <button>共有</button>
                </div>
                <p class="mt-3 mb-3">
                自信と成績を高めましょう。 Grammarly の高度なエッセイ執筆フィードバックを利用して、あなたのアイデアを輝かせることができます。
                これにより、エッセイが明確で洗練され、盗作のないものになります。
                </p>
            </div>
            <div id="comments-section">
                <h2>Comments</h2>
                <!-- Add your comment section here -->
            </div>
        </main>
   </div>
@endsection

@push('scripts')
	<script type="text/javascript">
        
	</script>
@endpush
