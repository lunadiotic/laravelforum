@extends('layouts.app')

@section('content')
<div class="col-md-8">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    @foreach ($discussions as $discussion)
        <div class="card mb-3">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <img src="{{ asset('images/user.png') }}" alt="User">
                        <strong>{{ $discussion->author->name }}</strong>
                    </div>
                    <div>
                        <a href="{{ route('discussion.show', $discussion->slug) }}" class="btn btn-info btn-sm text-white">View</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <span style="font-size:130%"><strong>{{ $discussion->title }}</strong></span>
            </div>
        </div>
    @endforeach
    {!! $discussions->links() !!}
</div>
@endsection
