<form id="form_short_url" method="POST">
    @csrf
    <div class="form-group mt-5">
        <input type="text" name="urlOrigin" class="form-control" id="inputURL" placeholder="Ingresa tu URL aquí" required>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Cortar URL</button>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</form>
