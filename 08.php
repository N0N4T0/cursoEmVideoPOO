<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <div>
            <?php
            require_once 'Pessoa08.php';
            require_once 'Aluno08.php';
            require_once 'Professor08.php';
            require_once 'Funcionario08.php';
            
            $p1 = new Pessoa08();
            $p2 = new Aluno08();
            $p3 = new Professor08();
            $p4 = new Funcionario08();

            $p1->setNome("Pedro");
            $p2->setNome("Maria");
            $p3->setNome("Cláudio");
            $p4->setNome("Fabiana");

            $p2->setCurso("Informática");
            $p3->setSalario(2500.75);
            $p4->setSetor("Estoque");

            $p3->receberAum(550.20);
            $p4->mudarTrabalho();
            $p2->cancelarMatr();

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);

            
            ?>
        </div>
    </pre>
</body>
</html>
<!-- 
Herança 
- ma classe nova que pode ser baseada numa classe anterior.
- toda classe filha terá herdado características e comportamentos da mãe

Pode fazer encapsulamento sem fazer herança assim como pode se fazer 
herança sem fazer encapsulamento.

A classe mãe pode ser chamada de PROGENITORA ou SUPERCLASSE
A classe filha pode ser chamada de SUBLCLASSE



 -->