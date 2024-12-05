

function obtenerDatos(){
    $.ajax({
        url:"http://localhost/codeigRentas/index.php/Formulario_imag/getData",
        dataType:"json",
        type:"post",
        data:{},
        success:function(data, status, xhr){
            
            console.log(data);
            llenarTabla(data.users);
        },
        error:function(xhr,status,error){}
       });
    }
    
    obtenerDatos();
    
    function llenarTabla(arrayData) {
        $.each(arrayData, function(i, item) {
            if (item.imagen) {
                var $tr = $("<tr>").append(
                    $("<td>").text(item.id),
                    $("<td>").html('<img src="http://localhost/codeigRentas/' + item.imagen + '" class="imagen-tabla">'),
                    $("<td>").text(item.ubicacion),
                    $("<td>").text(item.precio),
                    $("<td>").text(item.caracteristicas)


                );
                $("#cuerpoT").append($tr);
            } else {
                console.error("item.imagen is undefined for item: ", item);
            }
        });
    }
    

    
   