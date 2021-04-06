<!DOCTYPE html>
<html>

<head>
    <title>Voluntario</title>
    <style type="text/css">
        #style {
            display: inline-block;
        }

        #orden {
            display: inline;
            background: ;
            width: 100%;
            padding: 5px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <div style="display: inline-block;">
        <h3>Voluntario: {{ $voluntarios->nombre }} {{ $voluntarios->apellido }}</h3>
        <p>Fecha de Registro: {{ $voluntarios->created_at->format('d-m-Y') }} </p>
    </div>

    <div style="display: inline-block; float: right;">
        <img width="70px" height="70px"
            src="http://localhost/laravel/public/img/cruz-roja-aragua.png"
            alt="Cruz Roja Aragua">
        <img width="70px" height="70px" src="http://localhost/laravel/public/img/direccion.png" alt="Dirección de Voluntariado">
    </div>

    <hr style=" background:#001ae68c; padding:1px;">
    <form style="padding-top: 40px;" method="post" action="">
        <div style="box-shadow: 0 0 10px;" id="fondo" class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table>
                <tr>
                    <td>Apellidos: {{ $voluntarios->apellido }}</td>
                    <td>Nombres: {{ $voluntarios->nombre }}</td>
                    <td>Edad: {{ $voluntarios->edad }} años</td>
                </tr>
                <tr>
                    <td>Cédula: {{ $voluntarios->nacionalidads->pluck('nombre')->implode(' - ') }} - {{ $voluntarios->cedula }}</td>
                    <td>Nacionalidad: {{ $voluntarios->nacionalidads->pluck('display_name')->implode(' - ') }}</td>
                    <td>Pasaporte: {{ $voluntarios->pasaporte }}</td>
                </tr>
                <tr>
                    <td>Fecha De Nacimiento: {{ $voluntarios->nacimiento }}</td>
                    <td>Grado de Instruccion: {{ $voluntarios->instruccions->nombre }}</td>
                    <td>Profesion: {{ $voluntarios->profesions->nombre }}</td>
                </tr>

                <tr>
                    <td>Ocupación: {{ $voluntarios->ocupacions->nombre }}</td>
                    <td>G. Sanguineo: {{ $voluntarios->sanguineos->nombre }}</td>
                    <td>Estado Cívil: {{ $voluntarios->civils->pluck('display_name')->implode(' - ') }}</td>
                </tr>

                <tr>
                    <td>Sexo: {{ $voluntarios->sexos->pluck('display_name')->implode(' - ') }}</td>
                    <td>Teléfono Móvil: {{ $voluntarios->tel_movil }}</td>
                    <td>Teléfono Fijo: {{ $voluntarios->tel_fijo }}</td>
                </tr>
                <tr>
                    <td>¿Ha Donado Sangre? {{ $voluntarios->donantes->pluck('nombre')->implode(' - ') }}</td>
                    <td>¿Pertenece a algún cuerpo de seguridad? {{ $voluntarios->seguridad }}</td>
                    <td>Alergias A: {{ $voluntarios->alergia }}</td>
                </tr>

                <tr>
                    <td>Tlf. Emergencia: {{ $voluntarios->tel_emergencia }}</td>
                    <td>Dirección de Trabajo: {{ $voluntarios->trabajo }}</td>
                    <td>Teléfono de Trabajo: {{ $voluntarios->tel_trabajo }}</td>
                </tr>

                <tr>
                    <td>Peso: {{ $voluntarios->peso }}</td>
                    <td>Altura: {{ $voluntarios->altura }}</td>
                    <td>Talla de Calzado: {{ $voluntarios->talla_calzado }}</td>
                </tr>

                <tr>
                    <td>Talla de Franela: {{ $voluntarios->talla_franela }}</td>
                    <td>Talla de Pantalón: {{ $voluntarios->talla_pantalon }}</td>
                    <td>¿Cómo Tuvo conocimiento del Voluntariado?: {{ $voluntarios->conocimiento }}</td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>¿Que labores ha realizado como voluntario?: {{ $voluntarios->labores }}</td>
                    <td>Correo Electrónico: {{ $voluntarios->email }}</td>
                </tr>

                <tr>
                    <td>¿Cuáles son sus hobbies e intereses?: {{ $voluntarios->hobbies }}</td>
                    <td>¿Qué es Para Ud. la Cruz Roja Venezuela?: {{ $voluntarios->cruz_roja }}</td>
                </tr>

                <tr>
                    <td>Tiempo libre que dispone para ejercer el voluntariado: {{$voluntarios->tiempo}}</td>
                    <td>¿Padece alguna enfermedad crónica?: {{ $voluntarios->cronica }}</td>
                </tr>
                <tr>
                    <td>¿Ha tenido experiencia como voluntario?</td>
                    <td>{{ $voluntarios->experiencia }}</td>
                </tr>
                <tr>
                    <td>¿Padece una Discapacidad?</td>
                    <td>{{ $voluntarios->discapacidad }}</td>
                </tr>
                <tr>
                    <td colspan="2">Dirección de Habitación: {{ $voluntarios->habitacion }}</td>
                </tr>
            </table>
        </div>


        <hr style=" background:#001ae68c; padding:1px;">
        <footer>
            <div style="text-align: center; margin-bottom:-50px; ">
                <h5>Principios Fundamentales del Movimiento de la Cruz Roja y de la Media Luna Roja</h4>
                <p>HUMANIDAD – IMPARCIALIDAD – NEUTRALIDAD – INDEPENDENCIA – VOLUNTARIADO – UNIDAD - UNIVERSALIDAD<p>
            </div>
        </footer>
    </form>
</body>

</html>