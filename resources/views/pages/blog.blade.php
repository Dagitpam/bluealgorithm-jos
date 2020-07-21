@extends('layouts.other_app')
@section('content')
<div class="container"><br>
    <section class="mb-4">
        <div style="width: 100%; display: flex; height: auto;">
            {{-- @include('advert.sideleftads') --}}
            {{-- side bar --}}
            {{-- <div class="side-bar text-center" style="width: 100%; border-left: 1px solid #5bc0de; border-top: 1px solid #5bc0de; border-top-left-radius: 4px;">
                <img id="sideleft" src="{{asset('images/leftad.jpg')}}" width="100%" height="600px">
            </div> --}}
            <div class="bg-white" style="width: 100%; border:1px solid #5bc0de; border-radius:4px;">
                <div class="modal-header">
                    <h6 class="modal-title text-center">Latest News Updates</h6>
                </div>
                <br>
                @if (count($blogs) > 0)

                    @foreach ($blogs as $blog)
                    <?php 
                    //Fetch 300 strings
                    $string = $blog->news_body;
                    // $whatonearth=preg_replace('/\s/','',$string);
                    $stringFinal = substr($string, 0, 300);
                    
                    ?>
                    <h5 style="padding: 10px 0px 0px 10px;" class="text-info">{{$blog->news_title}}</h5>
                    <small style="font-weight: bold; padding: 10px">{{$blog->created_at}}</small>
                    <img src="/storage/news_images/{{$blog['news_image']}}" class="img-fluid mx-auto d-block" width="560" height="345">
             <p style="margin: 15px 10px 0px 15px; font-size: 18px;" class="text-justify">
                {{$stringFinal}}
             <a href="/view-blog/{{$blog->id}}">...Read more</a>
            </p>
                     
                    
                    @endforeach
                @else
                    <p>No news, come back later</p>
                @endif
                {{-- <br>
                @if (count($indexDetails['userpost'])< 1)
                    <div class="card bg-default text-black" style="width: 98%; margin: 0 auto; border-radius: 0px; margin-bottom: 5px;">
                        <div class="card-body" style="line-height: auto;">No post, Come back later</div>
                    </div>
                @else
                    @foreach ($indexDetails['userpost'] as $posts)
                        <div class="card bg-default text-black" style="width: 98%; margin: 0 auto; border-radius: 0px; margin-bottom: 5px;">
                        <div class="card-body" style="line-height: auto;"><a href="/show_post/{{$posts->post_title}}">{{$posts->post_title}}</a></div>
                        </div>
    
                    @endforeach
      
                @endif --}}
                {{$blogs->links()}}
            </div>
            {{-- <div class="side-bar text-center" style="width: 35%; border-right: 1px solid #5bc0de; border-top: 1px solid #5bc0de; border-top-right-radius: 4px;">
                <img id="sideRight" src="{{asset('images/rightad.jpg')}}" width="100%" height="600px">
            </div> --}}
    </section>
</div>
    
@endsection