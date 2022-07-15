<?php
require_once "conexion.php";

class Modelo extends Conexion
{
    #consulta usuario/rol
    #---------------------
    static public function consultaUsuarioModelo($tabla)
    {
        $consulta = Conexion::conectar()->prepare("SELECT pk_role, rol FROM $tabla ORDER BY pk_role");
        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }

    #consulta destinatario
    #---------------------
    static public function consultaDestinatarioModelo($tabla)
    {
        $consulta = Conexion::conectar()->prepare("SELECT pk_destinatario, destinatario, direccion_destinatario FROM $tabla ORDER BY pk_destinatario");
        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }

    #consulta camionero
    #---------------------
    static public function consultaCamioneroModelo($tabla)
    {
        $consulta = Conexion::conectar()->prepare("SELECT dni, nombre, primer_apellido FROM $tabla ORDER BY dni");
        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }

    #consulta camion
    #---------------------
    static public function consultaCamionModelo($tabla)
    {
        $consulta = Conexion::conectar()->prepare("SELECT matricula, modelo FROM $tabla ORDER BY matricula");
        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }

    #consulta provincia
    #---------------------
    static public function consultaProvinciaModelo($tabla)
    {
        $consulta = Conexion::conectar()->prepare("SELECT codigo_provincia, nombre_provincia FROM $tabla ORDER BY nombre_provincia");
        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }

    #consulta población
    #---------------------
    static public function consultaPoblacionModelo($tabla)
    {
        $consulta = Conexion::conectar()->prepare("SELECT pk_poblacion, poblacion FROM $tabla ORDER BY poblacion");
        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }

