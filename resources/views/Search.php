<div class="card-header">
    <form class="form-inline" method="GET" action="{{ route('criteria.index') }}">
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" name="keyword" placeholder="Search by name..." value="{{ request()->get('keyword') }}">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Search</button>
    </form>
    <a href="{{ route('criteria.add') }}" class="btn btn-primary">Add</a>
</div>