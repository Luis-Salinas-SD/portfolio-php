console.log(window.location.href);

// Mensaje que se muestra con los accesos incorrectos
function msmFailed() {
  Swal.fire({
    position: "top-end",
    icon: "error",
    title: "Accesos Incorrectos",
    showConfirmButton: false,
    timer: 1500,
  });

  setTimeout(() => {
    window.location.href = "../views/login.php";
  }, 1550);
}

// Mensaje que se muestra con los accesos incorrectos
function msmSuccess() {
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "Producto Eliminado",
    showConfirmButton: false,
    timer: 1500,
  });

  setTimeout(() => {
    window.location.href = "#";
  }, 1550);
}

