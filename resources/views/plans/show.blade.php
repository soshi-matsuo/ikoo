@extends('layouts.app')

@section('content')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>{{ $plan->name }}</h1>
                <h2>{{ $plan->content }}</h2>
                
                <img src="{{ $plan->image_url }}">

                <table border="1">
　                <tr>
　　                <td>予算</td>
　　                <td>0</td>
　                </tr>
　                <tr>
　　                <td>住所</td>
　　                <td>kanagawa</td>
　                </tr>
                </table>
                <!--location and budget will be added-->
                
                <!--description?? -->
                
                <!--routing will be set-->
                <div>
                    <p>口コミが入る？</p>
                </div>
                
                    <p>口コミ投稿</p>
                      <div class="form-group">
                          <form type="textarea"></form>
                          <!--{!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}-->
                      </div>
                  <!--{!! Form::close() !!}-->
            </div>
        </div>
    </div>
@endsection


