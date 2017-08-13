<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client_class
 *
 * @author herinihaja
 */
class Client_class {
    private $idclient;
    private $nom;
    private $prenom;
    private $datenaissance;
    private $sexe;
    
    function __construct($idclient="", $nom="", $prenom="", $datenaissance="", $sexe="") {
        $this->idclient = $idclient;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->datenaissance = $datenaissance;
        $this->sexe = $sexe;
    }
    
    function getIdclient() {
        return $this->idclient;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getDatenaissance() {
        return $this->datenaissance;
    }

    function getSexe() {
        return $this->sexe;
    }

    function setIdclient($idclient) {
        $this->idclient = $idclient;
    }

    function setNom($nom) {
        if($nom){
            $this->nom = $nom;
        }else{
            throw new Exception("nom du client invalide");
        }
        
    }

    function setPrenom($prenom) {
        if($prenom){
            $this->prenom = $prenom;
        }else{
            throw new Exception("prénom du clien invalide");
        }
       
    }

    function setDatenaissance($datenaissance) {
        $this->datenaissance = $datenaissance;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }



    
}
