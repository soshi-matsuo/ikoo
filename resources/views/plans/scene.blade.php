@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-10">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('act') ? 'active' : '' }}"><a href="{{ route('act.get') }}">Act</a></li>
                <li role="presentation" class="{{ Request::is('scene') ? 'active' : '' }}"><a href="{{ route('scene.get') }}">Scene</a></li>
                <li role="presentation" class="{{ Request::is('gourmet') ? 'active' : '' }}"><a href="{{ route('gourmet.get') }}">Gourmet</a></li>
            </ul>
            @if (count($plans) > 0)
            @foreach($plans as $plan)
                <div class="form-group">
                    @if($plan->type=='scene')
                    @include('plans.plans', ['plans' => $plans])
                    @endif
                    
                </div>
            @endforeach
            @endif
        </div>
    </div>
@endsection