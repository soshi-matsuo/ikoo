@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-10">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('act') ? 'active' : '' }}"><a href="{{ route('act.get') }}">Act</a></li>
                <li role="presentation" class="{{ Request::is('scene') ? 'active' : '' }}"><a href="{{ route('scene.get') }}">Scene</a></li>
                <li role="presentation" class="{{ Request::is('gourmet') ? 'active' : '' }}"><a href="{{ route('gourmet.get') }}">Gourmet</a></li>
            </ul>
            <!--@if (Auth::user()->id == $user->id)-->
            <!--      {!! Form::open(['route' => 'microposts.store']) !!}-->
            <!--          <div class="form-group">-->
            <!--              {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}-->
                          
            <!--              {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}-->
            <!--          </div>-->
            <!--      {!! Form::close() !!}-->
            <!--@endif-->
            <!--@if (count($microposts) > 0)-->
            <!--    @include('microposts.microposts', ['microposts' => $microposts])-->
            <!--@endif-->
       
        </div>
    </div>
@endsection