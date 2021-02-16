<?php
/**
 * @author alessio alessio@gmail.com
 * @copyright 2021 alessio
 */
include __DIR__ . "/classes/categorie.php";
include __DIR__ . "/classes/articoli.php";

class User {
    public $nome;
    public $cognome;
    public $età;
    public $email;
    public $password;
    public $id;
    public function __construct(int $id, string $nome, string $cognome, int $età, string $email, string $password) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->età = $età;
        $this->email = $email;
        $this->password = $password;
    }
}

class Amministratore extends User {
    public $livello;
    public function __construct ($id, $nome, $cognome, $età, $email, $password, int $livello) {
        parent:: __construct($id, $nome, $cognome, $età, $email, $password);
        $this->livello = $livello;
    }
    
}

$users = ['piero' => new User(1, 'piero', 'di poero', 30, 'ppp@gmail.com', 'pippo'), 'alessio' => new User(2, 'Alessio', 'Di Giacomo', 21, 'alessio@gmail.com', 'pluto')];

$amministratori = [
    'ciccio' => new Amministratore (1, 'ciccio', 'di girolamo', 25, 'ppp@gmail.com', 'pippo', 2),
];

$articoli = [
    'articolo1' => new Articolo (1, 'ladro entra in casa e si riposa', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius recusandae error tempore reiciendis, quod quia nemo velit, minus nostrum culpa quam illo eligendi impedit officiis quisquam vero? Rem nulla similique, voluptas recusandae dolores omnis quod praesentium dolore quos eveniet facere necessitatibus pariatur iusto hic voluptate reiciendis iste iure incidunt ab nam assumenda in maxime numquam. Officia nam quo reprehenderit quasi fugiat eum omnis inventore animi praesentium molestias, iure, alias mollitia odit ducimus quia doloremque a placeat obcaecati eveniet. Natus nihil, et molestiae deserunt quis aliquam id vero vitae, labore ipsam earum sunt odio. Provident tempora, molestiae id dolores nulla nesciunt.'),
];

$categorie = ['azione' => new Categoria (20, 'azione')];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($users as $key => $user) {?>
        <h2><?php echo $key ?></h2>
        <ul>
            <?php foreach ($user as $valore) {?>
                <li><?php echo $valore ?></li>
            <?php } ?>
        </ul>
    <?php } ?>

    <?php foreach ($amministratori as $key => $amministratore) {?>
        <h2><?php echo $key ?></h2>
        <ul>
            <?php foreach ($amministratore as $valore) {?>
                <li><?php echo $valore ?></li>
            <?php } ?>
        </ul>
    <?php } ?>

    <?php foreach ($articoli as $key => $articolo) {?>
        <h2><?php echo $key ?></h2>
        <ul>
            <?php foreach ($articolo as $valore) {?>
                <li><?php echo $valore ?></li>
            <?php } ?>
        </ul>
    <?php } ?>

    <?php foreach ($categorie as $key => $categoria) {?>
        <h2><?php echo $key ?></h2>
        <ul>
            <?php foreach ($categoria as $valore) {?>
                <li><?php echo $valore ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
</body>
</html>