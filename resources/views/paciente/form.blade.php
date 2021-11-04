<<<<<<< HEAD
=======
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('js/validarDPI.js') }}"></script>

>>>>>>> 71a799d (update)
@csrf

<div class="container">
    <div class="row justify-content-around">
<<<<<<< HEAD
   <div class="col-md">
    <label for ="dpi"> DPI  </label>
    <input type="text" name="dpi" value="{{ isset ($response[0]['dpi'])?$response[0]['dpi']:''}}" id="dpi">
    <br>
    <label for ="primerNombre"> Primer Nombre  </label>
    <input type="text" name="primerNombre" value="{{ isset ($response[0]['primerNombre'])?$response[0]['primerNombre']:''}}" id="primerNombre">
    <br>
    <label for ="segundoNombre"> Segundo Nombre </label>
    <input type="text" name="segundoNombre" value="{{ isset ($response[0]['segundoNombre'])?$response[0]['segundoNombre']:''}}" id="segundoNombre">
    <br>
    <label for ="tercerNombre"> Tercer Nombre </label>
    <input type="text" name="tercerNombre" value="{{ isset ($response[0]['tercerNombre'])?$response[0]['tercerNombre']:''}}" id="tercerNombre">
    <br>
    <label for ="primerApellido"> Primer Apellido  </label>
    <input type="text" name="primerApellido" value="{{ isset ($response[0]['primerApellido'])?$response[0]['primerApellido']:''}}" id="primerApellido">
    <br>
    <label for= "segundoApellido"> Segundo Apellido </label>
    <input type="text" name="segundoApellido" value="{{ isset ($response[0]['segundoApellido'])?$response[0]['segundoApellido']:''}}" id="segundoApellido">
    <br>
    <label for ="apellidoCasada"> Apellido de Casada </label>
    <input type="text" name="apellidoCasada" value="{{ isset ($response[0]['apellidoCasada'])?$response[0]['apellidoCasada']:''}}" id="apellidoCasada">
    <br>
    <label for ="sexo"> Sexo </label>
    <input type="text" name="sexo" value="{{ isset ($response[0]['sexo'])?$response[0]['sexo']:''}}" id="sexo">
    <br>
    <label for ="estadoCivil"> Estado Civil </label>
    <input type="text" name="estadoCivil" value="{{ isset ($response[0]['estadoCivil'])?$response[0]['estadoCivil']:''}}" id="estadoCivil">
    <br>
    <label for ="direccion"> Direccion </label>
    <input type="text" name="direccion" value="{{isset ($response[0]['direccion'])?$response[0]['direccion']:''}}" id="direccion">
    <br>
    <label for ="telefono"> Telefono </label>
    <input type="text" name="telefono" value="{{ isset ($response[0]['telefono'])?$response[0]['telefono']:''}}" id="telefono">
    <br>
   </div>

   <div class="col-md">

    <label for= "fechaNacimiento"> Fecha de Nacimiento </label>
    <input type="date" name="fechaNacimiento" value="{{isset ($response[0]['fechaNacimiento'])?$response[0]['fechaNacimiento']:''}}" id="fechaNacimiento">
    <br>
    <label for= "COVID19Positivo"> Ha tenido Covid </label>
    <input type="text" name="COVID19Positivo" value="{{isset ($response[0]['COVID19Positivo'])?$response[0]['COVID19Positivo']:''}}" id="COVID19Positivo">
    <br>
    <label for= "fechaContagio"> Fecha de Contagio </label>
    <input type="date" name="fechaContagio" value="{{isset ($response[0]['fechaContagio'])?$response[0]['fechaContagio']:''}}" id="fechaContagio">
    <br>
    <label for ="tipoVacuna"> Tipo de Vacuna </label>
    <input type="text" name="tipoVacuna" value="{{isset ($response[0]['tipoVacuna'])?$response[0]['tipoVacuna']:''}}" id="tipoVacuna">
    <br>
    <label for= "fechaDosis1"> Fecha de Primera Dosis </label>
    <input type="date" name="fechaDosis1" value="{{isset ($response[0]['fechaDosis1'])?$response[0]['fechaDosis1']:''}}" id="fechaDosis1">
    <br>
    <label for= "fechaDosis2"> Fecha de Segunda Dosis </label>
    <input type="date" name="fechaDosis2" value="{{isset ($response[0]['fechaDosis2'])?$response[0]['fechaDosis2']:''}}" id="fechaDosis2">
    <br>
   <label for ="lugarDeAplicacion"> lugar De Aplicacion de Vacunación </label>
    <input type="text" name="lugarDeAplicacion" value="{{isset ($response[0]['lugarDeAplicacion'])?$response[0]['lugarDeAplicacion']:''}}" id="lugarDeAplicacion">
    <br>
   </div>
</div>
</div>
<br>
<div class="form-group">
    <button type="submit" class="btn btn-primary btn-block">
