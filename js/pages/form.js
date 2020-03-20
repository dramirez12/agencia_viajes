// jquery extend function
$.extend(
    {
        redirectPost: function(location, args)
        {
            var form = $('<form></form>');
            form.attr("method", "post");
            form.attr("action", location);
    
            $.each( args, function( key, value ) {
                var field = $('<input></input>');
    
                field.attr("type", "hidden");
                field.attr("name", key);
                field.attr("value", value);
    
                form.append(field);
            });
            $(form).appendTo('body').submit();
        }
    });
    
    function goto(url) {
        var table = document.getElementsByTagName("table")[0];
        var tbody = table.getElementsByTagName("tbody")[0];
        var www = document.getElementById(url).value;
    
        tbody.onclick = function (e) {
            e = e || window.event;
            var data = [];
            var target = e.srcElement || e.target;
            while (target && target.nodeName !== "TR") {
                target = target.parentNode;
            }
            if (target) {
                var cells = target.getElementsByTagName("td");
                location.href = www + cells[0].innerHTML;
            }
        };
    }
    
    function gotoNewTab(url) {
        var table = document.getElementsByTagName("table")[0];
        var tbody = table.getElementsByTagName("tbody")[0];
        var www = document.getElementById(url).value;
    
        tbody.onclick = function (e) {
            e = e || window.event;
            var data = [];
            var target = e.srcElement || e.target;
            while (target && target.nodeName !== "TR") {
                target = target.parentNode;
            }
            if (target) {
                var cells = target.getElementsByTagName("td");
                window.open(www + cells[0].innerHTML,'_blank');
            }
        };
    }
    
    function deleteBox() {
        var table = document.getElementsByTagName("table")[0];
        var tbody = table.getElementsByTagName("tbody")[0];
    
        tbody.onclick = function (e) {
            e = e || window.event;
            var data = [];
            var target = e.srcElement || e.target;
            while (target && target.nodeName !== "TR") {
                target = target.parentNode;
            }
            if (target) {
                var cells = target.getElementsByTagName("td");
                recordId.value = cells[0].innerHTML;
                warningTag.value = "¿Seguro que desea eliminar el registro No. "+recordId.value+"?";
                document.getElementById('warningButton').setAttribute('onclick','return deleteRecord();')
                $('#warningBox').modal('show');
            }
        };
    
    }
    
    function deleteRecord() {
        var www = document.getElementById('delete').value;
        var id = document.getElementById('recordId').value;
        location.href = www + id;
    }
    
    function add_new_type(combo,description,urlMw,myModal){
        if ( description.value == '') {
            errorTag.value = 'Por favor ingrese la descripción.';
            $('#errorBox').modal('show');
            return false;
        } else {
            $.ajax({
               type: "POST",
               url: urlMw,
               data: "action=new_type&description="+description.value,
               success: function(data){
                   $(combo).html(data);
               }
            });
            description.value = '';
        }
        $(myModal).modal('hide');
    }
    
    function add_new_type2(combo,description,urlMw,myModal){
        if ( description.value == '') {
            errorTag.value = 'Por favor ingrese la descripción.';
            $('#errorBox').modal('show');
            return false;
        } else {
            $.ajax({
               type: "POST",
               url: urlMw,
               data: "action=new_type2&description="+description.value,
               success: function(data){
                   $(combo).html(data);
               }
            });
            description.value = '';
        }
        $(myModal).modal('hide');
    }
    
    function add_new_customer(combo){
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
               data: "action=new_customer&identity="+identity.value+"&rtn="+rtn.value+"&gender="+gender.value+"&name="+c_name.value+"&telephone1="+telephone1.value+"&address="+address.value,
               success: function(data){
                   $(combo).html(data);
               }
            });
            c_name.value = '';
            telephone1.value = '';
        }
        $('#add_new_customer').modal('hide');
    
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
    
    function add_new_provider(combo){
        if ( c_name.value == '') {
            errorTag.value = 'Por favor ingrese el nombre del proveedor.';
            $('#errorBox').modal('show');
            return false;
        } else if ( telephone1.value == '') {
            errorTag.value = 'Por favor ingrese el no. de teléfono del proveedor.';
            $('#errorBox').modal('show');
            return false;
        } else {
            $.ajax({
               type: "POST",
               url: "../../../modules/providers/middleware/providersMw.php",
               data: "action=new_provider&identity="+identity.value+"&rtn="+rtn.value+"&gender="+gender.value+"&name="+c_name.value+"&telephone1="+telephone1.value+"&address="+address.value,
               success: function(data){
                   $(combo).html(data);
               }
            });
            c_name.value = '';
            telephone1.value = '';
        }
        $('#add_new_provider').modal('hide');
    
    }
    
    function add_new_provider2(combo){
        if ( c_name.value == '') {
            errorTag.value = 'Por favor ingrese el nombre del proveedor.';
            $('#errorBox').modal('show');
            return false;
        } else if ( telephone1.value == '') {
            errorTag.value = 'Por favor ingrese el no. de teléfono del proveedor.';
            $('#errorBox').modal('show');
            return false;
        } else {
            $.ajax({
               type: "POST",
               url: "../../../modules/providers/middleware/providersMw.php",
               data: "action=new_provider2&identity="+identity.value+"&rtn="+rtn.value+"&gender="+gender.value+"&name="+c_name.value+"&telephone1="+telephone1.value+"&address="+address.value,
               success: function(data){
                   $(combo).html(data);
               }
            });
            c_name.value = '';
            telephone1.value = '';
        }
        $('#add_new_provider').modal('hide');
    
    }
    
    function check_description() {
        if (document.getElementsByName("description")[0].value == '') {
            errorTag.value = 'Por favor ingrese la descripción.';
            $('#errorBox').modal('show');
            return false;
        }
    }
    
    function mayusculas(text) {
            text.value = text.value.toUpperCase().trim();
            return true;
    }
    
    function minusculas(text) {
            text.value = text.value.toLowerCase().trim();
            return true;
    }
    
    function decimal(number) {
        if (number.value == '' || isNaN(parseFloat(number.value.replace(/,/g, '')))) {
            number.value = (0).toMoney();
            return false;
        } else {
            number.value = (Math.abs(parseFloat(number.value.replace(/,/g, '')))).toMoney();
            return true;
        }
    }
    
    function entero_miles(number){
        if (number.value == '' || isNaN(parseFloat(number.value.replace(/,/g, '')))) {
            number.value = 0;
        } else {
            number.value = (Math.abs(parseFloat(number.value.replace(/,/g, ''))));
        }
    }
    
    Number.prototype.toMoney = function(decimals, decimal_sep, thousands_sep)
    {
       var n = isNaN(this) ? 0 : this,
       c = isNaN(decimals) ? 2 : Math.abs(decimals), //if decimal is zero we must take it, it means user does not want to show any decimal
       d = decimal_sep || '.', //if no decimal separator is passed we use the dot as default decimal separator (we MUST use a decimal separator)
    
       /*
       according to [https://stackoverflow.com/questions/411352/how-best-to-determine-if-an-argument-is-not-sent-to-the-javascript-function]
       the fastest way to check for not defined parameter is to use typeof value === 'undefined'
       rather than doing value === undefined.
       */
       t = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep, //if you don't want to use a thousands separator you can pass empty string as thousands_sep value
    
       sign = (n < 0) ? '-' : '',
    
       //extracting the absolute value of the integer part of the number and converting to string
       i = parseInt(n = Math.abs(n).toFixed(c)) + '',
    
       j = ((j = i.length) > 3) ? j % 3 : 0;
       return sign + (j ? i.substr(0, j) + t : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : '');
    }
    
    function getChildren(id,table,select){
        $.ajax({
           type: "POST",
           url: "../middleware/getChildrenMw.php",
           data: "id="+id+"&table="+table,
           success: function(data){
               $(select).html(data);
           }
        });
    }
    
    function entero_simple(text) {
      text.value = text.value.replace(/([^0-9])/gi,"").trim();
      return true;
    }
    
    //allows numbers and slashes
    function presion_arterial(text) {
      text.value = text.value.replace(/([^0-9/])/gi,"").trim();
      return true;
    }
    
    //allows only numbers and spaces
    function tarjeta_credito(text) {
      text.value = text.value.replace(/([^0-9 ])/gi,"").trim();
      return true;
    }
    
    function telefono(text) {
      text.value = text.value.replace(/([^0-9 ()+])/gi,"").trim();
      return true;
    }
    
    // this function validates numbers(0-9), spaces and scores (-)
    function cuenta_bancaria(text) {
      text.value = text.value.replace(/([^0-9 -])/gi,"").trim();
      return true;
    }
    
    function check_grados(text) {
        text.value = text.value.replace(/([^0-9DFL])/gi,"").trim();
        if(isNaN(text.value)){
            // is not a number, just DF
         }else{
             if (text.value < 1 || text.value > 360) {
                 errorTag.value = 'Por favor ingrese un valor entre 1 y 360 grados.';
                 $('#errorBox').modal('show');
                 text.value = "";
                 return false;
             } else {
                 text.value = text.value + "°";
                 return true;
             }
         }
    
    }
    
    function check_escala(text) {
        text.value = text.value.replace(/([^0-9-])/gi,"").trim();
        if (text.value < -10 || text.value > 10) {
            errorTag.value = 'Por favor ingrese un valor entre -10 y 10.';
            $('#errorBox').modal('show');
            text.value = "";
            return false;
        } else {
            return true;
        }
    }
    
    function set_avatar(input) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();
    
           reader.onload = function (e) {
               $('#avatar')
                   .attr('src', e.target.result)
                   .width(150)
                   .height(150);
           };
    
           reader.readAsDataURL(input.files[0]);
       }
    }
    