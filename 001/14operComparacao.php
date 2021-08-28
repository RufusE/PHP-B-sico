<?php

#OPERADORES DE COMPARAÇÃO
#Permitem efetuar uma comparação entre valores.
#Verificam se os valores são iguais, diferentes, maiores ou menores, ou do mesmo tipo

#O resultado da comparação será sempre o valor 
# verdadeiro (true)
#ou
#falso (false)

#valores são iguais?
$a = (2 == 3);  #false
$a = (100 == 100); #true
$a = (50 == '50'); #true -- verifica se o valor da string é correta
$a = (50 === '50'); #false  -- verifica o valor e verifica o tipo


#valores são diferentes?
$a = (2 != 3); #true
$a = (2 <> 3); #true (alternativo)
$a = (50 != 50); #false
$a = (50 != '50'); #false
$a = (50 !== '50'); #true

#operadores de comparação com 3 símbolos, comparam valor e tipo de valor
# ===
# !==

#valores são maiores ou menores?
$a = (2 > 3);   #false
$a = (2 < 3);   #true
$a = (50 >= 50); #true
$a = (50 <= 50); #true
$a = (50 < 50); #false

#Operador de comparação designado por spaceship operator 
# <=>         
#resultados obtido são três: '0' , '1' , '-1'

$x = 1 <=> 1;  # 0  (1==1)
$x = 3 <=> 2;  # 1  (3 > 2)
$x = 1 <=> 2;  # -1 (1 < 2)















