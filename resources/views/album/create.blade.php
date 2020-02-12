@extends('layouts.app')

@section('content')
    <div class="container">
        <h1><b>Create Album</b></h1>

        @include('includes.form_error')

        <div class="row "><!-- justify-content-center -->
            <div class="col-md-12">
                {!! Form::open(['method'=>'POST', 'action'=> 'AlbumsController@store', 'files'=>true]) !!}
                        <div class="form-group">
                            {!! Form::label('photo_id', 'Album cover:') !!}
                            {!! Form::file('photo_id', null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('album_name', 'Album name:') !!}
                            {!! Form::text('album_name', null, ['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('artist_name', 'Artist name:') !!}
                            {!! Form::text('artist_name', null, ['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('genre_id', 'Genre:') !!}
                            {!! Form::select('genre_id', [''=>'Choose Genre'] + $genres, null, ['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('release_date', 'Release date:') !!}
                            {!! Form::text('release_date', null, ['class'=>'form-control'])!!}

                            <script type="text/javascript">
                                $(function () {
                                    $('#release_date').datetimepicker();
                                });
                            </script>
                        </div>

                        <div class="form-group">
                            {!! Form::label('overview', 'Album overview:') !!}
                            {!! Form::textarea('overview', null, ['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group pull-right">
                            {!! Form::submit('Create Album', ['class'=>'btn btn-primary']) !!}
                        </div>


                {!! Form::close() !!}

            </div>
        </div>


@endsection
