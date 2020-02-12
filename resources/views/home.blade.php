@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class='title m-b-md'>
                            <a href="{{ url('/albums') }}" ><i class="fas fa-record-vinyl fa-6x"></i></a>
{{--                            <a href="{{ url('/albums') }}"><i class="fas fa-users fa-5x"></i></a>--}}
                        </div>
                        <div class='title m-b-md'>
{{--                            <a href="{{ url('/albums') }}" ><i class="fas fa-record-vinyl fa-6x"></i></a>--}}
                            <a href="{{ url('/albums') }}"><i class="fas fa-users fa-5x"></i></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
