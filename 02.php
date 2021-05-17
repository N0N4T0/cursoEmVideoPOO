<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <pre>
            <?php
            require_once 'Pen.php';

            $c1 = new Caneta;
            $c1->modelo = "BIC cristal";
            $c1->cor = "Azul";
            
            $c1->rabiscar();
            $c1->tampar();
            
            print_r($c1);
            ?>
       </pre>
    </div>
</body>
</html>
<!-- 
Modificadores de visibilidade
- indicam o nível de acesso aos componentes de uma classe (atributos e métodos).
1) público (+)
a classe atual e todas as outras classes podem ter acesso a ela

2) privado (-)
somente a classe atual tem acesso

3) protected (#)
a classe atual e todas as suas sub-classes



 -->