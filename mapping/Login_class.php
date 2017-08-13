<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author herinihaja
 */
class Login_class {

    private $idlogin;
    private $pseudo;
    private $motdepasse;
    private $datelogin;
    private $idclient;

    function __construct() {
        
    }

    function getIdlogin() {
        return $this->idlogin;
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

    function setIdlogin($idlogin) {
        $this->idlogin = $idlogin;
    }

    function setPseudo($pseudo) {
        if ($pseudo) {
            $this->pseudo = $pseudo;
        } else {
            throw new Exception("login invalide ou mot de passe invalide");
        }
    }

    function setMotdepasse($motdepasse) {
        if ($motdepasse) {
            $this->motdepasse = $motdepasse;
        }else{
            throw new Exception("login invalide ou mot de passe invalide");
        }
    }

    function setDatelogin($datelogin) {
        $this->datelogin = $datelogin;
    }
    function getIdclient() {
        return $this->idclient;
    }

    function setIdclient($idclient) {
        $this->idclient = $idclient;
    }


    

}
