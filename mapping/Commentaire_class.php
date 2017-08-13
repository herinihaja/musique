<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Commentaire_class
 *
 * @author herinihaja
 */
class Commentaire_class {

    private $idcommentaire;
    private $contenu;
    private $datecommentaire;
    private $idclient;
    private $idmusique;

    function __construct() {
        
    }

    function getIdcommentaire() {
        return $this->idcommentaire;
    }

    function getContenu() {
        return $this->contenu;
    }

    function getDatecommentaire() {
        return $this->datecommentaire;
    }

    function getIdclient() {
        return $this->idclient;
    }

    function getIdmusique() {
        return $this->idmusique;
    }

    function setIdcommentaire($idcommentaire) {
        $this->idcommentaire = $idcommentaire;
    }

    function setContenu($contenu) {
        if ($contenu) {
            $this->contenu = $contenu;
        } else {
            throw new Exception("contenu invalide");
        }
    }

    function setDatecommentaire($datecommentaire) {
        $this->datecommentaire = $datecommentaire;
    }

    function setIdclient($idclient) {
        $this->idclient = $idclient;
    }

    function setIdmusique($idmusique) {
        $this->idmusique = $idmusique;
    }

}
