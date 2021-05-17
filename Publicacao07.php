<?php

// A interface só tem a descrição, a especificação de quais são os métodos 
// públicos e que ficarão disponíveis nos objetos que forem dessa classe
// e utiliza essa interface
interface Publicacao07{
    function abrir();
    function fechar();
    function folhear($p);
    function avancarPag();
    function voltarPag();
}