<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Loginadmin_classs
 *
 * @author herinihaja
 */
class Loginadmin_classs {

    private $idloginadmin;
    private $pseudo;
    private $motdepasse;
    private $datelogin;

    function __construct() {
        
    }

    function getIdloginadmin() {
        return $this->idloginadmin;
    }

    function getPseudo() {
        return $this->pseudo;
    }

    function getMotdepasse() {
        return $this->motdepasse;
    }

    function getDatelogin() {
        return $this->datelogin;
    }

    function setIdloginadmin($idloginadmin) {
        $this->idloginadmin = $idloginadmin;
    }

    function setPseudo($pseudo) {
        if ($pseudo) {
            $this->pseudo = $pseudo;
        } else {
            throw new Exception("pseudo invalide");
        }
    }

    function setMotdepasse($motdepasse) {
        if ($motdepasse) {
            $this->motdepasse = $motdepasse;
        } else {
            throw new Exception("mot de passe invalide");
        }
    }

    function setDatelogin($datelogin) {
        $this->datelogin = $datelogin;
    }

}
