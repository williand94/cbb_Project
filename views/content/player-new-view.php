<!-- Content here-->
<div class="container-fluid">
    <form action="" class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-user"></i> &nbsp; Información básica</legend>
            <div class="container-fluid">
                <div class="row">
                    <!-- <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="cliente_dni" class="bmd-label-floating">DNI</label>
                            <input type="text" pattern="[0-9-]{1,27}" class="form-control" name="cliente_dni_reg" id="cliente_dni" maxlength="27">
                        </div>
                    </div> -->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Categoría</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Benjamín</option>
                                <option>Alevín</option>
                                <option>Infantil</option>
                                <option>Cadete</option>
                                <option>Juvenil</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="cliente_nombre" class="bmd-label-floating">Nombre</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="cliente_nombre_reg" id="cliente_nombre" maxlength="40">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="cliente_apellido" class="bmd-label-floating">Apellido</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="cliente_apellido_reg" id="cliente_apellido" maxlength="40">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="player_document" class="bmd-label-floating">Documento</label>
                            <input type="number" pattern="[0-9()+]{8,20}" class="form-control" name="player_document_reg" id="player_document" maxlength="20">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="player_age" class="bmd-label-floating">Edad</label>
                            <input type="number" pattern="[0-9()+]{8,20}" class="form-control" name="player_age_reg" id="player_age" maxlength="20">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="player_direccion" class="bmd-label-floating">Dirección</label>
                            <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="player_direccion_reg" id="player_direccion" maxlength="150">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="cliente_telefono" class="bmd-label-floating">Teléfono</label>
                            <input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="cliente_telefono_reg" id="cliente_telefono" maxlength="20">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Sexo</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Masculino</option>
                                <option>Femenino</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="player_height" class="bmd-label-floating">Estatura</label>
                            <input type="number" pattern="[0-9()+]{8,20}" step="any" class="form-control" name="player_height_reg" id="player_height" maxlength="20">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="player_weight" class="bmd-label-floating">Peso</label>
                            <input type="number" pattern="[0-9()+]{8,20}" step="any" class="form-control" name="player_weight_reg" id="player_weight" maxlength="20">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="player_date" class="bmd-label-floating">Fecha de Ingreso</label>
                            <input type="number" pattern="[0-9()+]{8,20}" step="any" class="form-control" name="player_date_reg" id="player_date" maxlength="20">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <br><br><br>
        <p class="text-center" style="margin-top: 40px;">
            <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
            &nbsp; &nbsp;
            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
        </p>
    </form>
</div>