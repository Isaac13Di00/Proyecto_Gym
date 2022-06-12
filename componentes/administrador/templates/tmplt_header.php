<link rel="stylesheet" href="/Proyecto_Gym/css/headerStyle.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<header>
        <div class="header-pageName">
            <img src="/Proyecto_Gym/imagenes/headerIMG.jpeg">
        </div>
        <div class="more">
                <button class="mas"><ion-icon name="caret-down" class="mas-icon"></ion-icon></button>
                <div class="mas-contenido">
                    <a href="/Proyecto_Gym/componentes/utilidades/cerrarSesion.php" style="color: red;">Cerrar Sesión</a>
                </div>
        </div>
</header>
<div class="header-more">
            <div class="tabs">
                <ul>
                    <a href="../administrador/perfil.php"><li>Inicio</li></a>
                    <li class="socios">Socios <ion-icon name="caret-down" class="caret-down"></ion-icon>
                            <div class="socios-mas">
                                <a href="../administrador/regisSocio.php">Registrar socio</a>
                                <a href="../administrador/consulSocio.php">Consultar socio</a>
                                <a href="../administrador/regisEmple.php">Registrar empleado</a>
                                <a href="../administrador/consulEmple.php">Consultar empleado</a>
                            </div>
                        </li>
                    
                    <a href="../administrador/citas.php"><li>Citas</li></a>
                    <a href="../administrador/registros.php"><li>Registros</li></a>
                </ul>
            </div>
        </div>