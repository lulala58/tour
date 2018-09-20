@extends('layouts.app')

@section('content')

    <div id="fh5co-project">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>当季旅游·<span style="font-size: 25px;"> HOT SEASON TOUR</span></h2>
                    <p>旅行，自由。没有繁琐的计划，没有沉重的负担，只有最纯粹的态度。</p>
                </div>
            </div>

            <ul class="nav nav-tabs" style="margin-bottom: 10px;">
                <li role="presentation" class="@if($id==1)active @else @endif">
                    <a href="/tour/guid/1">国内旅游</a>
                </li>
                <li role="presentation" class="@if($id==2)active @else @endif">
                    <a href="/tour/guid/2">国外旅游</a>
                </li>
            </ul>
            <div class="row">

                @foreach($tours as $tour)


                <div class="col-md-4 col-sm-6 fh5co-project animate-box rowbox" data-animate-effect="fadeIn">
                    <a href="/tour/content/{{$tour->id}}"><img src="{{$tour->pics}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <h3>{!! str_limit($tour->name,'30','...')!!}</h3>
                        <span>￥{{$tour->price}}</span>
                    </a>
                </div>

                @endforeach

            </div>
        </div>
    </div>





@endsection