    #registro camion
    #----------------------------------------
    static public function registroCamionModelo($datosModelo, $tabla)
    {

        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (matricula, modelo, tipo, potencia) 
        VALUES (:matricula, :modelo, :tipo, :potencia)");

        $consulta->bindParam(":matricula", $datosModelo["matricula"], PDO::PARAM_STR);
        $consulta->bindParam(":modelo", $datosModelo["modelo"], PDO::PARAM_STR);
        $consulta->bindParam(":tipo", $datosModelo["tipo"], PDO::PARAM_STR);
        $consulta->bindParam(":potencia", $datosModelo["potencia"], PDO::PARAM_STR);

        if($consulta->execute()) 
        {
            $respuesta = 'ok';
        }
        else
        {
            $respuesta = 'error';
        }
        return $respuesta;
        $consulta->close();
    }
    #-------------------------------------------------------
    static public function listadoCamionModelo($tabla1)
    {
        $consulta = Conexion::conectar()->prepare("SELECT matricula, modelo, tipo, potencia
        FROM $tabla1");
        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }
    #registro camionero
    #----------------------------------------
    static public function registroCamioneroModelo($dni, $nombre, $primer_apellido, $segundo_apellido, $telefono, $salario, $fk_poblacion, $tabla)
    {

        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (dni, nombre, primer_apellido, segundo_apellido,
        telefono, salario, fk_poblacion) 
        VALUES ('$dni', '$nombre', '$primer_apellido', '$segundo_apellido', '$telefono', '$salario', '$fk_poblacion')");

        /*$consulta->bindParam(":dni", $datosModelo["dni"], PDO::PARAM_STR);
        $consulta->bindParam(":nombre", $datosModelo["nombre"], PDO::PARAM_STR);
        $consulta->bindParam(":primer_apellido", $datosModelo["primer_apellido"], PDO::PARAM_STR);
        $consulta->bindParam(":segundo_apellido", $datosModelo["segundo_apellido"], PDO::PARAM_STR);
        $consulta->bindParam(":telefono", $datosModelo["telefono"], PDO::PARAM_STR);
        $consulta->bindParam(":salario", $datosModelo["salario"], PDO::PARAM_STR);
        $consulta->bindParam(":fk_poblacion", $datosModelo["fk_poblacion"], PDO::PARAM_STR);*/

        if($consulta->execute()) 
        {
            $respuesta = 'ok';
        }
        else
        {
            $respuesta = 'error';
        }
        return $respuesta;
        $consulta->close();
    }
    #-------------------------------------------------------
    static public function listadoCamioneroModelo($tabla1, $tabla2)
    {
        $consulta = Conexion::conectar()->prepare("SELECT dni, nombre, primer_apellido, segundo_apellido, telefono, salario, po.poblacion AS 'fk_poblacion'
        FROM camionero ca, poblacion po
        WHERE ca.fk_poblacion = po.pk_poblacion");
        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }
    # registro camionero camion
    #---------------------------------------
    static public function registroCamioneroCamionModelo($datosModelo, $tabla)
    {

        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (fk_camionero, fk_camion, fecha) 
        VALUES (:fk_camionero, :fk_camion, :fecha)");

        $consulta->bindParam(":fk_camionero", $datosModelo["fk_camionero"], PDO::PARAM_STR);
        $consulta->bindParam(":fk_camion", $datosModelo["fk_camion"], PDO::PARAM_STR);
        $consulta->bindParam(":fecha", $datosModelo["fecha"], PDO::PARAM_STR);

        if($consulta->execute()) 
        {
            $respuesta = 'ok';
        }
        else
        {
            $respuesta = 'error';
        }
        return $respuesta;
        $consulta->close();
    }
    #----------------------------------------
    static public function listadoCamioneroCamionModelo($tabla1, $tabla2)
    {
        $consulta = Conexion::conectar()->prepare("SELECT cc.pk_camionero_camion, CONCAT (co.nombre, ' ', co.primer_apellido) AS 'camionero', cc.fk_camion AS 'Matricula de Camion',cc.fecha AS 'Fecha'
        FROM camionero co, camionero_camion cc
        WHERE cc.fk_camionero = co.dni");
        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }
    
    #registro destinatario
    #----------------------------------------
    static public function registroDestinatarioModelo($datosModelo, $tabla)
    {

        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (destinatario, direccion_destinatario) 
        VALUES (:destinatario, :direccion_destinatario)");

        $consulta->bindParam(":destinatario", $datosModelo["destinatario"], PDO::PARAM_STR);
        $consulta->bindParam(":direccion_destinatario", $datosModelo["direccion_destinatario"], PDO::PARAM_STR);


        if($consulta->execute()) 
        {
            $respuesta = 'ok';
        }
        else
        {
            $respuesta = 'error';
        }
        return $respuesta;
        $consulta->close();
    }
    #-------------------------------------------------------
    static public function listadoDestinatarioModelo($tabla1)
    {
        $consulta = Conexion::conectar()->prepare("SELECT pk_destinatario, destinatario, direccion_destinatario
        FROM $tabla1");
        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }
    #registro provincia
    #----------------------------------------
    static public function registroProvinciaModelo($datosModelo, $tabla)
    {

        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (codigo_provincia, nombre_provincia) 
        VALUES (:codigo_provincia,:nombre_provincia)");

        $consulta->bindParam(":codigo_provincia", $datosModelo["codigo_provincia"], PDO::PARAM_STR);
        $consulta->bindParam(":nombre_provincia", $datosModelo["nombre_provincia"], PDO::PARAM_STR);

        if($consulta->execute()) 
        {
            $respuesta = 'ok';
        }
        else
        {
            $respuesta = 'error';
        }
        return $respuesta;
        $consulta->close();
    }
    #-------------------------------------------------------
    static public function listadoProvinciaModelo($tabla1)
    {
        $consulta = Conexion::conectar()->prepare("SELECT codigo_provincia, nombre_provincia
        FROM $tabla1");

        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }
    #registro poblacion
    #----------------------------------------
    static public function registroPoblacionModelo($datosModelo, $tabla)
    {

        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (poblacion) 
        VALUES (:poblacion)");

        $consulta->bindParam(":poblacion", $datosModelo["poblacion"], PDO::PARAM_STR);

        if($consulta->execute()) 
        {
            $respuesta = 'ok';
        }
        else
        {
            $respuesta = 'error';
        }
        return $respuesta;
        $consulta->close();
    }
    #-------------------------------------------------------
    static public function listadoPoblacionModelo($tabla1)
    {
        $consulta = Conexion::conectar()->prepare("SELECT pk_poblacion, poblacion
        FROM $tabla1");

        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }
    #registro rol
    #----------------------------------------
    static public function registroRolModelo($datosModelo, $tabla)
    {

        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (rol) 
        VALUES (:rol)");

        $consulta->bindParam(":rol", $datosModelo["rol"], PDO::PARAM_STR);

        if($consulta->execute()) 
        {
            $respuesta = 'ok';
        }
        else
        {
            $respuesta = 'error';
        }
        return $respuesta;
        $consulta->close();
    }
    #-------------------------------------------------------
    static public function listadoRolModelo($tabla1)
    {
        $consulta = Conexion::conectar()->prepare("SELECT pk_role, rol
        FROM $tabla1");

        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }
    #registro usuario
    #----------------------------------------
    static public function registroUsuarioModelo($datosModelo, $tabla)
    {

        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (usuario, contrasenia, fk_role) 
        VALUES (:usuario, MD5(:contrasenia), :fk_role)");

        $consulta->bindParam(":usuario", $datosModelo["usuario"], PDO::PARAM_STR);
        $consulta->bindParam(":contrasenia", $datosModelo["contrasenia"], PDO::PARAM_STR);
        $consulta->bindParam(":fk_role", $datosModelo["fk_role"], PDO::PARAM_STR);

        if($consulta->execute()) 
        {
            $respuesta = 'ok';
        }
        else
        {
            $respuesta = 'error';
        }
        return $respuesta;
        $consulta->close();
    }
    #-------------------------------------------------------
    static public function listadoUsuarioModelo($tabla1, $tabla2)
    {
        $consulta = Conexion::conectar()->prepare("SELECT usuario, contrasenia, rol
        FROM usuario, rol
        WHERE usuario.fk_role = rol.pk_role");

        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }
    #registro paquete
    #----------------------------------------
    static public function registroPaqueteModelo($datosModelo, $tabla1)
    {

        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla1 (codigo_paquete, descripcion, fk_destinatario,
        fk_camionero, fk_provincia) 
        VALUES (:codigo_paquete, :descripcion, :fk_destinatario, :fk_camionero, :fk_provincia)");

        $consulta->bindParam(":codigo_paquete", $datosModelo["codigo_paquete"], PDO::PARAM_STR);
        $consulta->bindParam(":descripcion", $datosModelo["descripcion"], PDO::PARAM_STR);
        $consulta->bindParam(":fk_destinatario", $datosModelo["fk_destinatario"], PDO::PARAM_STR);
        $consulta->bindParam(":fk_camionero", $datosModelo["fk_camionero"], PDO::PARAM_STR);
        $consulta->bindParam(":fk_provincia", $datosModelo["fk_provincia"], PDO::PARAM_STR);

        if($consulta->execute()) 
        {
            $respuesta = 'ok';
        }
        else
        {
            $respuesta = 'error';
        }
        return $respuesta;
        $consulta->close();
    }
    #-------------------------------------------------------
    static public function listadoPaqueteModelo()
    {
        $consulta = Conexion::conectar()->prepare("SELECT codigo_paquete, descripcion, des.destinatario AS 'destinatario', CONCAT(cam.nombre, ' ', cam.primer_apellido) AS 'camionero', pro.nombre_provincia AS 'provincia'
        FROM paquete pq, destinatario des, camionero cam, provincia pro
        WHERE pq.fk_destinatario = des.pk_destinatario AND pq.fk_camionero = cam.dni AND pq.fk_provincia = pro.codigo_provincia");

        $consulta -> execute();
        return $consulta->fetchAll();
        $consulta->close();
    }
}