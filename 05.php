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
        <h1>Projeto Controle Remoto</h1>
        <div>
            <?php
                require_once 'ControleRemoto.php';
                $c = new ControleRemoto();
                $c->ligar();
                $c->maisVolume();
                $c->abrirMenu();
            ?>
            
        </div>
    </pre>
</body>
</html>
<!-- Encapsulamento
Pilar = algo que sustenta

3 pilares da POO ou 4 pilares
1) Encapsulamento 
ENCAPSULAR - ocultar partes independentes da implementação, permitindo construir
partes invisívies ao mundo exterior.
- proteção do usuário ao código e do código ao usuário.
- padronizar 
- Um código encapsulado usa molde, e esses moldes padrões fazem com que o código
padrão não importe, não importa como eu vou fazer o código. O que importa é que 
o resultado seja sempre o mesmo.

INTERFACE = lista de serviços fornecidos por um componente. 
    É o contato com o mundo exterior, que define o que pode ser feito com um 
    objeto dessa classe.
Canal de comunicação externa.
Um bom objeto encapsulado possui uma boa interface definida

Vantagens de encapsular
1) Tornar mudanças visívies
2) Facilitar reutilização de código
3) Reduzir efeitos colaterais

Como encapsular?
Exemplo do controle remoto abnerto que poderia danificar alguma parte,
quando colocado uma interface deixa ele seguro.
Encapsulou o motor dnetro ede uma cápsula e encapsulou essa cápsula dentro
de outra cápsula que é o seu carro, o que deixa disponível para o mundo 
exterior só a interface.

Interface só tem métodos. Todos os métodos são públicos.

Métodos abstratos são aqueles que não vai ser desenvolvido na interface,
não vai ter o código lá. Só vai ter a reação.




2) Herança = 
3) Polimorfismo = várias formas de se fazer algo
4) Abstração = abstrair coisas, tornar simples.

-->