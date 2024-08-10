<form id="form_short_url" style="box-sizing: border-box;">
    @csrf
    <div class="form-group mt-5 d-flex">
        <div class="col-10">
            <input type="text" name="urlOrigin" class="form-control" id="input_url" placeholder="Ingresa tu URL aquí" required>
            <input type="hidden" id="user_id" value="{{auth()->user()->id ?? ''}}">
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-primary w-100">Cortar URL</button>
        </div>
        <span class="invalid-feedback" id="span_url">
            <strong>Ingresar una URL valida.</strong>
        </span>
    </div>


</form>
<div class="mt-4 row" style="gut">
    <h2>URL generada</h2>
    <div class="d-flex">
        <div class="col-10 p-0">
            <input type="text" class="form-control" id="short-url" disabled value="{{env('APP_URL').env('APP_PORT').env('APP_ENDPOINT')}}">
        </div>
        <span class="col-2 p-0">
            <button class="btn btn-success w-100" id="copy-button">Copiar</button>
        </span>
    </div>
</div>
