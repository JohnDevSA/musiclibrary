@extends('layouts.app')

@section('content')
    <div class="container">
        @auth
            @if (Auth::user()->hasRole('admin'))
                        <div class="row pull-right">
                            <div class="col-md-12">
                                    <a href="{{ route('albums.create') }}" class="btn btn-primary">Add new album</a>
                            </div>
                        </div><br>
            @endif
        @endauth

        <div class="row "><!-- justify-content-center -->
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        {{--Album cover (image upload)--}}
                        {{--Album name--}}
                        {{--Artist--}}
                        <th scope="col">#</th>
                        <th scope="col">Album cover</th>
                        <th scope="col">Album name</th>
                        <th scope="col">Artist</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Release date</th>
                        @guest
                            <th scope="col"></th>
                        @endguest
                        @auth
                            @if (Auth::user()->hasRole('admin'))
                                <th scope="col"><span style="color: red!important;">[Administrator Options]</span></th>
                            @endif
                        @endauth
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($albums as $album)
                            <tr>
                                <th scope="row">{{$album->id}}</th>
                                <td><img height="50" src="{{App\Photo::getImageFullPath($album->photo->file)}}" alt="album cover"></td>
                                <td>{{ $album->album_name }}</td>
                                <td>{{ $album->artist_name }}</td>
                                <td>{{ $album->genre->name }}</td>
                                <td>{{ $album->release_date }}</td>
                                @guest
                                    <td>
                                        <a href="{{ url('/album/show/').'/'.$album->id}}"><i class="fas fa-eye"></i></a>
                                    </td>
                                @endguest
                                @auth
                                    @if (Auth::user()->hasRole('admin'))
                                        <td>
                                            <a href="{{ url('/album/show/').'/'.$album->id}}"><i class="fas fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="{{ url('/album/edit/').'/'.$album->id}}"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    @endif
                                @endauth

                            </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
