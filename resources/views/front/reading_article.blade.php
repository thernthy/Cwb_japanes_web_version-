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
              <a href="">家</a>|<a href="">テストポスト</a> 
    </div>
   <div class="container pt-3">
       <div class="row">
       <div class="col-sm-6 drc_content">
              <div class="row mb-5 mt-2">
                <h3>コンテンツ投稿名</h3><br>
                <span>6月17日 | 1ヶ月前</span>
                <p class="mt-5">
                 自信と成績を高めましょう。 
                 Grammarly の高度なエッセイ執筆フィードバックを利用して、
                 アイデアを輝かせることができます。これにより、エッセイは明確で洗練され、盗作のないものになります。
                 また、このページをブックマークすると、エッセイ執筆リソースの広範なライブラリに簡単にアクセスできます。
                  スキルを向上し続けるためのインスピレーションを与えてくれます。
                </p>
              </div>
             
         </div>
         <div class="col-sm-6 ">
             <img src="{{ asset('img/dance.png') }}" class="mb-2" width="70%" height="250px">
             <img src="{{ asset('img/dance.png') }}" class="mb-2" width="70%" height="250px">
             <img src="{{ asset('img/dance.png') }}" class="mb-2" width="70%" height="250px">
         </div>
       </div>
       
   </div>

@endsection

@push('scripts')
	<script type="text/javascript">
        
	</script>
@endpush
