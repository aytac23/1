<?php

/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 20/09/2017
 * Time: 19:52
 */
class cust_r
{
    protected $id_clid;
    private $mdp;
    protected $name;
    protected $pname;
    protected $dtp;
    protected $mail;
    protected $adres;
    protected $cp;
    protected $city;
    protected $country;
    protected $type;
    protected $actif;

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @param mixed $actif
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    }


    /**
     * @return mixed
     */
    public function getIdClid()
    {
        return $this->id_clid;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPname()
    {
        return $this->pname;
    }

    /**
     * @return mixed
     */
    public function getDtp()
    {
        return $this->dtp;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }


}