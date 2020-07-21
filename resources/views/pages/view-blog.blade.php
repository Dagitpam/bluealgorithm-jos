 @extends('layouts.other_app')
@section('content')<br>
<div class="container-fluid">
    <section class="mb-4">
        <div style="width: 100%; display: flex; height: auto;">
            {{-- @include('advert.sideleftads') --}}
            {{-- side bar --}}
            <div class="side-bar text-center" style="width: 35%; border-left: 1px solid #5bc0de; border-top: 1px solid #5bc0de; border-top-left-radius: 4px;">
                <img id="sideleft" src="{{asset('template/img/leftad.jpg')}}" width="100%" height="600px">
            </div>
            <div class="bg-white" style="width: 100%; border:1px solid #5bc0de; border-radius:4px;">
                <div class="modal-header">
                    <h6 class="modal-title text-center">Latest News Updates</h6>
                </div>
                <br>
                    <h5 style="padding: 10px 0px 0px 10px;" class="text-info">{{$blogs->news_title}}</h5>
                    <small style="font-weight: bold; padding: 10px">{{$blogs->created_at}}</small>
                    <img src="/storage/news_images/{{$blogs->news_image}}" class="img-fluid mx-auto d-block" width="560" height="345">
            <p style="margin: 15px 10px 0px 15px; font-size: 18px;" class="text-justify">{{$blogs->news_body}}&nbsp;<a href="/blog">Back</a></p>
            </div>
            <div class="side-bar text-center" style="width: 35%; border-right: 1px solid #5bc0de; border-top: 1px solid #5bc0de; border-top-right-radius: 4px;">
                <img id="sideRight" src="{{asset('template/img/rightad.jpg')}}" width="100%" height="600px">
            </div>
    </section>
</div>
    
@endsection

