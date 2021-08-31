<?php

#STRINGS

#Uma string é uma série de caracteres que podem ser guardados numa variável.
#Podemos definir uma string como sendo um conjunto de letras, espaços, símbolos e algarismosque
#Normalmente designamos por texto.

#Em PHP, as strings podem ser deliminadas por
#aspas simples ' (single quote)
#aspas duplas " (double quote)

$a = 'Esta é uma string';
$b = "Esta é outra string";

echo $a;
echo '<br>';
echo $b;

#Nas PSRs não existe uma orientação definida. Devemos ser consistentes ao longo do nosso código.

#CONCATENAÇÃO DE STRINGS
#É o processo que, através do código, permite juntar várias strings.
#Existem dois operadores de concatenação:

# .
# .=

$a = 'Joao'.' '.'Ribeiro'; #o ponto liga as diferentes strings

$b = 'Joao';
$b .= ' '.'Ribeiro'; # .= faz uma concatenação com valor já existente na string

echo '<br>';
echo $a;
echo '<br>';
echo $b;
//die();

$nome = 'Joao';
$apelido = 'Ribeiro';
$nome_completo = $nome .' '.$apelido;

echo '<br><br>';
echo $nome_completo;


#a diferença entre string delimitadas por ' e por " é que, no segundo caso,
#podemos fazer o seguinte:

echo '<br><br>';
$nome = 'Joao';
$apelido = 'Ribeiro';

echo 'Diferença entre aspas';
echo '<br>';
$nome_completo = "$nome $apelido";

echo '<br>';
echo $nome_completo;

echo '<br>';
$nome_completo = '$nome $apelido';

echo '<br>';
echo $nome_completo;

#Ao contrário das ", nas strings ' as variáveis não são interpretadas 
#relativamente ao seu valor (Parse)

#======================================================================
#HEREDOC e NOWDOC (outras formas de delimitação)
#Apesar de não serem muito comuns, podem ser usadas para tratamento de  maiores blocos de texto

#HEREDOC -  Permite fazer o parse de variáveis
echo '<br>';
$cliente = 'Joao ribeiro';
$email = 'seuemail@gmail.com';

$texto = <<<LABEL
Olá, Sr. $cliente.
Enviamos o regulamento para seu email $email
Obrigado pela sua simpatia.
LABEL;

echo $texto;

die();


#NOWDOC - Não permite parse de variáveis
$texto = <<<'LABEL'
Olá, Sr. $cliente.
Enviamos o regulamento para seu email $email
Obrigado pela sua simpatia.
LABEL;







