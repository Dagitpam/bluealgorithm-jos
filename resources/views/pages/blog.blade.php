@extends('layouts.other_app')
@section('content')
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                </div>
                @if (count($blogs) > 0)
                    @foreach ($blogs as $blog)
                    `
                     <div class="row pb-4">
                        <div class="col-md-5">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img src="x"></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="col-md-7 animate-box">
                            <a href="/view-blog/{{$blog->id}}">{{$blog->news_title}}</a><br> 
                            <a href="#" class="fh5co_mini_time py-3">
                                Posted by KCCA -{{$blog->created_at}} </a>
                            <div class="fh5co_consectetur"> {{$stringFinal}}...
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                <p>No news, come back later</p> 
                @endif
               

               
            </div>
          
        </div>
        <div class="row mx-0">
            <div class="col-12 text-center pb-4 pt-4">
                {{$blogs->links()}}
             </div>
        </div>
    </div>
</div>
    
@endsection