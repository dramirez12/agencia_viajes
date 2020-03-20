function add_new_clientes(combo){
    if ( name.value == '') {
        errorTag.value = 'Por favor ingrese el nombre del cliente.';
        $('#errorBox').modal('show');
        return false;
    } else {
        $.ajax({
           sync: false,
           type: "POST",
           url: "../../../modules/denia/logic/clientesLogic.php",
           data: "action=new_customer&identity="+identity.value+"&rtn="+rtn.value+"&gender="+gender.value+"&name="+c_name.value+"&telephone1="+telephone1.value+"&address="+address.value,
           success: function(data){
               $(combo).html(data);
           }
        });
        nombres.value = '';
        telephone1.value = '';
    }
    $('#add_new_customer').modal('hide');

}
function add_new_clientes2(combo){
    if ( nombre.value == '') {
        errorTag.value = 'Por favor ingrese el nombre del cliente.';
        $('#errorBox').modal('show');
        return false;
    } else {
        $.ajax({
           sync: false,
           type: "POST",
           url: "../../../modules/denia/logic/clienteslogic.php",
           data: "action=new_clientes2&identidad="+identidad.value+"&genero="+genero.value+"&nombre="+nombre.value+"&apellido="+apellido.value+"&telefono1="+telefono1.value+"&telefono2="+telefono2.value+"&direccion="+direccion.value+"&email="+email.value+"&fecha_registro="+fecha_registro.value,
           success: function(data){
               $(combo).html(data);
           }
        });
        nombre.value = '';
    }
    $('#clientes').modal('hide');

}
function add_new_customer2(combo){
    if ( c_name.value == '') {
        errorTag.value = 'Por favor ingrese el nombre del cliente.';
        $('#errorBox').modal('show');
        return false;
    } else if ( telephone1.value == '') {
        errorTag.value = 'Por favor ingrese el no. de teléfono del cliente.';
        $('#errorBox').modal('show');
        return false;
    } else {
        $.ajax({
           sync: false,
           type: "POST",
           url: "../../../modules/denia/logic/clienteslogic.php",
           data: "action=new_customer2&identity="+identity.value+"&rtn="+rtn.value+"&gender="+gender.value+"&name="+c_name.value+"&telephone1="+telephone1.value+"&address="+address.value,
           success: function(data){
               $(combo).html(data);
           }
        });
        c_name.value = '';
        telephone1.value = '';
    }
    $('#add_new_customer').modal('hide');

}