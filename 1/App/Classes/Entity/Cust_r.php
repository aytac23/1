<?php
namespace Entity;
/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 20/09/2017
 * Time: 19:52
 */
class cust_r
{
    protected $id_clid;
    protected $mdp;
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
     * @return mixed
     */
    public function getIdClid()
    {
        return $this->id_clid;
    }

    /**
     * @param mixed $id_clid
     */
    public function setIdClid($id_clid)
    {
        $this->id_clid = $id_clid;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPname()
    {
        return $this->pname;
    }

    /**
     * @param mixed $pname
     */
    public function setPname($pname)
    {
        $this->pname = $pname;
    }

    /**
     * @return mixed
     */
    public function getDtp()
    {
        return $this->dtp;
    }

    /**
     * @param mixed $dtp
     */
    public function setDtp($dtp)
    {
        $this->dtp = $dtp;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * @param mixed $adres
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * @param mixed $actif
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    }


}