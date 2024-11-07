function acceder() {

    var correo = $("#correo").val();
    var password = $("#password").val();

    
    if(correo=="" || password==""){
    alert("Datos vacios, ingresar datos por favor");
    }else{
        var datosAccs = {

            correo:correo,
             password: password,
           };
    }
    enviar_acceso(datosAccs);
  console.log(datosAccs);
  
  }
  function enviar_acceso(datosAccs){
    console.log(datosAccs);
$.ajax({
  url:"http://localhost/codeigRentas/index.php/IniciarSesion/saveData",

  data:datosAccs,
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
  

  
  