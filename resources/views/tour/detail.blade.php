@extends('layouts.app')

@section('content')








    <div class="news_show">
        <span class="show_t">{{$tour->name}}</span>
        <span class="fa_time">   发布时间：{{$tour->created_at}}</span>
        <p>
            {{$tour->gl_content}}
        </p>

    </div>





    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">评论</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10">
                            safsadfsadfsadfsa
                        </div>
                        <div class="col-md-2">
                            2017-02-15
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <form class="content">
                <div class="form-group">
                    <label for="exampleInputEmail1">发布评论</label>
                    <textarea class="form-control" name="content" rows="" cols=""></textarea>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>


@endsection