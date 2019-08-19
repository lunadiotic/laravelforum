@extends('layouts.app')

@section('content')
<div class="col-md-8">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('discussion.create') }}" class="btn btn-primary">Add Discussion</a>
    </div>
    @foreach ($discussions as $discussion)
        <div class="card mb-3">
            <div class="card-header">{{ $discussion->title }}</div>

            <div class="card-body">
                {!! $discussion->content !!}
            </div>
        </div>
    @endforeach
</div>
@endsection
