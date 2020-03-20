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