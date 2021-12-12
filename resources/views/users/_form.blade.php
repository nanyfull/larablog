<div class="form-group">
    <label >Nombre</label>
    <input class="form-control" type="text" id="name" name="name" value="{{old('name',$user->name)}}" required">
</div>
<div class="form-group">
    <label >NickName</label>
    <input class="form-control" type="text" id="nickName" name="nickName" value="{{old('nickName',$user->nickName)}}" required">
</div>
<div class="form-group">
    <label >Correo</label>
    <input class="form-control" type="email" id="email" name="email" value="{{old('email',$user->email)}}" required">
</div>
@if ($pasw)
<div class="form-group">
    <label >Contraseña</label>
    <input class="form-control" type="password" id="password" name="password" value="{{old('password',$user->password)}}" required">
</div>
<div class="form-group">
    <label >Confirmar contraseña</label>
    <input class="form-control" type="password" id="password-confirm" name="password-confirm" value="" required">
</div>

@endif
