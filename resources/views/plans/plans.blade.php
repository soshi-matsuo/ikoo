@extends('layouts.app')

@section('content')
@foreach ($plans as $plan)
    <?php $user = $micropost->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ $plan->image_url }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('plans.show', $plan->name, ['id' => $plan->id]) !!}
            </div>
            <div>
                <p>{!! nl2br(e($plan->content)) !!}</p>
            </div>
            
            <div class="btn-toolbar">
               <div class="btn-group">
                @if (Auth::user()->is_wants($plan->id))
                    {!! Form::open(['route' => ['plan.unwant', $plan->id], 'method' => 'delete']) !!}
                    {!! Form::submit('unwant', ['class' => 'btn btn-warning btn-xs']) !!}
                    {!! Form::close() !!}
                @else
                    {!! Form::open(['route' => ['plan.want', $plan->id]]) !!}
                        {!! Form::submit('want to go', ['class' => "btn btn-primary btn-xs"]) !!}
                    {!! Form::close() !!}
                @endif
               </div>
            </div>
        </div>
    </li>
@endforeach

{!! $plans->render() !!}