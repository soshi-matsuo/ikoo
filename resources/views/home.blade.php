@extends('layouts.app')

@section('content')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>Whatever you want</h1>
                
                    <a href="{{ route('gourmet.get') }}" class="btn btn-success btn-lg">グルメ</a>
                    <a href="{{ route('scene.get') }}" class="btn btn-success btn-lg">景色</a>
                    <a href="{{ route('act.get') }}" class="btn btn-success btn-lg">アクティビティ</a>
                
               
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!--アイコンを入れる-->
@endsection