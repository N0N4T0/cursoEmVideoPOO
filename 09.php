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
            require_once 'Pessoa09.php';
            require_once 'Visitante09.php';
            require_once 'Aluno09.php';
            require_once 'Bolsista09.php';

            // $v1 = new Visitante09();
            // $v1->setNome("Juvenal");
            // $v1->setIdade(33);
            // $v1->setSexo("M");
            // print_r($v1);

            $a1 = new Aluno09();
            $a1->setNome("Pedro");
            $a1->setMatricula(1111);
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();
            print_r($a1);

            $b1 = new Bolsista09();
            $b1->setMatricula(1112);
            $b1->setNome("Jubileu");
            $b1->setBolsa(12.5);
            $b1->setCurso("Administração");
            $b1->setIdade(17);
            $b1->pagarMensalidade();
            print_r($b1);
            
            ?>
        </div>
    </pre>
</body>
</html>
<!-- 
Herança parte 2

- Uma classe progenitora (aquela que origina outras classes) tbm pode ser uma 
subclasse, dependendo do ponto de observaçào;
- todo subclasse herda todas as caracterísitcas de suas ancestrais;


ÁRVORE HIERÁRQUICA
Raiz = classe que não tem superclasses, é aquela que não herda nada de ninguem,
a inicial, as demais herdam dela

Folha = Subclasses que não tem subclasses, classes que não tem filhas

Descendente = a filha da subclasse. Exemplo: a raiz X originou XB, e XB originou
XXB. XXB é descendente de X.

Ancestral = Exemplo: a raiz X originou XB, e XB originou
XXB. X é ancestral de XXB.

Especialização = quando se percorre a árvore de cima para baixo

Generalização = quando se percorre a árvore de baixo para cima


TIPOS DE HERANÇA (ALGUNS DELES)
1)HERANÇA DE IMPLEMENTAÇÃO ou HERANÇA POBRE = é quando alguem herda alguma coisa
e não vai implementar nem atributo nem método

2) HERANÇA PARA DIFERENÇA


- Métodos podem ser sobrescritos


ABSTRATO = 
1) Classe Abstrata = não pode ser instanciada. Só pode servir como progenitora.
    Não pode gerar objetos.
2) Método Abstrato = Declarado, mas nãi implementado na progenitora. 
    Só pode ser colocado dentro de uma INTERFACE ou de uma classe abstrata

FINAL = 
1) Classe Final = não pode ser herdada por outra classe. Obrigatoriamente folha.
    Não pode ter filhos.
2) Método Final = não pode ser sobrescrito pelas suas sub-classes. 
    Obrigatoriamente herdado.


Sobrepor = fazer a mesma coisa de formas diferentes (@Override)


 -->