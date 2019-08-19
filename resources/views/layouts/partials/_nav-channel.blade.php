<div class="col-md-4">
    <div class="card mb-3">
        <div class="card-header">Channel</div>
        <ul class="list-group list-group-flush">
            @foreach (App\Channel::all() as $row)
            <li class="list-group-item"><a href="#">{{ $row->title }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
