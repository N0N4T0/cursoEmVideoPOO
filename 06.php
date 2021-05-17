<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ULTRA EMOJI COMBAT</title>
</head>
<body>
    <pre>
        <div>
            <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';

            $l = array();

            $l[0] = new Lutador(
                "Pretty Boy",
                "França", 
                31, 
                1.75,
                68.9,
                11,
                2,
                1
            );
            $l[1] = new Lutador(
                "Putscript",
                "Brasil",
                29,
                1.68,
                57.8,
                14,
                2,
                3
            );
            $l[2] = new Lutador(
                "SnapShadow",
                "EUA",
                35,
                1.65,
                80.9,
                12,
                2,
                1
            );
            $l[3] = new Lutador(
                "Dead Code",
                "Austália",
                28,
                1.93,
                81.6,
                13,
                0,
                2
            );
            $l[4] = new Lutador(
                "UFOCobol",
                "Brasil",
                37,
                1.70,
                119.3,
                5,
                4,
                3
            );
            $l[5] = new Lutador(
                "Nerdaart",
                "EUA",
                30,
                1.81,
                105.7,
                12,
                2,
                4
            );

            $UEC01 = new Luta();
            $UEC01->marcarLuta($l[4], $l[5]);
            $UEC01->lutar();
            
            ?>
        </div>
    </pre>
</body>
</html>
<!-- 
Relacionamento entre Classes

1) Agregação 
- representado por uma linha sólida com um losangulo na ponta 
- é conhecido como uma relação "tem 1"

Tipo abstrato de dados 
- nesse caso, eu vou ter uma instância de lutador e essa instância de lutador
vai ser o meu desafiado. Cria uma relação entre esse tipo abstrato e uma instância
de uma determinada classe.
 -->