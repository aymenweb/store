<?php
/**
class user
 */

class User {
    /**
     * @var nom
     */
    protected $nom;
    /**
     * @var prenom
     */
    protected $prenom;
    /**
     * @var email
     */
    protected $email;
    /**
     * @var age
     */
    protected $age;
    /**
     * Constante de Pays
     */
const PAYS = "France";
    /**
     * Constante de langue
     */
const LANGUES = "Français";


    /**
     * methode pour commenter
     */

    public function commenter()
{
    echo $this->nom. " a commenté" ;
}
function repondre (User $user)
{
    echo $this->nom . "a répondu au commentaire de ".$user->nom;
}
    /**
     * Constructeur d'objet qui prend 4 paramètres
     * @param $non
     * @param $prenom
     * @param $email
     * @param $age
     */

    public function __construct($non, $prenom, $email, $age)
    {
        $this->nom = $non;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->age = $age;
    }

    /**
     * @param \age $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return \age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param \email $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return \email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param \nom $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return \nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param \prenom $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return \prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

} 