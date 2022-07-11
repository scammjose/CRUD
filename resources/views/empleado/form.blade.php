<h1>{{$modo}} empleado</h1>
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre">
<br>

<label for="Apellido paterno">Apellido Paterno</label>
<input type="text" name="Apellido_paterno" value="{{isset($empleado->Apellido_paterno)?$empleado->Apellido_paterno:''}}" id="Apellido_paterno">
<br>

<label for="Apellido materno">Apellido Materno</label>
<input type="text" name="Apellido_materno" value="{{isset($empleado->Apellido_materno)?$empleado->Apellido_materno:''}}" id="Apellido_materno">
<br>

<label for="Correo">Correo</label>
<input type="email" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:''}}" id="Correo">
<br>

<label for="Foto">Foto</label>
@if(isset($empleado->Foto))
<img src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>
<input type="submit" value="{{$modo}}">

<a href="{{url('empleado/')}}">Regresar</a>
<br>