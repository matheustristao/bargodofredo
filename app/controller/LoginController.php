<?php

require ('app/model/Administrador.php');
require ('app/dao/AdministradorDAO.php');

class LoginController {

    static private $administrador;
    static private $administradordao;

    private function instanciaAdministrador() {

        if (!isset(self::$administrador)) {
            self::$administrador = new Administrador();
        }
        return self::$administrador;
    }

    private function instanciaAdministradorDao() {

        if (!isset(self::$administradordao)) {
            self::$administradordao = new AdministradorDao();
        }
        return self::$administradordao;
    }

    public function validarLogin($id, $password) {

        $administrador = self::instanciaAdministrador();
        $administradordao = self::instanciaAdministradorDao();

        $administrador->setId($id);
        $administrador->setPassword($password);

        $validacao = $administradordao->consultaLogin($administrador->getId(), $administrador->getPassword());

        if ($validacao == 1) {
            header("Location: pages/Principal.php");
        } else {

            print '<script type="text/javascript">';
            print 'alert("Usuario não existe")';
            print '</script>';
        }
    }

}
