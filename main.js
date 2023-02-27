function ocultar() {
  document.getElementById(`modal1`). setAttribute('class', 'modal_oculto');
  document.getElementById(`modal2`). setAttribute('class', 'modal_oculto');
  
    document.getElementById("sec_1").setAttribute("class", "seccion_null")
    document.getElementById("sec_2").setAttribute("class", "seccion_null")
    document.getElementById("sec_3").setAttribute("class", "seccion_null")
    
}
function mostrar(x) {
    ocultar()
    document.getElementById(`sec_${x}`).setAttribute("class", "seccion_active")
    
}
function cerrarModal(n, x){
  mostrar(x)
  let Modal=document.getElementById(`modal${n}`)
  Modal.setAttribute('class', 'modal_oculto')
}
let btnModal=document.getElementById('abrirModal')
function abrirModal(n, c){
  ocultar(n)
  let Modal=document.getElementById(`modal${n}`)
  Modal.setAttribute('class', 'seccion_active');
  if(c>0){
    function capture(id){
      return document.getElementById(id)
    }
    function cambVal(id, value){
      let item=capture(id);
      item.value=value;
    }
    cambVal("nom_rep", capture(`nom_E${c}`).innerHTML);
    cambVal("ape_rep", capture(`ape_E${c}`).innerHTML)  
    cambVal("nit_rep", capture(`cc_E${c}`).innerHTML)
    cambVal("dir_rep", capture(`dir_E${c}`).innerHTML)
    cambVal("ciu_rep", capture(`ciu_E${c}`).innerHTML)
    cambVal("tel_rep", capture(`tel_E${c}`).innerHTML)
    cambVal("cup_rep", capture(`cup_E${c}`).innerHTML)
    cambVal("cupD_rep", capture(`cup_E${c}`).innerHTML)
    cambVal("id_rep", capture(`id_E${c}`).innerHTML)
    cambVal("dia_rep", capture(`dia_E${c}`).innerHTML)

  } 
}
let cedu= document.getElementById('cedu')
let select= document.getElementById('seleNom');
select.addEventListener('change', (e)=>{
      let nit =  e.target.selectedOptions[0].getAttribute("data-nit")
    document.getElementById("cedu").value = nit;
});

