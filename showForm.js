function showContent() {
    element = document.getElementById("finalizar");
    check = document.getElementById("check");
    if (check.checked) {
        element.style.display='block';
    }
    else {
        element.style.display='none';
    }


}

function showPackage(){
    document.getElementById('agregarPaquete').style.display='block';
  }

  function hidePackage(){
    document.getElementById('agregarPaquete').style.display='none';
  }