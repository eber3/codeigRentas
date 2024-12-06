

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
                    $("<td>").text(item.caracteristicas),
                    $("<td>").html(
                        '<button type = "button" class= "btn btn-danger" onclick= "borrarProducto('+item.id+')">Eliminar</button>'),
                        $("<td>").html(
                            '<button type = "button" class= "btn btn-info" onclick= "ir('+item.id+')">Rentar</button>'),
                       
    


                );
                $("#cuerpoT").append($tr);
            } else {
                console.error("item.imagen is undefined for item: ", item);
            }
        });
    }


    function borrarProducto(id){
    
        $.ajax({
    
            url:"http://localhost/codeigRentas/index.php/Formulario_imag/deleteUser",
            dataType:"json",
            type:"post",
            data: {id:id},
            success:function(data, status, xhr){
                console.log(data);
               llenarTabla(data.users);
                
                location.reload();
        
            },
        
        
        });
        
    }

    function ir(id){
        location.href ="Comprobante";
    }
    

    
   