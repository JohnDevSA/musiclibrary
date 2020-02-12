@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>View Album</h1>
        <a href="{{ url('/albums')}}"><i class="fas fa-backspace"></i></a>&nbsp;

        @include('includes.form_error')

        <div class="container">

            <div class="row">
                <div class="col-md-5" >
                    <img class="mg-fluid" style="width: 425px;height: 303px;background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;" src="{{$album->photo ? App\Photo::getImageFullPath($album->photo->file) : '/images/No_image_available.svg'}}"
                         alt="{{$album->album_name}} album cover">
                </div>
                <div class="col-md-7">
                    <h1>Album : {{$album->album_name}}</h1>
                    <table>
                        <tr>
                            <td>Album</td>
                            <td>: {{$album->album_name}}</td>
                        </tr>
                        <tr>
                            <td>Artist name</td>
                            <td>: {{$album->artist_name}}</td>
                        </tr>
                    </table>
                    <p>Album overview : {{$album->overview ? $album->overview : 'Album overview not available for now'}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" >
                    <h2>Album reviews ({{count($reviews)}})</h2>
                    <div class="accordion" id="accordionExample">
{{--                        {{ var_dump($reviews) }}--}}
                        @foreach($reviews as $review)
                            <div class="card">
                                <div class="card-header" id="heading{{$review->id}}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                            {{$review->user->name.'  #'.$review->id}}  <h6>submitted {{$review->created_at->diffForHumans()}}</h6>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse " aria-labelledby="heading{{$review->id}}"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        {{$review->review}}
                                    </div>
                                </div>
                            </div>

                       @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                @if(Auth::check())
                    <!-- Review Form -->
                        <div class="well">
                            <h4>Submit your review here:</h4>
                            {!! Form::open(['method'=>'POST', 'action'=> 'AlbumsReviewController@store']) !!}
                            <input type="hidden" name="album_id" value="{{$album->id}}">
                            <div class="form-group">
                                {!! Form::label('review', 'Review:') !!}
                                {!! Form::textarea('review', null, ['class'=>'form-control','rows'=>3])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Submit review', ['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    @endif
                </div>
            </div>

        </div>


    </div>
@endsection
