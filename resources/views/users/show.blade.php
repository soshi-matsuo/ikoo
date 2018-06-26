@extends('layouts.app')

@section('content')
    <div class="user-profile">
        
        <div class="name text-center">
            <h1>{{ $user->name }}</h1>
        </div>
        <div class="status text-center">
            <ul>
                <li>
                    <div class="">Gourmet</div>
                    @foreach ($plans as $plan)
                    <div id="" class="">
                        {{ $plan->where('type', 'gourmet') }}
                    </div>
                    @endforeach
                </li>
                <li>
                    <div class="">Scene</div>
                     @foreach ($plans as $plan)
                    <div id="" class="">
                         {{ $plan->where('type', 'scene') }}
                    </div>
                    @endforeach
                </li>
                <li>
                    <div class="">Activity</div>
                    @foreach ($plans as $plan)
                    <div id="" class="">
                        {{  $plan->where('type', 'act') }}
                    </div>
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
    @include('plans.plans', ['plans' => $plans])
    {!! $plans->render() !!}
@endsection