@extends('layouts.app')

@section('content')







    <div class="container">
        <div class="row">
            <div class="col-md-5 col lg-12">
                <div class="row img">
                    <img src="{{$tour->pics}}" alt="" />
                </div>
            </div>
            <div class="col-md-5 col lg-12">
                <div class="row img buying">
                    <h3>{{$tour->name}}</h3>
                    <p><span>【精选酒店】</span> 升级两晚国际五星，得众好评，住无忧!</p>
                    <p><span>【缤纷景点】</span> 经典景点全收罗，饱眼耳福，行无虑!</p>
                    <p><span>【特色美食】</span> 拒绝简陋团餐，食花式自助，品特色风味!</p>
                    <p><span>【丰富玩乐】</span> 无自费（水项除外），经典行程一次走遍!</p>
                    <p><a href="">{{$tour->price}}</a>起/人</p>
                    <p>起止时间:<span>{{$tour->start_time}}</span>---<span>{{$tour->end_time}}</span></p>
                    <button type="submit" class="btn btn-danger">立即预定</button>
                </div>

            </div>
        </div>
    </div>

@endsection