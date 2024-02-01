
<div class="col-sm-6">
    <label for="name"  class="form-label">Nombre</label><br>
    <input type="text" class="form-control" name="name" value="{{ isset($usuarios->name)?$usuarios->name:old('name') }}" id="name">
</div>

<div class="col-sm-6">
    <label for="email" class="form-label">Email</label><br>
    <input type="text" class="form-control" name="email" value="{{ isset($usuarios->email)?$usuarios->email:old('email') }}" id="email">
</div>

<div class="col-sm-12">
    <label for="password" class="form-label">Password</label><br>
    <input type="password" class="form-control" name="password" value="" id="password" required>
    <br>
</div>


<div class="col-sm-4  mx-auto">
    <input type="submit" class="btn btn-block btn-success" value=" {{ $modo }} Datos">
</div>

<div class="col-sm-4  mx-auto">
    <a class="btn btn-block btn-danger" href="{{ url('usuarios') }}">Cancelar</a>
</div>


