<form action="/orders/search" method="GET" class="form-inline">
    <div class="container">
        <div class="form-group mb-2">
            <input type="text" class="form-control" name="q" required value="{{ request('q') }}">
            <button type="submit" class="btn btn-primary btn-mb2">Ieškoti</button>
        </div>
    </div>
</form>
