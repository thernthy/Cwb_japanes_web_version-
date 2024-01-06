@extends('front.layout')

@push('styles')
@endpush

@section('content')
    <video playsinline="playsinline" autoplay="autoplay" id="myVideo" muted="muted" loop="loop" style="width: 100%;">
		<source src="https://youtu.be/CjC0fVRiVeE?si=9hSVLbvgDvnAWj1F" type="video/mp4">
    </video>
	<h2 class="text-center mb-5 mt-5">
        アクティビティギャラリー
    </h2>
    <div class="container">
        <div class="row">
            <div class="col-4 left_side_galery mt-5 pt-2">
				<a href="{{ url('/', 'testing-article') }}">
					<div class="img_block" style="background-image: url(img/650c1db596b082.23624320.jpg);">
					
					</div>
				</a>
				<a href="">
					<div class="img_block" style="background-image: url(img/dance.png);">
						
					</div>
				</a>
				<a href="">
					<div class="img_block" style="background-image: url(img/dace2.jpg);">
						
					</div>
				</a>
				<a href="">
					<div class="img_block" style="background-image: url(img/dace3.jpg);">
						
					</div>
				</a>
            </div>
            <div class="col-4">
				<a href="">
					<div class="img_block" style="background-image: url(img/dace4.jpg);">
						
					</div>
				</a>
				<a href="">
					<div class="img_block" style="background-image: url(img/dace6.jpg);">
						
					</div>
				</a>
				<a href="">
					<div class="img_block">
						
					</div>
				</a>
				<a href="">
					<div class="img_block">
						
					</div>
				</a>
				<a href="">
					<div class="img_block">
						
					</div>
				</a>
				<a href="">
					<div class="img_block">
						
					</div>
				</a>
				<a href="">
					<div class="img_block">
						
					</div>
				</a>
            </div>
            <div class="col-4 mt-5 pt-4">
                <div class="img_block">
                    
                </div>
                <div class="img_block">
                    
                </div>
                <div class="img_block">
                    
                </div>
                <div class="img_block">
                    
                </div>
                <div class="img_block">
                    
                </div>
                <div class="img_block">
                    
                </div>
            </div>
        </div>
        <h2 class="text-center mb-5 mt-5">
            ビデオフィード
        </h2>
        <div class="row mt-5 mb-5 video_feed_block">
            <div class="d-md-flex  align-content-lg-center mb-4">
                <a href="{{ url('/watch', 'ウグイのビデオ') }}">
                    <div class="feed__item" style="background-image: url('img/dace3.jpg');">
                        
                    </div>
                </a>
                <div class="bili-video-card__info __scale-disable pt-4 mb-4">
                    <div class="bili-video-card__info--right p-3">
                      <h3 class="bili-video-card__info--tit" title="《凡人修仙传》第77集，开播24小时，播放量狂飙，五破纪录！"><a href="{{ url('/watch', 'ウグイのビデオ') }}"  data-mod="tianma.1-1-1" data-target-url="https://www.bilibili.com/video/BV1xQ4y1t78k">《凡人修仙传》第77集，开播24小时，播放量狂飙，五破纪录！</a></h3>
                      <div class="bili-video-card__info--bottom">
                        <a class="bili-video-card__info--owner" href="//space.bilibili.com/456490533" target="_blank" data-mod="tianma.1-1-1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="bili-video-card__info--owner__up">
        
                            <path d="M6.15 8.24805C6.5642 8.24805 6.9 8.58383 6.9 8.99805L6.9 12.7741C6.9 13.5881 7.55988 14.248 8.3739 14.248C9.18791 14.248 9.8478 13.5881 9.8478 12.7741L9.8478 8.99805C9.8478 8.58383 10.1836 8.24805 10.5978 8.24805C11.012 8.24805 11.3478 8.58383 11.3478 8.99805L11.3478 12.7741C11.3478 14.41655 10.01635 15.748 8.3739 15.748C6.73146 15.748 5.4 14.41655 5.4 12.7741L5.4 8.99805C5.4 8.58383 5.73578 8.24805 6.15 8.24805z" fill="currentColor"></path>
                            <path d="M12.6522 8.99805C12.6522 8.58383 12.98795 8.24805 13.4022 8.24805L15.725 8.24805C17.31285 8.24805 18.6 9.53522 18.6 11.123C18.6 12.71085 17.31285 13.998 15.725 13.998L14.1522 13.998L14.1522 14.998C14.1522 15.4122 13.8164 15.748 13.4022 15.748C12.98795 15.748 12.6522 15.4122 12.6522 14.998L12.6522 8.99805zM14.1522 12.498L15.725 12.498C16.4844 12.498 17.1 11.8824 17.1 11.123C17.1 10.36365 16.4844 9.74804 15.725 9.74804L14.1522 9.74804L14.1522 12.498z" fill="currentColor"></path>
                            <path d="M12 4.99805C9.48178 4.99805 7.283 5.12616 5.73089 5.25202C4.65221 5.33949 3.81611 6.16352 3.72 7.23254C3.60607 8.4998 3.5 10.171 3.5 11.998C3.5 13.8251 3.60607 15.4963 3.72 16.76355C3.81611 17.83255 4.65221 18.6566 5.73089 18.7441C7.283 18.8699 9.48178 18.998 12 18.998C14.5185 18.998 16.7174 18.8699 18.2696 18.74405C19.3481 18.65655 20.184 17.8328 20.2801 16.76405C20.394 15.4973 20.5 13.82645 20.5 11.998C20.5 10.16965 20.394 8.49877 20.2801 7.23205C20.184 6.1633 19.3481 5.33952 18.2696 5.25205C16.7174 5.12618 14.5185 4.99805 12 4.99805zM5.60965 3.75693C7.19232 3.62859 9.43258 3.49805 12 3.49805C14.5677 3.49805 16.8081 3.62861 18.3908 3.75696C20.1881 3.90272 21.6118 5.29278 21.7741 7.09773C21.8909 8.3969 22 10.11405 22 11.998C22 13.88205 21.8909 15.5992 21.7741 16.8984C21.6118 18.7033 20.1881 20.09335 18.3908 20.23915C16.8081 20.3675 14.5677 20.498 12 20.498C9.43258 20.498 7.19232 20.3675 5.60965 20.2392C3.81206 20.0934 2.38831 18.70295 2.22603 16.8979C2.10918 15.5982 2 13.8808 2 11.998C2 10.1153 2.10918 8.39787 2.22603 7.09823C2.38831 5.29312 3.81206 3.90269 5.60965 3.75693z" fill="currentColor"></path>
        
                          </svg>
                          <span class="bili-video-card__info--author" title="凡人修仙传数据分析">凡人修仙传数据分析</span>
                          <span class="bili-video-card__info--date">· 16小时前</span></a>
                      </div>
                      <p class="mt-3">100k 視聴者 1 ひと月前</p>
                    </div>
                  </div>
            </div>
            <div class="d-md-flex  align-content-lg-center">
                <a href="https://www.youtube.com/watch?v=JXl4QgYUi9c&t=1s">
                    <div class="feed__item" style="background-image: url('img/dace3.jpg');">
                        
                    </div>
                </a>
                <div class="bili-video-card__info __scale-disable pt-4">
                    <div class="bili-video-card__info--right p-3">
                      <h3 class="bili-video-card__info--tit" title="《凡人修仙传》第77集，开播24小时，播放量狂飙，五破纪录！"><a href="https://www.bilibili.com/video/BV1xQ4y1t78k" target="_blank" data-mod="tianma.1-1-1" data-target-url="https://www.bilibili.com/video/BV1xQ4y1t78k">《凡人修仙传》第77集，开播24小时，播放量狂飙，五破纪录！</a></h3>
                      <div class="bili-video-card__info--bottom">
                        <a class="bili-video-card__info--owner" href="//space.bilibili.com/456490533" target="_blank" data-mod="tianma.1-1-1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="bili-video-card__info--owner__up">
        
                            <path d="M6.15 8.24805C6.5642 8.24805 6.9 8.58383 6.9 8.99805L6.9 12.7741C6.9 13.5881 7.55988 14.248 8.3739 14.248C9.18791 14.248 9.8478 13.5881 9.8478 12.7741L9.8478 8.99805C9.8478 8.58383 10.1836 8.24805 10.5978 8.24805C11.012 8.24805 11.3478 8.58383 11.3478 8.99805L11.3478 12.7741C11.3478 14.41655 10.01635 15.748 8.3739 15.748C6.73146 15.748 5.4 14.41655 5.4 12.7741L5.4 8.99805C5.4 8.58383 5.73578 8.24805 6.15 8.24805z" fill="currentColor"></path>
                            <path d="M12.6522 8.99805C12.6522 8.58383 12.98795 8.24805 13.4022 8.24805L15.725 8.24805C17.31285 8.24805 18.6 9.53522 18.6 11.123C18.6 12.71085 17.31285 13.998 15.725 13.998L14.1522 13.998L14.1522 14.998C14.1522 15.4122 13.8164 15.748 13.4022 15.748C12.98795 15.748 12.6522 15.4122 12.6522 14.998L12.6522 8.99805zM14.1522 12.498L15.725 12.498C16.4844 12.498 17.1 11.8824 17.1 11.123C17.1 10.36365 16.4844 9.74804 15.725 9.74804L14.1522 9.74804L14.1522 12.498z" fill="currentColor"></path>
                            <path d="M12 4.99805C9.48178 4.99805 7.283 5.12616 5.73089 5.25202C4.65221 5.33949 3.81611 6.16352 3.72 7.23254C3.60607 8.4998 3.5 10.171 3.5 11.998C3.5 13.8251 3.60607 15.4963 3.72 16.76355C3.81611 17.83255 4.65221 18.6566 5.73089 18.7441C7.283 18.8699 9.48178 18.998 12 18.998C14.5185 18.998 16.7174 18.8699 18.2696 18.74405C19.3481 18.65655 20.184 17.8328 20.2801 16.76405C20.394 15.4973 20.5 13.82645 20.5 11.998C20.5 10.16965 20.394 8.49877 20.2801 7.23205C20.184 6.1633 19.3481 5.33952 18.2696 5.25205C16.7174 5.12618 14.5185 4.99805 12 4.99805zM5.60965 3.75693C7.19232 3.62859 9.43258 3.49805 12 3.49805C14.5677 3.49805 16.8081 3.62861 18.3908 3.75696C20.1881 3.90272 21.6118 5.29278 21.7741 7.09773C21.8909 8.3969 22 10.11405 22 11.998C22 13.88205 21.8909 15.5992 21.7741 16.8984C21.6118 18.7033 20.1881 20.09335 18.3908 20.23915C16.8081 20.3675 14.5677 20.498 12 20.498C9.43258 20.498 7.19232 20.3675 5.60965 20.2392C3.81206 20.0934 2.38831 18.70295 2.22603 16.8979C2.10918 15.5982 2 13.8808 2 11.998C2 10.1153 2.10918 8.39787 2.22603 7.09823C2.38831 5.29312 3.81206 3.90269 5.60965 3.75693z" fill="currentColor"></path>
        
                          </svg>
                          <span class="bili-video-card__info--author" title="凡人修仙传数据分析">凡人修仙传数据分析</span>
                          <span class="bili-video-card__info--date">· 16小时前</span></a>
                      </div>
                    </div>
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
