@foreach ($plans as $plan)
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
                @if (Auth::check())
                    @if (Auth::user()->is_wanting($plan->id))
                        {!! Form::open(['route' => ['user.unwant', $plan->id], 'method' => 'delete']) !!}
                        {!! Form::submit('unwant', ['class' => 'btn btn-warning btn-xs']) !!}
                        {!! Form::close() !!}
                    @else
                        {!! Form::open(['route' => ['user.want', $plan->id]]) !!}
                            {!! Form::submit('want to go', ['class' => "btn btn-primary btn-xs"]) !!}
                        {!! Form::close() !!}
                    @endif
                @endif
               </div>
            </div>
        </div>
    </li>
@endforeach

{!! $plans->render() !!}