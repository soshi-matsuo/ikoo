@extends('layouts.app')

@section('content')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>ikoo</h1>
                <h2>そうだ、神奈川にいこう。</h2>
                @if (!Auth::check())
                    <a href="#" class="btn btn-success btn-lg">Signup</a>
                    <a href="#" class="btn btn-success btn-lg">Login</a>
                @endif
                    <a href="#" class="btn btn-success btn-lg">View</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!--アイコンを入れる-->
@endsection

