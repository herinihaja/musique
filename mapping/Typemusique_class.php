<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Typemusique_class
 *
 * @author herinihaja
 */
class Typemusique_class {

    private $idtypemusique;
    private $libelle;

    function __construct() {
        
    }

    function getIdtypemusique() {
        return $this->idtypemusique;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function setIdtypemusique($idtypemusique) {
        $this->idtypemusique = $idtypemusique;
    }

    function setLibelle($libelle) {
        if ($libelle) {
            $this->libelle = $libelle;
        } else {
            throw new Exception("libelle invalide");
        }
    }

}
