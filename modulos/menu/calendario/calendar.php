<?php include_once '../lista/head.php';?>
<?php include_once '../lista/sidebar.php';?>



  
  <div class="content-wrapper" style="background-color:#DDDEDF" >
        <!-- /.box-body style="background-color:-->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box ">
                        <div class="box-header bg-aqua">
                            <h1 class="box-title">Nuevos Pedidos</h1>
                            <div class='pull-right'>
                                <a href="../lista/home.php" class='btn btn-danger fa fa-close'></a>
                            </div>
                        </div> 

                        
                        <div class="box-body">
                            <form class="form-horizontal" method='POST'>
                                <div class="box-body">
                                    <input hidden name="reload" value="0" type="text">
                                    <div class='col-md-6'>
                                        <div class="form-group">
                                            <label for="fecha_buscar" class="col-md-5 control-label">Buscar Fecha</label>
                                            <div class="col-md-10">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input value="" name="initial" id="fecha_actual" type="text" class="form-control pull-right" id="datepicker">
                                                    <span class="input-group-btn">
                                                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                                     </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form> 
                           <div id="calendar"></div>
                         </div>
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
        </div>
        <footer class="main-footer" style="background-color:#309FA2">
         <!-- #18faa8 #309FA2  -->
        <div class="pull-right hidden-xs">
            <b>Soluciones ######</b>
        </div>


        <strong>2020 -  <?php echo date('Y');?> &copy; Soluciones #####</strong> All Rights Reserved.
    </footer>
    


 


<!-- fullCalendar -->
<script src="../../../components/moment/moment.js"></script>
<script src="../../../components/fullcalendar/dist/fullcalendar.min.js"></script>
<script type="text/javascript" src="../../../components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="../../../components/datatables.net/js/jquery.dataTables.min.js"></script>

  <!-- fullCalendar -->
  <link rel="stylesheet" href="../../../components/fullcalendar/dist/fullcalendar.min.css"> -->
  <link rel="stylesheet" href="../../../components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <script src='../../../components/fullcalendar/dist/locale/es.js'></script> -->


  
<!-- Page specific script -->
<script>
    $(function () {
    $('#fecha_buscar').datepicker({
      autoclose: true
    })
    $('#fecha_actual').datepicker({
      autoclose: true
    })
  })
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'Hoy',
        month: 'Mes',
        week : 'Semana',
        day  : 'Diario'
      },
      dayClick:function(date,jsEvent){
        alert("valor seleccionado:"+date.format());
        $(this).css('background-color', 'red');
        (fecha_entrega).value=date.format();
        $("#modal-pedido").modal();
      },

      //Random default events
      events    : [
        {
         
          descripcion:"ya valio madres",
          title          : 'Pedidos Atrasados',
          start          : new Date(y, m, d - 1, 19, 0),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          url: 'pedidosRetrasados.php'
        },
        {
          title          : 'Pedidos de Hoy',
          start          : new Date(y, m, d, 13),
          // end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12', //yellow
          url: 'pedidosActuales.php'
        },
        {
          title          : 'Pedidos proximos',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a', //Success (green)
          url: 'pedidosProximos.php'
        },
      ],
      // evento modal
        eventClick:function(calEvent,jsEvent,view) {
        $('#tituloEvento').html(calEvent.title);
        $('#tituloEvento').html(calEvent.descripcion);
        $("#modal-pedido").modal();
      },
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
<div class="modal modal-info fade" id="modal-pedido">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <div class="descripcionRvento">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="tituloEvento">Pedido Realizado</h4>
             
                <form class="form-vertical" action="../logic/pedidosLogic.php" method='POST'>
                    <div class="box-body">

                        <div class="form-group col-md-6">
                            <label for="" class="col-md-12 control-label" >Fecha</label>
                            <div class="col-md-12">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input id="creado_por" value="<?php echo date('d/m/Y'); ?>" readonly placeholder="01/01/2018" name="fecha_registro" maxlength="10" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="col-md-12 control-label" >Creado por</label>
                            <div class="col-md-12">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input value="<?php echo $_SESSION["USUARIO"]["USUARIO"]?>" readonly name="creado_por" id="creado_por" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-12 control-label" >Nombre del Cliente</label>
                            <div class="col-md-12">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <button title="Nuevo Cliente" type="button" class="btn btn-success btn-xs fa fa-plus" data-toggle="modal" data-target="#add_new_customer"></button>
                                    </div>
                                    <select class="form-control select2" style="width:100%" name="id_cliente" id="id_cliente">
                                        <option selected value="0" >Seleccione el nombre del cliente</option>
                                        <option value="">CLIENTES VARIOS</option>
                                        <?php
//                                        foreach ($customers as $data) {
//                                            echo "<option value=\"" . $data['NAME'] . "\">" . $data['NAME'] . "</option>";
//                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="" class="col-md-12 control-label" >*Descripción del Pedido</label>
                            <div class="col-md-12">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa  fa-pencil"></i>
                                    </div>
                                    <textarea placeholder="lugar de Entrega." name="descripcion" id="descripcion" maxlength="500" type="text" class="form-control" oninput="validar('descripcion')" require></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="" class="col-md-12 control-label" >Lugar de Entrega</label>
                            <div class="col-md-12">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-book"></i>
                                    </div>
                                    <textarea placeholder="lugar de Entrega." name="direccion" id="direccion" maxlength="500" type="text" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                                        <label for="creation_date" class="col-md-12 control-label" >*Fecha de Entrega</label>
                                        <div class="col-md-12">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input  value="" readonly name="fecha_entrega" id="fecha_entrega" type="text" class="form-control" require>
                                            </div>
                                        </div>
                                    </div>
                        <div class="form-group col-md-4">
                                        <label for="" class="col-md-12 control-label" >Telefono</label>
                                        <div class="col-md-12">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input autocomplete="off" maxlength="50" placeholder="telefono" name="telefono" type="text" class="form-control">
                                            </div>
                                        </div>
                                </div>      
                        <div class="form-group col-md-4">
                                <label for="" class="col-md-4 control-label" >Cobro</label>
                                <div class="col-md-12">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <input autocomplete="off" maxlength="50" placeholder="0" name="cobro" id="cobro" type="text" class="form-control">
                                    </div>
                                </div>
                        </div>

                    </div>


                
              <div class="modal-footer">
              <i><label>Los campos con * son obligatorios.</label></i>
                <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-warning"  name='action' value='new' onclick="enviarValidar()">Guardar</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</body>
</html>


