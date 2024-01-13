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
              <a href="">家</a>|<a href="">{{$data['article']->title}}</a> 
    </div>
   <div class="container pt-3">
       <div class="row">
       <div class="col-sm-6 drc_content">
              <div class="row mb-5 mt-2">
                <h3>{{$data['article']->title}}</h3><br>
                <span>6月17日 | 1ヶ月前</span>
                <p class="mt-5">
                  {{$data['article']->dcr}}
                </p>
              </div>
             
         </div>
         <div class="col-sm-6 ">
             @if($data['article']->photo_1!=null)
             <img src="{{ asset($data['article']->photo_1) }}" class="mb-2" width="70%" height="250px">
             @endif
             @if($data['article']->photo_2!=null)
             <img src="{{ asset($data['article']->photo_2) }}" class="mb-2" width="70%" height="250px">
             @endif
             @if($data['article']->photo_3!=null)
             <img src="{{ asset($data['article']->photo_3) }}" class="mb-2" width="70%" height="250px">
             @endif
             @if($data['article']->photo_4!=null)
             <img src="{{ asset($data['article']->photo_4) }}" class="mb-2" width="70%" height="250px">
             @endif
         </div>
       </div>
   </div>
@endsection
@push('scripts')
	<script type="text/javascript">
        
	</script>
@endpush
