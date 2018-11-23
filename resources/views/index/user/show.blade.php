@extends('index.layout._base')
@section('title', $user->name.'的个人中心')
@section('body')
    <div class="row">
        <div class="col-lg-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if($user->avatar)
                    <img class="thumbnail img-responsive" src="{{$user->avatar}}">
                    @else
                        <img class="thumbnail img-responsive" src="https://iocaffcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600">
                        @endif
                    <hr>
                    <h4><strong>个人简介</strong></h4>
                    <p>{{$user->intro}}</p>
                    <hr>
                    <h4><strong>注册于</strong></h4>
                    <p>{{$user->created_at->diffForHumans()}}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1>
                        {{$user->name}} <small><{{$user->email}}></small>
                    </h1>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#">Ta 的帖子</a></li>
                        <li><a href="#">Ta 的回复</a></li>
                    </ul>
                    @include('index.layout._user_post')
                </div>
            </div>
        </div>
    </div>
    @endsection