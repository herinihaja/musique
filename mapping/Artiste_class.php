<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Artiste_class
 *
 * @author herinihaja
 */
class Artiste_class {

    private $nom;
    private $prenom;
    private $pseudo;

    function __construct() {
        
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getPseudo() {
        return $this->pseudo;
    }

    function setNom($nom) {
        if ($nom) {
            $this->nom = $nom;
        } else {
            throw new Exception("nom d'artiste invalide");
        }
    }

    function setPrenom($prenom) {
        if ($prenom) {
            $this->prenom = $prenom;
        } else {
            throw new Exception("prénom de l'artiste invalide");
        }
    }

    function setPseudo($pseudo) {
        if ($pseudo) {
            $this->pseudo = $pseudo;
        } else {
            throw new Exception("pseudo invalide");
        }
    }

}
