<!-- Snack 2:
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri, 
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”  -->


<?php 

$nome = $_GET['nome'];
$email = $_GET['email'];
$age = $_GET['eta'];

// verifico lunghezza del nome inserito da browser inserendolo in una variabile e facendone il dump
$lunghezzaNome = strlen($nome);

// var_dump($lunghezzaNome);

if( $lunghezzaNome <= 3) {
    $messaggio = 'accesso negato';
} else if (is_numeric($age) === false ) {
    $messaggio = 'accesso negato';
} else if ( !(strpos($email, '.')) || !(strpos($email, '@'))) {
    $messaggio = 'accesso negato';
} else {
    $messaggio = 'accesso consentito';
}

?>

<h2> <?php echo $messaggio ?> </h2>