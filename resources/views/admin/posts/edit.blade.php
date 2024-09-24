@extends('layouts.app')

@section('content')
    <h1>Modifica il Post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="reading_time" class="form-label">Tempo di lettura</label>
            <input type="number" class="form-control" id="reading_time" name="reading_time"
                value="{{ old('reading_time', $post->reading_time) }}">
            @error('reading_time')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="text" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" name="content" rows="6">{{ old('content', $post->text) }}</textarea>
            @error('text')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
@endsection
