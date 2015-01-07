<!DOCTYPE html>
<html>
<title>El Mangrullo Eventos</title>
<meta charset="utf-8">
<head>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/css/mstyle.css">
    <script src="<?php echo base_url() ?>bower_components/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>bower_components/moment/moment.js"></script>
    <script src="./bower_components/eonasdan-bootstrap-datetimepicker/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/locales/bootstrap-datetimepicker.es.js"></script>
</head>
<body>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>calendar">Calendario</a></li>
        <li><a href="<?php echo base_url() ?>events">Añadir evento</a></li>
        <li style="float:right"><a href="<?php echo base_url() ?>calendar/do_logout">Salir</a></li>
    </ol>

    <div class="row">
        <h1 class="text-center heading">Gestionar evento</h1>
        <hr>
        <?php echo form_open('events/update/'.$event->id)?>

        <div class="col-sm-8 col-sm-offset-2" style="height:75px;">
            <div class='col-md-6'>
                <div class="form-group">
                    <div class='input-group date' id='from'>
                        <input type='text' name="from" class="form-control" value="<?=$event->start_noformat?>" readonly/>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
                </div>
            </div>
            <div class='col-md-6'>
                <div class="form-group">
                    <div class='input-group date' id='to'>
                        <input type='text' name="to" class="form-control"  value="<?=$event->end_noformat?>" readonly/>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
                </div>
            </div>

            <!-- Nombre Padre-->
            <div class="form-group">
                <label for="name" class="col-sm-12 control-label">Nombre Padre</label>

                <div class="col-sm-12">
                    <input type="text" name="name_parent" class="form-control" id="name_parent" placeholder="Nombre" value="<?=$person->nombre_padre?>">
                </div>
            </div>

            <!-- Cel -->
            <div class='col-md-6 col-sm-6'>
                <div class="form-group">
                    <label for="cel" class="control-label">Celular</label>
                    <input type="tel" name="cel" class="form-control" id="cel" placeholder="Celular" value="<?=$person->cel?>">
                </div>
            </div>

            <!-- Tel -->
            <div class='col-md-6 col-sm-6'>
                <div class="form-group">
                    <label for="tel" class="control-label">Telefono</label>
                    <input type="tel" name="tel" class="form-control" id="tel" placeholder="Telefono" value="<?=$person->tel?>">
                </div>
            </div>

            <!-- Mail -->
            <div class='col-md-6'>
                <div class="form-group">
                    <label for="mail" class="control-label">Mail</label>
                    <input type="mail" name="mail" class="form-control" id="mail" placeholder="Mail" value="<?=$person->mail?>">
                </div>
            </div>

            <!-- Nombre -->
            <div class="form-group">
                <label for="name" class="col-sm-12 control-label">Nombre</label>

                <div class="col-sm-12">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" value="<?=$person->nombre?>">
                </div>
            </div>

            <!-- Edad -->
            <div class='col-md-6 col-xs-6'>
                <div class="form-group">
                    <label for="edad" class="control-label">Edad</label>
                    <input type="text" name="edad" class="form-control" id="edad" placeholder="Edad" value="<?=$person->edad?>">
                </div>
            </div>

            <!-- Sexo -->
            <div class='col-md-6 col-xs-6'>
                <div class="form-group">
                    <label class="control-label">Sexo</label>
<!--                    <select class="form-control" name="sexo">
                        <option value="M">M</option>
                        <option value="F">F</option>
                    </select>-->
                    <?php
                    $js = 'class="form-control"';
                    $options = array('M'  => 'M', 'F'    => 'F');
                    echo form_dropdown('sexo', $options, $person->sexo, $js);
                    ?>
                </div>
            </div>

            <!--                 <div class="form-group">
                                <label for="url" class="col-sm-12 control-label">Enlace al evento</label>
                                <div class="col-sm-12">
                                    <input type="url" name="url" class="form-control" id="url" placeholder="Introduce una url o no :)">
                                </div>
                            </div> -->

            <!-- Titulo -->
            <div class="form-group">
                <label for="title" class="col-sm-12 control-label">Título del evento</label>
                <div class="col-sm-12">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Introduce un título" value="<?=$event->title?>">
                </div>
            </div>

            <!-- Tipo de evento -->
            <div class="form-group">
                <label class="col-sm-12 control-label">Tipo de evento</label>

                <div class="col-sm-12">
<!--                    <select class="form-control" name="class">
                        <option value="event-info">Cumpleaños</option>
                        <option value="event-success">Princesas</option>
                        <option value="event-inverse">Spa</option>
                        <option value="event-important">Fiesta</option>
                        <option value="event-warning">Warning</option>
                        <option value="event-special">Special</option>
                    </select>-->
                    <?php
                    $js = 'class="form-control"';
                    $options = array('event-info'=>'Cumpleaños', 'event-success'=> 'Spa');
                    echo form_dropdown('class', $options, $event->class, $js);
                    ?>
                </div>
            </div>

            <!-- mENU de evento -->
            <div class="form-group">
                <label class="col-sm-12 control-label">Menu</label>

                <div class="col-sm-12">
<!--                    <select class="form-control" name="menu">
                        <option value="event-info">Lunch</option>
                        <option value="event-success">Asado</option>
                    </select>-->
                    <?php
                    $js = 'class="form-control"';
                    $options = array('event-info'=>'Lunch', 'event-success'=> 'Asado');
                    echo form_dropdown('menu', $options, $event->menu, $js);
                    ?>
                </div>
            </div>

            <!-- Cantidad Adultos -->
            <div class='col-md-6 col-xs-6'>
                <div class="form-group">
                    <label for="mail" class="control-label">Cantidad adultos</label>
                    <input type="text" name="cant_adultos" class="form-control" id="cant_adultos"
                           placeholder="Cantidad adultos" value="<?=$event->cant_adultos?>">
                </div>
            </div>


            <!-- Cantidad Chicos -->
            <div class='col-md-6 col-xs-6'>
                <div class="form-group">
                    <label for="mail" class="control-label">Cantidad chicos</label>
                    <input type="text" name="cant_chicos" class="form-control" id="cant_chicos"
                           placeholder="Cantidad chicos" value="<?=$event->cant_chicos?>">
                </div>
            </div>

            <div class="form-group">
                <label for="body" class="col-sm-12 control-label">Evento</label>

                <div class="col-sm-12">
                    <textarea id="body" name="description_event" class="form-control" rows="3"
                              placeholder="Introduce información y contrataciones adicionales"><?=$event->description?></textarea>
                </div>
            </div>
            <div class="clearfix">
                <input style="margin:10px 0 0 0" type="button" id="btnDelete" class="pull-left btn btn-danger" value="Eliminar evento">

                <input style="margin-top: 10px" type="submit" id="btnEdit" class="pull-right btn btn-success" value="Modificar evento">
            </div>
        </div>
    </div>
    <?php echo form_close() ?>
</div>
<script type="text/javascript">
    $(function () {

        $('#from').datetimepicker();
        $('#to').datetimepicker();

        $('#btnDelete').bind("click", function() {
            $.ajax({
                url : '<?=base_url()?>events/delete/<?=$event->id?>',
                type:'POST',
                success : function(data) {
                    window.location.href = '<?=base_url()?>calendar/';
                }
            });
        });

/*        $('#btnEdit').bind("click", function() {
            $.ajax({
                url : '<?=base_url()?>events/update/<?=$event->id?>',
                type:'POST',
                success : function(data) {
                    window.location.href = '<?=base_url()?>calendar/';
                }
            });
        });*/

    });
</script>
</div>
</body>
</html>