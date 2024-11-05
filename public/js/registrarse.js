function enviarFormulario() {
    
    var correo = document.getElementById('correo').value;
    var password = document.getElementById('password').value;
  var usuario=[];

  if( correo=="" || password=="" ){
    alert("Datos vacios, ingresar datos por favor")
    
    }else{
      
    var usuario = {
      
     correo:correo,
      password:password
      
    };
    
  
  }
  guardarDatos(usuario);
  console.log(usuario);
  

   

  }



  function guardarDatos(usuario){
    $.ajax({
      url:"http://localhost/codeigRentas/index.php/Registro/saveData",

  data:usuario,
  type:"POST",
  dataType:"json",
  success:function(data, status, xhr){
  console.log(data);
  if(data.status == "success"){
    location.href= "imag.html"
  }else{
    alert(data.message);
  }
  },
  error:function(xhr, status, error){
  
  },
    })
  }