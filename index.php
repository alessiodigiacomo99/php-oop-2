<?php
/**
 * @author alessio alessio@gmail.com
 * @copyright 2021 alessio
 */

class User {
    public $nome;
    public $cognome;
    public $età;
    public $email;
    public function __construct(string $nome, string $cognome, int $età, string $email) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->età = $età;
        $this->email = $email;
    }
}

$users = ['piero' => new User('piero', 'di poero', 30, 'ppp@gmail.com'), 'alessio' => new User('Alessio', 'Di Giacomo', 21, 'alessio@gmail.com')]

/* var_dump($piero, $gianni) */

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
</body>
</html>