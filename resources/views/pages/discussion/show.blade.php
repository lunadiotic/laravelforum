@extends('layouts.app')

@section('content')
<div class="col-md-8">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
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
                <div style="font-size:130%" class="text-center">
                    <strong>{{ $discussion->title }}</strong>
                </div>
                {!! $discussion->content !!}
            </div>
        </div>
</div>
@endsection
