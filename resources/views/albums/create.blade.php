@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{ action('AlbumController@store')  }}">
            {{ csrf_field() }}
        <div class="row">
            <div class="col-md-9">
                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label for="name">
                            Album Name
                        </label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        <label for="description">Album Description</label>
                        <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="crear nuevo">
            </div>
        </div>
        </form>
    </div>
@endsection