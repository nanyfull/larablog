<div class="form-group">
    <label >Nombre</label>
    <input class="form-control" type="text" id="name" name="name" value="{{old('name',$category->name)}}" required">
</div>
<div class="form-group">
    <label  for="description">Descripcion</label>
    <textarea class="form-control"name="description">{{ old('description',$category->description) }}</textarea>
</div>
