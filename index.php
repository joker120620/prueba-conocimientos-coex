<?php
include("./conec.php");
mysqli_select_db($conn, $database);
if(isset($_GET['s'])){
  $s=$_GET['s'];
  $consulta ="SELECT * FROM tbl_cliente WHERE nom_cli LIKE '%$s%' OR cc_cli LIKE '%$s%' OR ape_cli LIKE '%$s%'; " ;
}else {
  $consulta ="SELECT * FROM tbl_cliente"; 
}

$resultado = mysqli_query($conn, $consulta);
$sql = "SELECT COUNT(*) total FROM tbl_cliente";
$resultado2= mysqli_query($conn, $sql);
$resultado2 = mysqli_fetch_assoc($resultado2);
$sql2 = "SELECT COUNT(*) total FROM tbl_credito";
$resultado3= mysqli_query($conn, $sql2);
$resultado3 = mysqli_fetch_assoc($resultado3);

?>


<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PRUEBA</title>
</head>
<body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <header>
        <nav>
            <div class="barra_nav">
                <div class="items_nav">
                    <div class="title_nav">
                        <img class="img_nav" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png" alt="admin">
                        <h3 class="text_title_nav">admin</h3>
                    </div>
                
                    <ul class="list_nav">
                        <li id="item_nav1" class="item_nav_list" onclick="mostrar(1)"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                          </svg>Inicio</li>
                        <li id="item_nav2" class="item_nav_list" onclick="mostrar(2)"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                          </svg>Clientes</li>
                        <li id="item_nav3" class="item_nav_list" onclick="mostrar(3)"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                          </svg>Creditos</li>
                    </ul>
                
                </div>
                <div class="option_nav">
                    <a href="./index.html" class="btn_nav">Cerrar Sesión</a>
                </div>

                
            </div>
        </nav>
    </header>
    <main>
        <section id="sec_1" class="seccion_active">
            <h2 class="title_section">Inicio</h2>
            <div class="com_secc_active">
                <div class="div_sec_1_1">
                    <div class="con_div_sec_1">
                        <h3 class="title_sec_1">Créditos</h3>
                        <p class="text_sec_act"><?php
                        if($resultado3['total']==0){
                          echo "0";
                        }else{
                          echo $resultado3['total'];
                        }  ;?></p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <rect x="3" y="5" width="18" height="14" rx="3" />
                        <line x1="3" y1="10" x2="21" y2="10" />
                        <line x1="7" y1="15" x2="7.01" y2="15" />
                        <line x1="11" y1="15" x2="13" y2="15" />
                      </svg>
                </div>
                <div class="div_sec_1_2">
                    <h3 class="title_sec_1">Numero de clientes</h3>
                    <p class="text_sec_act"><?php
                        if($resultado2['total']==0){
                          echo "0";
                        }else{
                          echo $resultado2['total'];
                        };?></p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="7" r="4" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                      </svg>
                 </div>
            </div>
            

        </section>





        <section id="sec_2"class="seccion_null">
            <h2 class="title_section">Clientes</h2>
            <div class="com_secc_2">
                <div class="options_secc_2">
                  <form action="./buscarper.php" >
                    <input type="text" class="inp_buscar" placeholder="Nombre, NIT, o CC " name="itemBuscar" required> 
                    <button class="btn_nav" type="submit" ><svg class="btn_search" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
                  </form>
                    
                    <button onclick="abrirModal(1, 0)" class="btn_nav">Crear cliente</button>
                </div>
              
                <div class="cli_mostrar">
                  <table class="table_cli" cellspacing="0" cellpadding="0">
                    <tr class="fila_table">

    <th class="title_table">Nombres</th>
    <th class="title_table" >Apellidos</th>
    <th class="title_table">NIT/CC</th>
    <th class="title_table">Direccion</th>
    <th class="title_table">Ciudad</th>
    <th class="title_table">Telefono</th>
    <th class="title_table">Cupo Disponible</th>
    <th class="title_table">Estado</th> 
    <th class="title_table">Acciones</th>
    

  </tr>


                 <?php 
                 $cont=1;
                 while ($fila = mysqli_fetch_array($resultado)) {
                  ?>
                     <tr class="text_table">
    <td id="nom_E<?php echo $cont?>" class="text_table"><?php echo $fila['nom_cli'];?></td>
    <td id="ape_E<?php echo $cont?>" class="text_table"><?php echo $fila['ape_cli'];?></td>
    <td id="cc_E<?php echo $cont?>" class="text_table"><?php echo $fila['cc_cli'];?></td>
    <td id="dir_E<?php echo $cont?>" class="text_table"><?php echo $fila['dir_cli'];?></td>
    <td id="ciu_E<?php echo $cont?>" class="text_table"><?php echo $fila['ciu_cli'];?></td>
    <td id="tel_E<?php echo $cont?>" class="text_table"><?php echo $fila['tel_cli'];?></td>
    <td id="cup_E<?php echo $cont?>" class="text_table"><?php echo $fila['cup_cli'];?></td>
    <td id="id_E<?php echo $cont?>" class="seccion_null"><?php echo $fila['id_cli'];?></td>
    <td id="est_E<?php echo $cont?>" class="text_table"><?php if($fila['est_cli']==1){echo "Activo";}else{echo "Inactivo";} ;?></td>
    <td class="div_btn_tabla"><div onclick="abrirModal(2,<?php echo $cont; ?>)" class="btn_tabla"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></div>
<div class="btn_tabla"><a href="./deleteUser.php/?id=<?php echo $fila['id_cli'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg></a></div></td>
  </tr>
  <?php
  $cont++;
                   
};
?>
</table>
                </div>

               
                
            </div>
            
            
            

        </section>
        
        
        
        
        <section class="modal_oculto" id="modal1">
           <h2 class="title_section">Nuevo Cliente</h2>
              <div class="options_secc_2">
                <button onclick="cerrarModal(1,2)" id="btn_atras"class="btn_nav">Atras</button>
              </div>
              <p class="text_reg">Datos personales</p>
          <div class="con_sec_reg">
             
              
              <form class="div_registro" action="registrarControler.php" method="post">
                <div class="con_for_1">
                  <div class="cont_input">
                    <label for="" >Nombre</label>
                  <input class="input_form_reg" type="text" name="nombreClie" placeholder="Nombre" required>
                  </div>
                  <div class="cont_input">
                    <label for="" >Apellido</label>
                  <input class="input_form_reg" type="text" name="apellidoClie" placeholder="Apellido" required></div>
                  <div class="cont_input">
                    <label for="" >Nit/CC</label>
                  <input class="input_form_reg" type="number" name="nitClie" placeholder="NIT/CC" required>
                  </div>
                  <div class="cont_input">
                    <label for="" >Dirección</label>
                  <input class="input_form_reg" type="text" name="direccionClie" placeholder="Dirección" required>
                  </div>
                  <div class="cont_input">
                    <label for="" >Ciudad</label>
                  <input class="input_form_reg" type="text" name="ciudadClie" placeholder="Ciudad" required>
                  </div>
                  <div class="cont_input">
                    <label for="" >Telefono</label>
                  <input required class="input_form_reg" type="tel" name="telefonoClie" placeholder="Telefono">
                  </div>
                  <div class="cont_input">
                    <label for="" >Contacto</label>
                  <input required class="input_form_reg" type="text" name="contactoClie" placeholder="Contacto">
                  </div>
                  
                  
                  </div>
                <div class="con_for_2">
                  <div class="cont_input">
                   <label for="" >Cupo</label>
                  <input required class="input_form_reg" type="text" name="cupoClie"placeholder="Cupo">
                  </div>
                  <div class="cont_input">
                    <label for="" >
                    Cupo disponible</label>
                  <input required class="input_form_reg" type="text" name="cupoDClie" placeholder="Cupo Disponible ">
                  </div>
                  <div class="cont_input">
                    <label for="" >Dia de gracia</label>
                  <input required class="input_form_reg" type="date" name="diaDClie" placeholder="Dia de gracia">
                  </div>
                 
                </div>
                

              <div class="btn_reg">
                <button class="btn_nav">Guardar Cambios </button>
              </div>
            </form>
              
            </div> 
        </section>
        
        
        
        <section class="modal_oculto" id="modal2">
           <h2 class="title_section">Detalles de Cliente</h2>
              <div class="options_secc_2">
                <button onclick="cerrarModal(2, 2)" id="btn_atras"class="btn_nav">Atras</button>
              </div>
              <p class="text_reg">Datos personales</p>
          <div class="con_sec_reg">
             
              
              <form class="div_registro" action="actualizarControler.php" method="post">
                <div class="con_for_1">
                  <div class="cont_input">
                    <label for="" >Nombre</label>
                  <input class="input_form_reg" id="nom_rep" type="text" name="nombreCliea" placeholder="Nombre" required>
                  </div>
                  <div class="cont_input">
                    <label for="" >Apellido</label>
                  <input id="ape_rep" class="input_form_reg" type="text" name="apellidoCliea" placeholder="Apellido" required></div>
                  <div class="cont_input">
                    <label for="" >Nit/CC</label>
                  <input id="nit_rep" class="input_form_reg" type="text" name="nitCliea" placeholder="NIT/CC" required>
                  </div>
                  <div class="cont_input">
                    <label for="" >Dirección</label>
                  <input id="dir_rep" class="input_form_reg" type="text" name="direccionCliea" placeholder="Dirección" required>
                  </div>
                  <div class="cont_input">
                    <label for="" >Ciudad</label>
                  <input id="ciu_rep" class="input_form_reg" type="text" name="ciudadCliea" placeholder="Ciudad" required>
                  </div>
                  <div class="cont_input">
                    <label for="" >Telefono</label>
                  <input id="tel_rep" required class="input_form_reg" type="tel" name="telefonoCliea" placeholder="Telefono">
                  </div>
                  <div class="cont_input">
                    <label for="" >Estado de Crédito</label>
                    <select name="est_clia" required class="input_form_reg" >
                      <option value="1">Activo</option>
                      <option value="0">inactivo</option>
                    </select>
                  </div>
                  
                  
                  </div>
                <div class="con_for_2">
                  <div class="cont_input">
                   <label for="" >Cupo</label>
                  <input id="cup_rep" required class="input_form_reg" type="text" name="cupoCliea"placeholder="Cupo">
                  </div>
                  <div class="cont_input">
                    <label for="" >
                    Cupo disponible</label>
                  <input id="cupD_rep" required class="input_form_reg" type="text" name="cupoDCliea" placeholder="Cupo Disponible ">
                  </div>
                  <div class="cont_input">
                    <label for="" >Dia de gracia</label>
                  <input id="dia_rep" required class="input_form_reg" type="date" name="diaDCliea" placeholder="Dia de gracia">
                  </div>
                  <div class="seccion_null" >
                  <input id="id_rep" type="text" name="idCliea">
                  </div>
                </div>
                

              <div class="btn_reg">
                <button class="btn_nav">Guardar Cambios </button>
              </div>
            </form>
              
            </div> 
        </section>
        
        
        


        <section id="sec_3"class="seccion_null">
            <h2 class="title_section">Creditos</h2>
            <div>
            <button class="btn_nav">Atras</button>
            </div>
            <div class="com_secc_2">
            
                <div class="options_secc_2">
              
          <div class="con_sec_reg">
             
              
              <form class="div_registro" action="registrarCredito.php" method="post">
                <div class="con_for_Credi">
                  <div class="cont_input">
                    <label for="" >Pagaré   Nro</label>
                  <input class="input_form_reg_exte" type="number" name="nPagare" placeholder="Nro Pagare" required>
                  </div>
                  <div class="cont_input">
                    <label for="" >Monto del Credito</label>
                  <input class="input_form_reg_exte" type="number" name="montoC" placeholder="Cantidad" required></div>
                  <div class="cont_input">
                    <label for="" >Cuota Inicial</label>
                  <input class="input_form_reg_exte" type="number" name="cuoIniC" placeholder="Cantidad" required>
                  </div>
                  <div class="cont_input">
                    <label for="" >tasa de interés</label>
                  <input class="input_form_reg_exte" type="text" name="tasaInC" placeholder="Dirección" required>
                  </div>
                  <div class="cont_input">
                    <label for="" >Fecha de Desembolso</label>
                  <input class="input_form_reg_exte" type="date" name="fechaDC" placeholder="dd/mm/aaaa" required>
                  </div>
                 </div>
                 <div class="con_for_2">
                  <div class="cont_input">
                    <label for="" >cuotas Mensuales</label>
                  <input required class="input_form_reg_exte" type="number" name="coutasC" placeholder="Cuotas">
                  </div>
                  <div class="cont_input">
                    <label for="" >Cedula  del Cliente</label>
                  <input id="cedu" required class="input_form_reg_exte" type="number" name="ccC" placeholder="Cedula">
                  </div>
                  
                  
                  
                
                  <div class="cont_input">
                   <label for="" >Cliente</label>
                  <select id="seleNom" required class="input_form_reg_exte" name="nomCC">
                                        <option>Selecione</option>
                    <?php
                    $sqlCli ="SELECT * FROM tbl_cliente"; 
                    $result = mysqli_query($conn, $sqlCli); 
                    while ($valores = mysqli_fetch_array($result)) {
                      echo "<option data-nit=".$valores['cc_cli']." value=".$valores['id_cli'].">".$valores['nom_cli']."</option>";
          }
        ?>
                 
                    
                   
                  </select>
                  </div>
                  <div class="cont_input">
                    <label for="" >
                    Fecha de Crédito</label>
                  <input required class="input_form_reg_exte" type="date" name="fechaCredi" placeholder="dd/mm/aaaa">
                  </div>
                  <div class="cont_input">
                    <label for="" >Observaciones</label>
                  <textarea required class="input_form_reg_exte" name="obC" placeholder=""></textarea>
                  </div>
                 
                </div>
                

              <div class="btn_cred">
                <button class="btn_nav">Crear</button>
              </div>
            </form>
              
            </div> 
                </div>
            </div>
            

        </section>
    </main>
    <footer></footer>
    <script src="./main.js"></script>
  
</body>
</html>
<?php
if(isset($_GET['x'])){
  $x=$_GET['x'] ;
  echo "<script>mostrar($x)</script>";
};
if(isset($_GET['m'])){
  $m=$_GET['m'] ;
  switch ($m){
    case 1:
    echo '<script>swal({title:"Usuario Guardado Correctamente", icon: "success", 
      className: "alert"} );</script>' ;
      break;
    case 2:
      echo '<script>swal({title:"Usuario Eliminado", icon: "warning", 
      className: "alert"} );</script>' ;
      break;
    case 3:
    echo '<script>swal({title:"Usuario Actualizado", icon: "success", 
      className: "alert"} );</script>' ;
      break;
     case 4:
    echo '<script>swal({title:"Crédito Creado", icon: "success", 
      className: "alert"} );</script>' ;
      break;
     case 5:
    echo '<script>swal({title:"Error", icon: "error", 
      className: "alert"} );</script>' ;
      break; 
      
  }
  
};
?>