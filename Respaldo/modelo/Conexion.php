<?php

class Conexion
{

    /**
     * Conexión a la base datos
     *
     * @return PDO
     */
    public static function conectar()
    {
        try {

            $cn = new PDO("mysql:host=localhost;dbname=mjsoluci_mj", "mjsoluci_admin_mjsoluciones1", "mjsoluciones_24");

            return $cn;

        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

}