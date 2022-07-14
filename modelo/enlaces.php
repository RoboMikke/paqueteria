<?php
class Paginas
{
    static public function enlacesPaginasModelo($x)
    {
        if($x == "principal")
        {
            $modulo = "vistas/modulos/principal.php";
        }
        #camion
        else if($x == "alta_camion")
        {
            $modulo = "vistas/modulos/alta_camion.php";
        }
        else if($x == "mostrar_camion")
        {
            $modulo = "vistas/modulos/mostrar_camion.php";
        }
        #camionero
        else if($x == "alta_camionero")
        {
            $modulo = "vistas/modulos/alta_camionero.php";
        }
        else if($x == "mostrar_camionero")
        {
            $modulo = "vistas/modulos/mostrar_camionero.php";
        }
        #camionero camion
        else if($x == "alta_camionero_camion")
        {
            $modulo = "vistas/modulos/alta_camionero_camion.php";
        }
        else if($x == "mostrar_camionero_camion")
        {
            $modulo = "vistas/modulos/mostrar_camionero_camion.php";
        }
        #destinatario
        else if($x == "alta_destinatario")
        {
            $modulo = "vistas/modulos/alta_destinatario.php";
        }
        else if($x == "mostrar_destinatario")
        {
            $modulo = "vistas/modulos/mostrar_destinatario.php";
        }
        #paquete
        else if($x == "alta_paquete")
        {
            $modulo = "vistas/modulos/alta_paquete.php";
        }
        else if($x == "mostrar_paquete")
        {
            $modulo = "vistas/modulos/mostrar_paquete.php";
        }
        #poblacion
        else if($x == "alta_poblacion")
        {
            $modulo = "vistas/modulos/alta_poblacion.php";
        }
        else if($x == "mostrar_poblacion")
        {
            $modulo = "vistas/modulos/mostrar_poblacion.php";
        }
        #provincia
        else if($x == "alta_provincia")
        {
            $modulo = "vistas/modulos/alta_provincia.php";
        }
        else if($x == "mostrar_provincia")
        {
            $modulo = "vistas/modulos/mostrar_provincia.php";
        }
        #rol
        else if($x == "alta_rol")
        {
            $modulo = "vistas/modulos/alta_rol.php";
        }
        else if($x == "mostrar_rol")
        {
            $modulo = "vistas/modulos/mostrar_rol.php";
        }
        #usuario
        else if($x == "alta_usuario")
        {
            $modulo = "vistas/modulos/alta_usuario.php";
        }
        else if($x == "mostrar_usuario")
        {
            $modulo = "vistas/modulos/mostrar_usuario.php";
        }
        else
        {
            $modulo = "vistas/modulos/principal.php";
        }
        return $modulo;
    }
}