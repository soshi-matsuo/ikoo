@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
            @include('user_follow.follow_button', ['user' => $user])
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('act') ? 'active' : '' }}"><a href="{{ route('act.get') }}">Act</a></li>
                <li role="presentation" class="{{ Request::is('scene') ? 'active' : '' }}"><a href="{{ route('scene.get') }}">Scene</a></li>
                <li role="presentation" class="{{ Request::is('gourmet') ? 'active' : '' }}"><a href="{{ route('gourmet.get') }}">Gourmet</a></li>
            </ul>
            <!--@if (Auth::user()->id == $user->id)-->
            <!--      {!! Form::open(['route' => 'microposts.store']) !!}-->
            <!--          <div class="form-group">-->
            <!--              {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}-->
                          
<<<<<<<<< saved version

=========
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif
            @if (count($microposts) > 0)
                @include('microposts.microposts', ['microposts' => $microposts])
            @endif
>>>>>>>>> local version
        </div>
    </div>
@endsection