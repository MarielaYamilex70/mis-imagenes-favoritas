<div class="card ">
    <div class="card-body">
        
        <div class="formGroup">
            <label for="labelFondoform">TTITULO</label>
            <input name="title" type="text" id="title" class="form-control" value="@if(!empty($image->title)) {{$image->title}} @endif">
            @error('title')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
           
        <div class="formGroup">
            <label for="labelFondoForm">IMAGEN</label>
            @if(!empty($image->url)) {{$image->url}} @endif
            <input type="file" name="file" id="" accept="image/*" class="form-control">
            <br>
            @error('file')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <input value="Enviar Datos" type="submit" class="btn btn-outline-primary" />
    </div>
</div>