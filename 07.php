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
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $p[0] = new Pessoa("Pedro", 22, "M");
            $p[1] = new Pessoa("Maria", 31, "F");

            $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
            $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);
            
            $l[0]->abrir();
            $l[0]->folhear(10);
            $l[0]->voltarPag();
            $l[0]->detalhes();

            $l[1]->detalhes();

            $l[2]->detalhes();
            
            ?>
        </div>
    </pre>
</body>
</html>

<!-- Recapitualação
- Um objeto é uma construção de software que enacpsula estado e comportamento (ou
daos e funções ou atributos e métodos).
- uma classe define os atributos e comportamentos compartilhados
por um tipo de objeto.
- em uma Linguagem POO pura, tudo é um objeto, desde os tipos mais básicos.

Atributo = característica de uma classe que é visível
Classe = define os atributos e comportamentos comuns
Comportamento = ação executada por um objeto
Domínio = espaço onde o problmea reside
Objeto = construção de software que encapsula estado e comportamento

Variável interna = atributo
Funcionalidades internas = comportamentos
Estado = conjunto de valores dentro das variáveis internas

Construtor = métodos usados para inicializar objetos durante a instanciação
Acessor = métodos que dão acesso aos dados internos
Mutante = métodos que permitem que se altere o estado de um objeto
Tipos = define as diferentes espécies de valores que podem ser usados

Classe = define os atributos e comportamentos
Interface = define o que a entidade pode fazer com o objeto 
Construtor = utilizado para inicializar objetos
Objeto = instanciação de uma classe

Encapsulamento = a proteção de atributos e operações das classes, fazendo com 
que estas se comuniquem com o meio externo por meio de suas interfaces

Quando se utiliza o conceito de encapsulamento da POO, enquanto a IMPLEMENTAÇÃO
define os detalhes internos do componente, a INTERFACE lista os serviços 
fornecidos por ele.

- classes são tipos abstratos de dados;
- objetos são instâncias de uma classe;
- subclasse é uma classe definida por meio de outra classe.
-->