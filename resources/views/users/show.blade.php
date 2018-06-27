@extends('layouts.app')

@section('content')
    <div class="user-profile">
        
        <div class="name text-center">
            <h1>{{ $user->name }}</h1>
        </div>
        <div class="status text-center">
            <ul>
                <li>
                    <div class="text-center">Gourmet</div>
                    @foreach ($plans as $plan)
                    <div id="" class="">
                        @if ($plan->type=='gourmet')
                                 @include('plans.plans', ['plans' => $plans])
                                 <!--{!! $plans->render() !!}-->
                        @endif
                    </div>
                    @endforeach
                </li>
                <br>
                <li>
                    <div class="text-center">Scene</div>
                     @foreach ($plans as $plan)
                    <div id="" class="">
                        @if ($plan->type=='scene')
                                 @include('plans.plans', ['plans' => $plans])
                                 <!--{!! $plans->render() !!}-->
                        @endif  
                    </div>
                    @endforeach
                </li>
                <br>
                <li>
                    <div class="text-center">Activity</div>
                    @foreach ($plans as $plan)
                    <div id="" class="">
                        @if ($plan->type=='act')
                                 @include('plans.plans', ['plans' => $plans])
                                 <!--{!! $plans->render() !!}-->
                        @endif
                    </div>
                    @endforeach
                </li>
                
            </ul>
        </div>
    </div>
   
@endsection