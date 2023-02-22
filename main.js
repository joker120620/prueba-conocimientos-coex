function ocultar() {
    document.getElementById("sec_1").setAttribute("class", "seccion_null")
    document.getElementById("sec_2").setAttribute("class", "seccion_null")
    document.getElementById("sec_3").setAttribute("class", "seccion_null")
    
}
function mostrar(n) {
    ocultar()
    document.getElementById(`sec_${n}`).setAttribute("class", "seccion_active")
    
}