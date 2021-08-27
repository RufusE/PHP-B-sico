<?php

//VARIÁVEIS
//============================================

#São usadas para guardar dados:números,textos,etc.
#podemos apresentar e modificar os seus valores ao longo
#do código 

#definem-se com um dollar ($) e um identificador (nome da variável)
$variavel;

#podemos definir e iniciar uma variável
//$variavel = 100;

#podemos alterar o tipo de valores de uma variável
//$variavel = "teste";

#as variáveis são Case Sensitive
//$variavel = "uma variável";
//$Variável = "outra variável";

/* formas mal definidas
$1var = 0;
$!var = 0;
$variavel(1) = 0;
$variavel um = 0;
$variavel-um = 0;


$var1 = 0;
$var_um = 0;
$varUm = 0;
$_um = 0;
$_1 = 0;

*/

#convenções 
/*
$umaVariavel = 0; # camel case
$uma_variavel = 0; #com underscore (snake case)
$Umavariavel = 0; #studly case (não recomendado) 
*/

#DEVE SER SEMPRE MANTIDO O MESMO ESTILO AO LONGO DO PROJETO

$variavel = 100;
echo $variavel;