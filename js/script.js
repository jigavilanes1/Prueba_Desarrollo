
function GuardarUsuario() {
  let usuario = document.querySelector("#usuario").value;
  let password = document.querySelector("#password").value;

  let xhr = new XMLHttpRequest();

  xhr.open("POST", "Logica/Logica.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      window.alert("Usuario Creado");
    }
  };

  let data = JSON.stringify({
    usuario: usuario,
    password: password,
    operacion: "GuardarUsuario",
  });

  xhr.send(data);
  location.href = "index.php";
}

function Login() {
  let usuario = document.querySelector("#usuario").value;
  let password = document.querySelector("#password").value;

  let xhr = new XMLHttpRequest();

  xhr.open("POST", "Logica/Logica.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      if (this.responseText == "Correctamente") {
        window.location.href = "formulario.php";
      }
    }
  };

  let data = JSON.stringify({
    usuario: usuario,
    password: password,
    operacion: "Login",
  });

  xhr.send(data);
}
