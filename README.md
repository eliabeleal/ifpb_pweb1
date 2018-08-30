# PROGRAMAÇÃO PARA WEB
## AULA 1

Modelo distribuido, o servidor processa um script e devolve (reponse) uma estrutura.
Servidor processa os dados e devolve uma página.
Padrões do mercado: MVC, active record.

LARAVEL (Framework)

## Unidade I: 

_linguagem PHP 7. É uma linguagem hibrida. Pode ser procedural ou orientada a objeto._

[PHP-FIG!](https://www.php-fig.org/): é uma comunidade que padronizou o PHP

## Unidade II:

COOKIES e sessões: Servidores gravam informações em minha máquina
PHP e HTTP
PHP e formulários HTML
Gerenciamento de Dependência com Composer

## Unidade III:

Laravel Framework
**O que é um Framework:**
É solução previamente pronta para aplicações diversas. Que cria um solução geral. Mas precisa do DEV. 

## SOFWARES
WAMP = PHP + MySQL + Servidor Apache + Windows
PHP é uma linguagem interpretada
COMPOSER

## AULA 2

### Introdução
PHP: Personal Home Page Tools  
PHP pode gerar como resposta vários documentos: HTML, JSON, XML e outros  
É uma liguagem de criação script  
PHP tem como base C, depois de ser PERL  
Existe uma comunidade que se preocupa com os padrões  
Existe uma API unica que se comunica com qualquer SGBD  

### Sintaxa Básica
#### Delimitador de bloco
```php
<?php
  //comandos
?>
```
A extensão do arquivo tem que ser **.php** para ser executado dentro do bloco  
O Apache é usado para ler os arquivos PHP. Usado por default em arquivos estáticos  
http://<ip>:<porta>/script.php
A porta é o local onde o Apache estará rodando
  
Conteúdo estático não tem preprocessamento, por isso se caso for solicitado um arquivo .html o Apache retornará, se houver, uma estrutura .html com aquele mesmo nome.  
Outra forma de rescrita do código php  
```php
<?php
  echo '<html>'
  echo '<body>'
  echo 'Olá mundo'
  echo '</body>'
  echo '</html>'
?>
```
Dessa forma o Apache irá processar o script, da primeira forma o apache apenas envia as tag sem precisar de processar.  

#### Tipo de dados
Não é uma linguagem fortemente tipo. Apartir 5-7 é possível criar tipo de parâmentros
O NULL é um tipo  
O resource é um ponteiro, mas não explicito como é em C

#### Variáveis
Começa com _$_
As Aspas simple e dupla têm comportamentos diferentes. A dupla é sempre interpretada, já a simples não. Esta é entregue da forma que estar.

#### Concatenação
Sempre com *.*

#### Chaves e conteúdos
PHP não é como C que cria indices sequenciais, as chaves podem ser atribuidas dinamicamentes. Quando as chaves não são informadas o interpretador gera automaticamente. Um problema de não indicar que a variável é um array ela se torna uma variável simples.

#### Conversão Automática de tipo
\+ não é um operador sobrecarregado como é em JAVA. Logo,
```php
  <?php
    1 + "2" //3
  ?>
```
Se as aspas simples for usada é interpretado também

#### Tipo MIXED
Corresponde com qualquer tipo. Tanto para retorno quanto para parâmentros de função.

#### Constantes
É referenciada sem o _$_