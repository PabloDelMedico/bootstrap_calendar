<!DOCTYPE html>
<html>
<head>
    <title>Crear un nuevo evento</title>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/css/mstyle.css">
        <script src="<?php echo base_url() ?>bower_components/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>bower_components/moment/moment.js"></script>
        <script src="./bower_components/eonasdan-bootstrap-datetimepicker/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"></script> 
        <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/locales/bootstrap-datetimepicker.es.js"></script>
    </head>
</head>
<body>
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>calendar">Calendario</a></li>
            <li><a href="<?php echo base_url() ?>events">Añadir evento</a></li>
        </ol>

        <div class="row">
            <h1 class="text-center heading">Añadir un nuevo evento</h1>
            <hr>
            <?php echo form_open(base_url('events/save')) ?>

            <div class="col-sm-8 col-sm-offset-2" style="height:75px;">
                <div class='col-md-6'>
                    <div class="form-group">
                        <div class='input-group date' id='from'>
                            <input type='text' name="from" class="form-control" readonly />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class="form-group">
                        <div class='input-group date' id='to'>
                            <input type='text' name="to" class="form-control" readonly />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>
                </div>

                <!-- Titulo -->
                <div class="form-group">
                    <label for="title" class="col-sm-12 control-label">Título</label>
                    <div class="col-sm-12">
                        <input type="text" name="title" class="form-control" id="title" placeholder="Introduce un título">
                    </div>
                </div>

                <!-- Nombre -->
                <div class="form-group">
                    <label for="name" class="col-sm-12 control-label">Nombre</label>
                    <div class="col-sm-12">
                        <input type="text" name="name" class="form-control" id="url" placeholder="Nombre">
                    </div>
                </div>

                <!-- Cel -->
                <div class='col-md-6'>
                    <div class="form-group">
                        <label for="tel" class="control-label">Celular</label>
                        <input type="tel" name="cel" class="form-control" id="url" placeholder="Celular">
                    </div>
                </div>

                <!-- Tel -->
                <div class='col-md-6'>
                    <div class="form-group">
                        <label for="tel" class="control-label">Telefono</label>
                        <input type="tel" name="tel" class="form-control" id="url" placeholder="Telefono">
                    </div>
                </div>

                <!-- Mail -->
                <div class='col-md-6'>
                    <div class="form-group">
                        <label for="url" class="control-label">Mail</label>
                        <input type="mail" name="mail" class="form-control" id="url" placeholder="Mail">
                    </div>
                </div>

                <!-- Edad -->
                <div class='col-md-6'>
                    <div class="form-group">
                        <label for="url" class="control-label">Edad</label>
                        <input type="mail" name="mail" class="form-control" id="url" placeholder="Mail">
                    </div>
                </div>

                <!-- Sexo -->
                <div class='col-md-6'>
                    <div class="form-group">
                        <label class="control-label">Sexo</label>
                        <select class="form-control" name="sexo">
                            <option value="M">M</option>
                            <option value="F">F</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="url" class="col-sm-12 control-label">Enlace al evento</label>
                    <div class="col-sm-12">
                        <input type="url" name="url" class="form-control" id="url" placeholder="Introduce una url o no :)">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12 control-label">Tipo de evento</label>
                    <div class="col-sm-12">
                        <select class="form-control" name="class">
                            <option value="event-info">Info</option>
                            <option value="event-success">Success</option>
                            <option value="event-inverse">Inverse</option>
                            <option value="event-important">Important</option>
                            <option value="event-warning">Warning</option>
                            <option value="event-special">Special</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="body" class="col-sm-12 control-label">Evento</label>
                    <div class="col-sm-12">
                        <textarea id="body" name="event" class="form-control" rows="3"></textarea>
                    </div>
                </div>

                <input style="margin-top: 10px" type="submit" class="pull-right btn btn-success" value="Gurdar evento">
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
    <script type="text/javascript">
    $(function () {
        $('#from').datetimepicker({
            language: 'es',
            minDate: new Date()
        });
        $('#to').datetimepicker({
            language: 'es',
            minDate: new Date()
        });

    });
    </script>
</div>
</body>
</html>