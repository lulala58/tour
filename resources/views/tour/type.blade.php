@extends('layouts.app')

@section('content')






     <div id="fh5co-blog" class="fh5co-bg-section" style="background: #f2f2f2; padding-top: 75px;">
         <div class="container">
             <div class="row">

                 <ul class="nav nav-tabs" style="margin-bottom: 10px;">
                     <li role="presentation" class="@if($id==1)active @else @endif"><a href="/tour/type/1">国内旅游</a></li>
                     <li role="presentation" class="@if($id==2)active @else @endif"><a href="/tour/type/2">国外旅游</a></li>
                 </ul>

                     @foreach($tours as $tour)
                 <div class="col-lg-4 col-md-4">
                     <div class="fh5co-blog animate-box">
                         <a href="news-show.html"><img class="img-responsive" src="images/work-4.jpg" alt=""></a>
                         <div class="blog-text">
                             <h3><a href="news-show.html">{{$tour->gl_name}}</a></h3>
                             <span class="posted_on">Nov. 15th</span>
                             <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                <p>{{$tour->gl_content}}
                                {!! str_limit($tour->gl_content,100,'...') !!}
                                </p>
                             <a href="/tour/detail/{{$tour->id}}" class="btn btn-primary">查看</a>
                         </div>
                     </div>

                 </div>
                     @endforeach



             </div>
         </div>
     </div>

@endsection