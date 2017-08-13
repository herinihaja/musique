<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jaime_class
 *
 * @author herinihaja
 */
class Jaime_class {
    private $idjaime;
    private $valeur;
    private $datejaime;
    private $idmusique;
    private $idclient;
    
    function __construct() {
        
    }
    function getIdjaime() {
        return $this->idjaime;
    }

    function getValeur() {
        return $this->valeur;
    }

    function getDatejaime() {
        return $this->datejaime;
    }

    function getIdclient() {
        return $this->idclient;
    }

    function setIdjaime($idjaime) {
        $this->idjaime = $idjaime;
    }

    function setValeur($valeur) {
        $this->valeur = $valeur;
    }

    function setDatejaime($datejaime) {
        $this->datejaime = $datejaime;
    }

    function setIdclient($idclient) {
        $this->idclient = $idclient;
    }
    function getIdmusique() {
        return $this->idmusique;
    }

    function setIdmusique($idmusique) {
        $this->idmusique = $idmusique;
    }




    
}
