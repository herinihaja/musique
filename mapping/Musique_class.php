<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Musique_class
 *
 * @author herinihaja
 */
class Musique_class {

    private $idmusique;
    private $titre;
    private $description;
    private $lienyoutube;
    
    private $idartiste;
    private $idtypemusique;
    private $Type; //objet typemusique

    function getIdmusique() {
        return $this->idmusique;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDescription() {
        return $this->description;
    }

    function getIdtypemusique() {
        return $this->idtypemusique;
    }

    function getType() {
        return $this->Type;
    }

    function setIdmusique($idmusique) {
        $this->idmusique = $idmusique;
    }

    function setTitre($titre) {
        if ($titre) {
            $this->titre = $titre;
        } else {
            throw new Exception("tire de la musique invalide");
        }
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setIdtypemusique($idtypemusique) {
        $this->idtypemusique = $idtypemusique;
    }

    function setType($Type) {
        $this->Type = $Type;
    }

    function getLienyoutube() {
        return $this->lienyoutube;
    }

    function setLienyoutube($lienyoutube) {
        if ($lienyoutube) {
            $this->lienyoutube = $lienyoutube;
        } else {
            throw new Exception("lien youtube invalide");
        }
    }
    function getIdartiste() {
        return $this->idartiste;
    }

    function setIdartiste($idartiste) {
        $this->idartiste = $idartiste;
    }



}
