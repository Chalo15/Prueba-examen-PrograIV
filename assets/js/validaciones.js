

function validacion() {


  var id = document.forms["miformulario"]["Cedula"].value;
  var email = document.forms["miformulario"]["Email"].value;
  var name = document.forms["miformulario"]["Nombre"].value;
  var ape1=document.forms["miformulario"]["Apellido1"].value;
  var ape2=document.forms["miformulario"]["Apellido2"].value;
  var pasa=document.forms["miformulario"]["Id"].value;
  var select =document.forms["miformulario"]["select"].value;
  var tarj=document.forms["miformulario"]["Tarjeta"].value;
  var Fecha = document.forms["miformulario"]["Fechav"].value;
  var CCV = document.forms["miformulario"]["CCV"].value;
  var Clave = document.forms["miformulario"]["Clave"].value;

  var format = /^([0-9])*$/;
  var arroba = '@';
  var punto = '.';
  var letras = /^([a-zA-Z])*$/;
  

  if(id.length != 9 || !format.test(id) || !id.length) {
  errorcolor = document.getElementById("Cedula");
  errorcolor.style.borderColor="red";
  alert("Error: Introdujo un numero distinto de 9 digitos o hay letras en la cadena que digito en la casilla de la cedula");
  return false;
  }
  
  if(email.indexOf(arroba) == -1 || email.indexOf(punto) == -1 || email == "") {
  errorcolor = document.getElementById("Email");
  errorcolor.style.borderColor="red";
  alert("Error: La cadena que introdujo no tiene el caracter '@' o el caracter '.' en la casilla de la correo electronico");
  return false;
  }
  
  if(name == "" || !letras.test(name)) {
  errorcolor = document.getElementById("Nombre");
  errorcolor.style.borderColor="red";
  alert("Introdujo una cadena con numeros o caracteres en la casilla del nombre. Por favor introduzca solamente letras.");
  return false;
  }
  if(ape1 == "" || !letras.test(ape1)) {
    errorcolor = document.getElementById("Apellido1");
    errorcolor.style.borderColor="red";
    alert("Introdujo una cadena con numeros o caracteres en la casilla del apellido 1. Por favor introduzca solamente letras.");
    return false;
    }
  if(ape2 == "" || !letras.test(ape2)) {
      errorcolor = document.getElementById("Apellido2");
      errorcolor.style.borderColor="red";
      alert("Introdujo una cadena con numeros o caracteres en la casilla del apellido 2. Por favor introduzca solamente letras.");
      return false;
      }

      
    if ( isNaN(pasa) || pasa.length < 20) {
        errorcolor = document.getElementById("Id");
        errorcolor.style.borderColor="red";
        alert('Pasaporte no válido');
    return false;
      }
    
      if( select == null || select == 0 ) {
      errorcolor = document.getElementById("select1");
       errorcolor.style.borderColor="red";
        alert('No seleccionó un país');
        return false;
      }
     
      if( isNaN(tarj)) {
        errorcolor = document.getElementById("Tarjeta");
        errorcolor.style.borderColor="red";
        alert('Ingrese un numero de tarjeta');
        return false;
      }

      
      if( isNaN(Fecha)) {
        errorcolor = document.getElementById("Fechav");
        errorcolor.style.borderColor="red";
          alert('Ingrese la fecha de vencimiento');
          return false;
        }

        
        if(isNaN(CCV))   {
          errorcolor = document.getElementById("CCV");
        errorcolor.style.borderColor="red";
           alert("Numero de CCV invalido"); 
           return false;
        } 

        
        if( Clave.length<12 ) {
          errorcolor = document.getElementById("Clave");
          errorcolor.style.borderColor="red";
            alert('Clave muy corta, favor de ingresar una contraeña que tenga cómo mínimo 12 caracteres');
            return false;
          }  


  return true;



  
  }


