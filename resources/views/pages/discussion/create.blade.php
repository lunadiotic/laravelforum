@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card mb-3">
        <div class="card-header">Create Discussion</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form action="{{ route('discussion.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="">Discussion</label>
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content"></trix-editor>
                </div>
                <div class="form-group">
                    <select name="channel_id" id="channel_id" class="form-control">
                        @foreach (App\Channel::all() as $row)
                            <option value="{{ $row->id }}">{{ $row->title }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Post</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('libs/trix/trix.css') }}">
@endsection

@section('js')
<script src="{{ asset('libs/trix/trix.js') }}"></script>
@endsection
