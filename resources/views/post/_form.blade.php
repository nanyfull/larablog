<div class="form-group">
    <label >Titulo</label>
    <input class="form-control" type="text" id="title" name="title" value="{{old('title',$post->title)}}" required">
</div>
<div class="form-group">
    <label >Categoria</label>
    <select class="form-control"  id="category" name="category" required>
        @foreach($categories as $category)
        <option value="{{$category->id}}" {{$post->category_id==$category->id? 'selected': ''}}>{{$category->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label >Publicado</label>
    <select class="form-control"  id="category" name="posted" required>
        <option value="yes" {{$post->posted=='yes'? 'selected': ''}} >Si</option>
        <option value="not" {{$post->posted=='not'? 'selected': ''}}>No</option>
    </select>
</div>
<div class="form-group">
    <label  for="description">Contenido</label>
    <textarea class="form-control"name="content">{{ old('content',$post->content) }}</textarea>
</div>

<div class="form-group">
    <label  for="file">Imagen</label>
    <input type="file" class="form-control" name="file" id="file" {{$created ? 'required' : ''}}"  accept="image/*">
</div>
