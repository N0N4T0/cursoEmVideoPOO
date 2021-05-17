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
        <?php
        require_once 'Caneta.php';

        $c1 = new Caneta("BIC", "Azul", 0.5);
        print_r($c1);

        $c2 = new Caneta("Mic", "Preto", 1);
        print_r($c2);


        ?>
    </pre>
</body>
</html>

<!-- 
    Métodos especiais

    - formas de dar acesso ao atributo sem dar acesso direto ao atributo,
    isso garante segurança adcional.

    1)Métodos Acessores (GETTERS)
    - São métodos que dão acesso a uma determinada coisa
    - Pegar ou acessar

    2)Métodos Modificadores ou Mutantes (SETTERS)
    - normalmente precisa de um parâmetro para poder funcionar
    - Setar ou passar
    - são mais abstratos que os métodos getters


    PARA CADA ATRIBUTO DEVERÁ TER UM SETTER() E GETTER()


    3)Método Constutor (Construct)
    - o código nesse método executa automaticamente assim que criar um objeto
    como instância de uma nova classe
    - o construtor é declarado como __construct()


    Ex.:
    //Mais Avançado
    Classe Caneta
        Metodo construtor
                (m: Caractere,
                c: Caractere,
                p: Real)
            setModelo(m)
            setCor(c)
            setPonta(p)
            tampar()
        FimMetodo
    FimClasse

    c1 = nova Caneta("BIC", "Azul", "0.5")


    OU

    Classe Caneta
        Metodo construtor()
            tampar()
            cor = "Azul"
        FimMetodo
    FimClasse

    c1 = nova Caneta()
 -->