=======
        <div class="col-md">
            <label for ="dpi"> DPI  </label>
            <input  class="form-control" type="text" name="dpi" value="{{ isset ($response[0]['dpi'])?$response[0]['dpi']:''}}" id="dpi">
            <br>
            <label for ="primerNombre"> Primer Nombre  </label>
            <input class="form-control" type="text" name="primerNombre" value="{{ isset ($response[0]['primerNombre'])?$response[0]['primerNombre']:''}}" id="primerNombre">
            <br>
            <label for ="segundoNombre"> Segundo Nombre </label>
            <input class="form-control" type="text" name="segundoNombre" value="{{ isset ($response[0]['segundoNombre'])?$response[0]['segundoNombre']:''}}" id="segundoNombre">
            <br>
            <label for ="tercerNombre"> Tercer Nombre </label>
            <input class="form-control" type="text" name="tercerNombre" value="{{ isset ($response[0]['tercerNombre'])?$response[0]['tercerNombre']:''}}" id="tercerNombre">
            <br>
            <label for ="primerApellido"> Primer Apellido  </label>
            <input class="form-control" type="text" name="primerApellido" value="{{ isset ($response[0]['primerApellido'])?$response[0]['primerApellido']:''}}" id="primerApellido">
            <br>
            <label for= "segundoApellido"> Segundo Apellido </label>
            <input class="form-control" type="text" name="segundoApellido" value="{{ isset ($response[0]['segundoApellido'])?$response[0]['segundoApellido']:''}}" id="segundoApellido">
            <br>
            <label for ="apellidoCasada"> Apellido de Casada </label>
            <input class="form-control" type="text" name="apellidoCasada" value="{{ isset ($response[0]['apellidoCasada'])?$response[0]['apellidoCasada']:''}}" id="apellidoCasada">
            <br>
            <label for ="sexo"> Sexo </label>
            <input class="form-control" type="text" name="sexo" value="{{ isset ($response[0]['sexo'])?$response[0]['sexo']:''}}" id="sexo">
            <br>
            <label for ="estadoCivil"> Estado Civil </label>
            <input class="form-control" type="text" name="estadoCivil" value="{{ isset ($response[0]['estadoCivil'])?$response[0]['estadoCivil']:''}}" id="estadoCivil">
            <br>
            <label for ="direccion"> Direccion </label>
            <input class="form-control"  type="text" name="direccion" value="{{isset ($response[0]['direccion'])?$response[0]['direccion']:''}}" id="direccion">
            <br>
            <label for ="telefono"> Telefono </label>
            <input class="form-control" type="text" name="telefono" value="{{ isset ($response[0]['telefono'])?$response[0]['telefono']:''}}" id="telefono">
            <br>
        </div>

        <div class="col-md">
            <label for= "fechaNacimiento"> Fecha de Nacimiento </label>
            <input class="form-control" type="date" name="fechaNacimiento" value="{{isset ($response[0]['fechaNacimiento'])?$response[0]['fechaNacimiento']:''}}" id="fechaNacimiento">
            <br>
            <label for= "COVID19Positivo"> Ha tenido Covid </label>
            <input class="form-control" type="text" name="COVID19Positivo" value="{{isset ($response[0]['COVID19Positivo'])?$response[0]['COVID19Positivo']:''}}" id="COVID19Positivo">
            <br>
            <label for= "fechaContagio"> Fecha de Contagio </label>
            <input class="form-control" type="date" name="fechaContagio" value="{{isset ($response[0]['fechaContagio'])?$response[0]['fechaContagio']:''}}" id="fechaContagio">
            <br>
            <label for ="tipoVacuna"> Tipo de Vacuna </label>
            <input class="form-control" type="text" name="tipoVacuna" value="{{isset ($response[0]['tipoVacuna'])?$response[0]['tipoVacuna']:''}}" id="tipoVacuna">
            <br>
            <label for= "fechaDosis1"> Fecha de Primera Dosis </label>
            <input class="form-control" type="date" name="fechaDosis1" value="{{isset ($response[0]['fechaDosis1'])?$response[0]['fechaDosis1']:''}}" id="fechaDosis1">
            <br>
            <label for= "fechaDosis2"> Fecha de Segunda Dosis </label>
            <input class="form-control" type="date" name="fechaDosis2" value="{{isset ($response[0]['fechaDosis2'])?$response[0]['fechaDosis2']:''}}" id="fechaDosis2">
            <br>
            <label for ="lugarDeAplicacion"> lugar De Aplicacion de Vacunación </label>
            <input class="form-control" type="text" name="lugarDeAplicacion" value="{{isset ($response[0]['lugarDeAplicacion'])?$response[0]['lugarDeAplicacion']:''}}" id="lugarDeAplicacion">
            <br>
        </div>
    </div>
</div>
<br>
<div class="form-group">
    <button type="submit" class="btn btn-primary btn-block botonGuardar">
>>>>>>> 71a799d (update)
       Guardar datos</button>
   </div>
    <br>
