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
                        <p class="text_sec_act">31</p>
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
                    <p class="text_sec_act">32</p>
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
                    <input type="text" class="inp_buscar" placeholder="Nombre, NIT, o CC " > 
                    <button class="btn_nav">Crear cliente</button>
                </div>
                <p>Datos personales</p>
                <div class="formulario_registro">
                    <form action="./registrarControler.php" method="post">
                        <div class="div_form1">
                        <div class="item_form">
                        <label for="nombreClie">nombre</label>
                    <input type="text" id="nombreClie" name="nombreClie" placeholder="nombre" >
                        </div>
                    <div class="item_form">
                    <label for="apellidoClie">apellido</label>
                    <input type="text" id="apellidoClie"  >
                    </div>
                    <div class="item_form">
                    <label for="nitClie">nit</label>
                    <input type="text" id="nombnit"  >
                    </div>
                    <div class="item_form">
                    <label for="direccionClie">direccion</label>
                    <input type="text" id="direccion" >

                    </div>
                    <div class="item_form">
                    <label for="ciudadClie">ciudad</label>
                    <input type="text" id="ciudadClie"  >

                    </div>
                    <div class="item_form">
                    <label for="telefonoClie">telefono</label>
                    <input type="text" id="telefonoClie"  >

                    </div>
                    
                    <div class="item_form">
                    <label for="contactoClie">contacto</label>
                    <input type="text" id="contacto"  >
                    </div>

                        </div>
                        <div class="div_form2">
                        <div class="item_form">
                    <label for="contactoClie">Cupo Total</label>
                    <input type="text" id="contacto"  >
                    </div>
                    <div class="item_form">
                    <label for="contactoClie">Cupo Disponible</label>
                    <input type="text" id="contacto"  >
                    </div>
                    <div class="item_form">
                    <label for="contactoClie">Dias de Gracia</label>
                    <input type="text" id="contacto"  >
                    </div>
                    <div class="item_form">
                   
                    <input type="submit"  class="btn_nav">
                    </div>
                        </div>
                        
                    
                </form>
                </div>
                
            </div>
            

        </section>


        <section id="sec_3"class="seccion_null">
            <h2 class="title_section">Creditos</h2>
            <div>
            <button class="btn_nav">Atras</button>
            </div>
            <div class="com_secc_2">
            
                <div class="options_secc_2">
                    
                </div>
            </div>
            

        </section>
    </main>
    <footer></footer>
    <script src="./main.js"></script>
  
</body>
</html>