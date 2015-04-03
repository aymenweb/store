
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: wac19
 * Date: 03/04/15
 * Time: 16:52
 */
include "User.php";
include "Moderateur.php";

$user1 = new User('Assila', 'aymen', 'aymenweb@gmail.com', 33);
$user2 = new User('chada', 'saîd', 'said.chada@gmail.com', 33);
$user3= new User('Corray', 'Alexemdre', 'alex.corroy@gmail.com', 33);

$user1->commenter('François Hollande est un bon président !!!!! ');
echo"<br/>";
$user2->commenter('Nico aussi, mais François est aussi grand ..... :(!!!!!!! ');
//j'envoi l'objet $user2 issue  de ma classe User
$user1->repondre($user2);
/**
 *
 */
echo"<br/> Email de l'utilisateur 1: ";
echo $user1->getEmail();
echo" . ";
/**
 * lacces a la constante pays et langue
 */
echo $user1::PAYS;
echo" / ";
echo $user1::LANGUES;
echo"<br/> Age de l'utilisateur 2: ";
echo $user2->getAge();
echo"<br/><br/><br/><br/>";

$user1->setAge(26);
echo"Elodie a vraiment ".$user1->getAge();
echo"<br/><br/><br/><br/>";
$user2->setEmail('mail-changer-user2@gmail.com');
echo"said a vraiment l'email ".$user2->getEmail();

echo"<br/><br/><br/><br/>";

$user1 = clone $user2; //cloner l'objet dans un nouvel espace mémoire
$user1->setAge(10);

echo $user1->getAge(); //10
echo"<br/>";
echo $user2->getAge(); //33

echo"<br/><br/><br/><br/>";

$user1 =  $user2; //l'objet dans un meme espace mémoire
$user1->setAge(10);

echo $user1->getAge(); //10
echo"<br/>";
echo $user2->getAge(); //33

echo"<br/><br/><br/><br/>";
$modurateur1 = new Moderateur('Dos Santos', 'Leonel', 'leonel', 32, 4, 'Voici my Life')

    echo $modurateur1->getNom();