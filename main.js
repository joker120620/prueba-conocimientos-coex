function ocultar() {
  let Modal=document.getElementById('modal')
  Modal.setAttribute('class', 'modal_oculto')
    document.getElementById("sec_1").setAttribute("class", "seccion_null")
    document.getElementById("sec_2").setAttribute("class", "seccion_null")
    document.getElementById("sec_3").setAttribute("class", "seccion_null")
    
}
function mostrar(n) {
    ocultar()
    document.getElementById(`sec_${n}`).setAttribute("class", "seccion_active")
    
}
function cerrarModal(n){
  mostrar(n)
  let Modal=document.getElementById('modal')
  Modal.setAttribute('class', 'modal_oculto')
}
let btnModal=document.getElementById('abrirModal')
function abrirModal(){
  ocultar()
  let Modal=document.getElementById('modal')
  Modal.setAttribute('class', 'seccion_active')
}

