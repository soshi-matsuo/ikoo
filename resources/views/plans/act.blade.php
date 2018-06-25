@extends('layouts.app')

@section('content')
    <div class="row">
       
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('scene') ? 'active' : ''}}"></li><a href="{{ route('scene.get') }}">Scene</a></li>
                
                
            </ul>
            @include('plans.plan',['plans' => '$plans'])
        </div>
    </div>
@endsection