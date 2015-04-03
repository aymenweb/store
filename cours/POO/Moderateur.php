<?php
include"User.php";
/**
 * Created by PhpStorm.
 * User: wac19
 * Date: 03/04/15
 * Time: 18:09
 */
Class Moderateur extends User
{
    /**
     * @varetoile
     */
    protected $etoiles;
    /**
     * @var description
     */
    protected $description;
    public function __construct($non, $prenom, $email, $age, $etoile, $description )
    {
        //j'appel mon constructeur
        parent::__construct($non,$prenom, $email, $age)
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $etoiles
     */
    public function setEtoiles($etoiles)
    {
        $this->etoiles = $etoiles;
    }

    /**
     * @return mixed
     */
    public function getEtoiles()
    {
        return $this->etoiles;
    }

}
