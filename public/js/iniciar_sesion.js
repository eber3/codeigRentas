function acceder() {
  var correo = $("#correo").val();
  var password = $("#password").val();

  if (correo == "" || password == "") {
      alert("Datos vacíos, ingrese datos por favor");
      return;
  } else {
      var datosAccs = {
          correo: correo,
          password: password
      };
      
      
      enviar_acceso(datosAccs);
  }
}

function enviar_acceso(datosAccs) {
  console.log(datosAccs);
  $.ajax({
      url: "http://localhost/codeigRentas/index.php/IniciarSesion/saveData",
      data: datosAccs,
      type: "POST",
      dataType: "json",
      success: function(data, status, xhr) {
          console.log(data);
          if (data.status == "success") {
          location.href ="Casas";
              
          } else {
            
              alert(data.message);
          }
      },
      error: function(xhr, status, error) {
          console.error("Error en la solicitud AJAX", error);
      }
  });
}
