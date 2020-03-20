<?php /*Empiesa el codigo*/?>
<form action="form_clientes2.php" method="post" enctype="application/x-www-form-urlencoded">
<div class="content-wrapper" style="background-color:#DDDEDF">
    <section class="content">


<?php ?>
<?php  ?>


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
                   <label for="" class="col-md-4 control-label" >Primer Nombre</label>
                   <div class="col-md-12">
                       <div class="input-group date">
                           <div class="input-group-addon">
                               <i class="fa fa-user"></i>
                           </div>
                           <input required="" id="Primer_Nombre"  placeholder="" name="Primer_Nombre" maxlength="10" type="" class="form-control">
                       </div>
                   </div>
               </div>
               <?php /*..............*/?>
                    <div class="form-group col-md-12">
                        <label for="" class="col-md-4 control-label" >Segundo Nombre</label>
                        <div class="col-md-12">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input required="" id="Segundo_Nombre"  placeholder="" name="Segundo_Nombre" maxlength="10" type="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <?php /*..............*/?>
             <div class="form-group col-md-12">
                 <label for="" class="col-md-4 control-label" >Primer Apellido</label>
                 <div class="col-md-12">
                     <div class="input-group date">
                         <div class="input-group-addon">
                             <i class="fa   fa-send-o"></i>
                         </div>
                         <input required="" placeholder="" name="Primer_Apellido" id="Primer_Apellido" maxlength="20" type="" class="form-control">
                     </div>
                 </div>
             </div>
             <?php /*..............*/?>
             <div class="form-group col-md-12">
                 <label for="" class="col-md-4 control-label" >Segundo Apellido</label>
                 <div class="col-md-12">
                     <div class="input-group date">
                         <div class="input-group-addon">
                             <i class="fa   fa-send-o"></i>
                         </div>
                         <input required="" placeholder="" name="Segundo_Apellido" id="Segundo_Apellido" maxlength="20" type="" class="form-control">
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
             <div class="form-group col-md-12">
                 <label for="" class="col-md-4 control-label" >Numero de identificacion:</label>
                 <div class="col-md-12">
                     <div class="input-group date">
                         <div class="input-group-addon">
                             <i class="fa   fa-send-o"></i>
                         </div>
                         <input required="" id="numero_id"  placeholder="" name="numero_id" maxlength="10" type="" class="form-control">
                     </div>
                 </div>
             </div> 
             <?php /*..............*/?>
              <div class="form-group col-md-12">
                    <label for="" class="col-md-12 control-label" >Tipo de Identificacion</label>
                    <div class="col-md-12">
                        <div class="input-group date">
                             <div class="input-group-addon">
                                <i class="fa fa-tags"></i>
                             </div>
                               <select name="tipo_identificacion" id="tipo_identificacion" onchange="if (this.value=='value2') document.getElementById('fecha_vencimiento').hidden=false" >
                                <option value="value1" >Identidad</option> 
                                <option value="value2" >Pasaporte </option>
                                
                               
                                
                                </select>    
                                  
                            </div>
                        </div>
                 </div>
            </div>
            <?php /*.........................*/?>

             <div class="form-group col-md-12">
                 <label for="" class="col-md-4 control-label" >Fecha de Vencimiento:</label>
                 <div class="col-md-12">
                     <div class="input-group date">
                         <div class="input-group-addon">
                             <i class="fa   fa-send-o"></i>
                         </div>
                         <input required="" placeholder="" name="fecha_vencimiento" id="fecha_vencimiento" maxlength="20" type="" hidden class="form-control">
                     </div>
                 </div>
             </div> 
             
             <?php /*..............*/?>
             
           <div class="form-group col-md-12">
                 <label for="" class="col-md-4 control-label" >Tipo de Cliente:</label>
                 <div class="col-md-12">
                     <div class="input-group date">
                         <div class="input-group-addon">
                             <i class="fa   fa-send-o"></i>
                         </div>
                         <input required="" placeholder="" name="tipo_cliente" id="tipo_cliente" maxlength="20" type="" class="form-control">
                     </div>
                 </div>
             </div> 
             
             <?php /*..............*/?>
             <div class="form-group col-md-12">
                 <label for="" class="col-md-4 control-label" >Contacto de:</label>
                 <div class="col-md-12">
                     <div class="input-group date">
                         <div class="input-group-addon">
                             <i class="fa   fa-send-o"></i>
                         </div>
                         <input required="" placeholder="" name="contacto_de" id="contacto_de" maxlength="20" type="" class="form-control">
                     </div>
                 </div>
             </div> 
             <?php /*..............*/?>
            
            
             <?php /*Boton para mandar informacion*/?>
    <input type='text' hidden='true' name='action' value='new'>
        <div class="box-footer bg-gray-light">
            <i><label>Todos Los Campos Son obligatorios.</label></i>
            <div  class='pull-right'>
            <input type="submit" value="Siguiente" href="form_clientes2.php">
            
            </div>
        </div>
                </form>
            </div>
        </div>
    </div>
</section>
 </div>

</form>