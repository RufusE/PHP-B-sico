<?php

#OPERADORES LÓGICOS

#Os operadores lógicos são frequentemente usados com os operadores de comparação
#Eles permitem 'ligar' várias comparações avaliando se são verdadeiras ou falsas 

#No Php a construção correta de instruções condicionais depende destes operadores 
#(instruções condicionais verificam se uma situação é verdadeira(true) ou falsa(false))

$a = 100;
$b = 200;

$x = ($a < $b) && ($a < 1000); #AND -> true
$x = ($a > $b) || ($a > 1000); #OR -> false
$x = ($a > 150) && ($b > 500); #false
$x = ($a > 10) || ($b > 500); #true 
$x = ($a == 100) && ($b < $a); #false

#OPERADORES LÓGICOS

$a = false;

$x = !$a;  #NOT -> TRUE 

#OPERADORES LÓGICOS

# &&
# ||
# and
# or
# xor

# NOTA
# Existem os operadores BitWise.
# Servem para analisar valores binários de números
# Existe precedência de operadores. Vamos ver ao longo do curso com exemplos.






