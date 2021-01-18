<?php
require_once 'User.php';


$utente1 = new User('Alessio', 'Furio', 'pippo@gmail.com', 'dsgafdsgafd', 'zibbo-93');
$utente1-> printInformations();


$utente2 = new User('Flavio', 'Furio', 'lello@gmail.com', 'mkhmdfdf', 'zibbus');
$utente2-> printInformations();
?>
