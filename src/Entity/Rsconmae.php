<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Circle\DoctrineRestDriver\Annotations as DataSource;

/**
 * This annotation marks the class as managed entity:
 *
 * @ORM\Entity
 * @ORM\Table("Rsconmae")
 * @DataSource\Fetch("http://srvappc.northgateplc.es:8810/CapRest/rest/CapRestService/Rsconmae")
 */
class Rsconmae {

	/**
     * @ORM\Id @ORM\Column(type="string")
     */
    private $cont_id;

    /**
     * @ORM\Column(type="string")
     */
    private $descrip;

    /**
     * @ORM\Column(type="string")
     */
    private $estad_reg;

    /**
     *  @ORM\Id @ORM\Column(type="string")
     */
    private $fecha_ini;

    /**
     * @ORM\Column(type="string")
     */
    private $fecha_mod;

    /**
     * @ORM\Column(type="string")
     */
    private $hora_mod;

    /**
     * @ORM\Column(type="string")
     */
    private $usu_mod;

    /**
     * @ORM\Column(type="string")
     */
    private $valor;


    public function getContId() {
    	return $this->cont_id;
    }

    public function getDescription() {
    	return $this->descrip;
    }

    public function getModificationDate() {
    	return $this->fecha_mod;
    }

    public function getValue() {
    	return substr($this->valor, 0, 50);
    }


}