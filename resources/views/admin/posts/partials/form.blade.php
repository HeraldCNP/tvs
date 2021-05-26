<div class="form-group">
    {!! Form::label('name', 'Titulo:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Titulo del Post']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Slug del Post', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoria:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach
    @error('tags')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>
    @error('status')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{ Storage::url($post->image->url) }}" alt="">7
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2020/01/03/11/44/freedom-4737919_960_720.jpg" alt="">
            @endisset
        </div>

    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('file', 'Imagen del Post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
        @error('file')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad laboriosam debitis cumque, odio error repellendus ipsam eos. Tenetur modi molestiae voluptatibus iusto quisquam! Quidem blanditiis quae quasi molestias placeat quos?</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('iframe', 'Iframe') !!}
    {!! Form::textarea('iframe', null, ['class' => 'form-control', 'rows' => '2']) !!}
    @error('iframe')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    @error('extract')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('body', 'Cuerpo del Post') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
