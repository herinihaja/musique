<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_class
 *
 * @author herinihaja
 */
class Admin_class {

    private $idadmin;
    private $nom;
    private $prenom;
    private $sexe;
    private $login;
    private $motdepasse;

    function __construct() {
        
    }

    function getIdadmin() {
        return $this->idadmin;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getLogin() {
        return $this->login;
    }

    function getMotdepasse() {
        return $this->motdepasse;
    }

    function setIdadmin($idadmin) {
        $this->idadmin = $idadmin;
    }

    function setNom($nom) {
        if ($nom) {
            $this->nom = $nom;
        } else {
            throw new Exception("nom invalide");
        }
    }

    function setPrenom($prenom) {
        if ($prenom) {
            $this->prenom = $prenom;
        } else {
            throw new Exception("prénom invalide");
        }
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    function setLogin($login) {
        if ($login) {
            $this->login = $login;
        } else {
            throw new Exception("login invalide");
        }
    }

    function setMotdepasse($motdepasse) {
        if ($motdepasse) {
            $this->motdepasse = $motdepasse;
        } else {
            throw new Exception("mot de passe invalide");
        }
    }

}
