<?php /*Empiesa el codigo*/
print_r($_POST);
?>
<form action="insertar_clientes.php" method="post" enctype="application/x-www-form-urlencoded">
<div class="content-wrapper" style="background-color:#DDDEDF">
    <section class="content">


<?php ?>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-5">
            <div class="box box-info">
            <div class="box-header">
                
                <h3 class="box-title">Ingresar Cliente</h3>

                <div class='pull-right'>
                <a href="mantenimiento.php" class='btn btn-success fa fa-arrow-left'></a>
                <a href="../../6-Adonis-home/list/home.php" class='btn btn-danger fa fa-close'></a></div></a>
                </div>





       <form class="" action="" method=''>
           <div class="box-body">

           <?php /* Etiqueta y caja te texto para cada dato*/?>
               <div class="form-group col-md-12">
                   <label for="" class="col-md-4 control-label" >Telefono</label>
                   <div class="col-md-12">
                       <div class="input-group date">
                           <div class="input-group-addon">
                               <i class="fa fa-user"></i>
                           </div>
                           <input required="" id="telefono"  placeholder="" name="telefono" maxlength="10" type="" class="form-control">
                       </div>
                   </div>
               </div>
               <?php /*..............*/?>
                    <div class="form-group col-md-12">
                        <label for="" class="col-md-4 control-label" >Direccion</label>
                        <div class="col-md-12">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input required="" id="direccion"  placeholder="" name="direccion" maxlength="10" type="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <?php /*..............*/?>
             <div class="form-group col-md-12">
                 <label for="" class="col-md-4 control-label" >Descripcion: </label>
                 <div class="col-md-12">
                     <div class="input-group date">
                         <div class="input-group-addon">
                             <i class="fa   fa-send-o"></i>
                         </div>
                         <input required="" placeholder="" name="descripcion" id="descripcion" maxlength="20" type="" class="form-control">
                     </div>
                 </div>
             </div>
             <?php /*..............*/?>
             <div class="form-group col-md-12">
                 <label for="" class="col-md-4 control-label" >Enfermedades: </label>
                 <div class="col-md-12">
                     <div class="input-group date">
                         <div class="input-group-addon">
                             <i class="fa   fa-send-o"></i>
                         </div>
                         <input required="" placeholder="" name="enfermedad" id="enfermedad" maxlength="20" type="" class="form-control">
                     </div>
                 </div>
             </div>
             <?php /*..............*/?>
             <div class="form-group col-md-12">
                 <label for="" class="col-md-4 control-label" >Correo:</label>
                 <div class="col-md-12">
                     <div class="input-group date">
                         <div class="input-group-addon">
                             <i class="fa  fa-unlock-alt"></i>
                         </div>
                         <input required="" placeholder="" name="correo" id="correo" maxlength="20" type="" class="form-control">
                     </div>
                 </div>
             </div>
             <?php /*..............*/?>
             <div class="form-group col-md-12">
                 <label for="inputError" class="col-md-8 control-label" >Sexo:</label>
                 <div class="col-md-12">
                     <div class="input-group date">
                         <div class="input-group-addon">
                             <i class="fa  fa-unlock-alt"></i>
                         </div>
                         <input required="" placeholder="" name="sexo" id="sexo" maxlength="20" type="" class="form-control">
                     </div>
                 </div>
             </div>
             <?php /*..............*/?>
             <div class="form-group col-md-12">
                 <label for="" class="col-md-4 control-label" >Nacionalidad</label>
                 <div class="col-md-12">
                     <div class="input-group date">
                         <div class="input-group-addon">
                             <i class="fa   fa-send-o"></i>
                         </div>
                         <input required="" placeholder="" name="nacionalidad" id="nacionalidad" maxlength="20" type="" class="form-control">
                     </div>
                 </div>
             </div> 
             <?php /*..............*/?>
        
            
            
            
             <?php /*Boton para mandar informacion*/?>
    <input type='text' hidden='true' name='action' value='new'>
        <div class="box-footer bg-gray-light">
            <i><label>Todos Los Campos Son obligatorios.</label></i>
            <div  class='pull-right'>
            <input type="submit" value="Siguiente" href="" name="Insert" id="Insert">
            
            </div>
        </div>
                </form>
            </div>
        </div>
    </div>
</section>
 </div>

</form>