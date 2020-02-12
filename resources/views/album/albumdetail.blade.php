@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>View Album</h1>
        <a href="{{ url('/albums')}}"><i class="fas fa-backspace"></i></a>&nbsp;

        @include('includes.form_error')

        <div class="row "><!-- justify-content-center -->

                <div class="col-md-5 col-sm-5 col-xs-12">
                    <img height="22%" src="{{ App\Photo::getImageFullPath($album->photo->file) }}" alt="{{$album->album_name}} album cover">
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="">

                        <h1>Album : {{$album->album_name}}</h1>
                        <table>
                            <tr>
                                <td>Album </td>
                                <td>: {{$album->album_name}}</td>
                            </tr>
                            <tr>
                                <td>Artist name </td>
                                <td>: {{$album->artist_name}}</td>
                            </tr>
                        </table>
                            <div class="clear"></div>
                            <div class="clear"></div>
                        </div>
                        <div>
                            <h3>Album overview</h3>
                            <p>{{$album->overview}}</p>
                        </div>
                    </div>
                </div>

{{--            <div class="row">--}}
                <div class="col-md-5">Test</div>
                <div class="col-md-7">Test</div>
{{--            </div>--}}

        </div>
@endsection
