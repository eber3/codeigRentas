function guardar() {
    var imagen=$("#imagen").val();
    var ubicacion=$("#ubicacion").val();
    var precio=$("#precio").val();
    var caracteristicas=$("#caracteristicas").val();
    



    //JSON->
    var registro = {
        imagen:imagen,
        ubicacion:ubicacion,
        precio:precio,
        caracteristicas:caracteristicas
      
    
        }
        enviarDatos(registro);
    }
    
    
    //AJAX->
    $("#registroForm").on("submit", function(e){
    
        e.preventDefault();
        var formData = new FormData(this);
    
        $.ajax({
             data:formData,
             url:"http://localhost/codeigRentas/index.php/Formulario_imag/Registro",
             type:"post",
             contentType:false,
             processData:false,
            success:function(data, status, xhr){
             console.log(data);
             var mensaje = "Datos subidos correctamente";
             alert(mensaje);
             location.reload();
             if(data.status == "success"){
                
                location.reload();
             }
            },
            error:function(xhr, status, error){
                console.log("Error:", status, error);
                alert("ocurrio un error al registrar los datos.");
            }
        });
    });

