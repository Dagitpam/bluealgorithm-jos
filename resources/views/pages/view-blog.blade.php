 @extends('layouts.other_app')
@section('content')
<div class="container-fluid">
    <h2>{{$blogs->news_title}}</h2>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="thumbnail">
              <a href="/storage/news_images/{{$blogs['news_image']}}">
                <img src="/storage/news_images/{{$blogs['news_image']}}" alt="Lights" style="width:100%">
              </a>
            </div>
          </div>
          <div class="col-md-2"></div>
    </div>
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <p>
                    {{$blogs->news_body}}&nbsp;<a href="/blog" class="btn btn-sm btn-info">Back</a>
                </p>
            </div>
        </div>
    </div>
</div>
    
@endsection

