### Instação da aplicação

Para esse projeto você vai **precisar ter o docker instalado** na sua Máquina

1. Faça o clone do projeto
  ```
   git clone https://github.com/jhonattasantos/desafio-indra.git desafio-jhonatta
  ```
2. Entre no diretorio
  ```
   cd desafio-jhonatta
  ```

3. Rode os comando abaixo para subir a aplicação(*Obs: A 15000 vai ser utilizada*):
```
make prepare
make up
```

4. Entre no navegador e acesse http://localhost:15000/

5. Para rodar os teste use o comando
```
make test
```

# Desafio Indra - Vaga para programador PHP

Por favor leiam este documento do começo ao fim, com muita atenção. <br>
O intuito deste teste é avaliar seus conhecimentos técnicos em programação. <br>
O teste consiste em resolver 3 desafios, utilizando a linguagem de programação PHP. <br>

# Instruções para entrega do desafio

1. Primeiro, faça um fork deste projeto para sua conta no Github.
2. Em seguida, baixe o repositório em seu ambiente local.
3. Cada desafio deverá ser respondido em um arquivo destinado a ele, nomeado com o título do mesmo (ex: apresentando-hello-word.php), dentro de uma pasta `src`.
4. Os desafios precisam ser respondidos utilizando da versão 5.* do PHP. Nenhum framework deverá ser utilizado.
5. O uso de Docker, composer se faz opcional. Como também o uso de TDD e de comentários (pontos extras se forem aplicados).
6. Os testes não precisam ser completos até a data limite, iremos por avaliar sua lógica e qual caminho você pensou como solução.
7. Por fim,faça o envio do projeto ou o fork/link para o email <pvictora@minsait.com>.

# Desafios

## Cor de um resistor

Se você quiser construir algo usando um Raspberry Pi, provavelmente usará resistores. Para este exercício, você precisa saber duas coisas sobre eles:

* Cada resistor tem um valor de resistência.
* Os resistores são pequenos - tão pequenos que, se você imprimir o valor da resistência neles, seria difícil de ler.

Para contornar esse problema, os fabricantes imprimem bandas codificadas por cores nos resistores para denotar seus valores de resistência. Cada banda tem uma posição e um valor numérico.

As 2 primeiras bandas de um resistor têm um esquema de codificação simples: cada cor é mapeada para um único número.

Neste exercício, você criará um programa útil para não precisar se lembrar dos valores das bandas.

Essas cores são codificadas da seguinte forma:

* Preto: 0
* Marrom: 1
* Vermelho: 2
* Laranja: 3
* Amarelo: 4
* Verde: 5
* Azul: 6
* Violeta: 7
* Cinza: 8
* Branco: 9

O objetivo deste exercício é criar uma maneira:

* verificar se a cor informada existe na lista.
* exibir o valor númerico da cor informada de acordo com a tabela.


## Distância de Hamming entre duas fitas de DNA

Calcule a distância de Hamming entre duas fitas de DNA.

Seu corpo é feito de células que contêm DNA. Essas células se desgastam regularmente e precisam ser substituídas, o que elas conseguem ao se dividir em células-filhas. Na verdade, o corpo humano médio passa por cerca de 10 quatrilhões de divisões celulares durante a vida!

Quando as células se dividem, seu DNA também se replica. Às vezes, durante esse processo, ocorrem erros e pedaços únicos de DNA são codificados com as informações incorretas. Se compararmos duas fitas de DNA e contarmos as diferenças entre elas, podemos ver quantos erros ocorreram. Isso é conhecido como "Distância de Hamming".

Lemos o DNA usando as letras C,A,G e T. Duas fitas podem se parecer com isso:

Exemplo de fitas |
-----------------|
GAGCCTACTAACGGGAT|
CATCGTAATGACGGCCT|

Elas têm 7 diferenças e, portanto, a distância de Hamming é 7.

A distância de Hamming é útil para muitas coisas na ciência, não apenas na biologia, por isso é uma boa frase para se familiarizar :)

A distância de Hamming é definida apenas para sequências de comprimento igual, portanto, uma tentativa de calculá-la entre sequências de comprimentos diferentes não deve funcionar. O tratamento geral dessa situação (por exemplo, gerar uma exceção versus retornar um valor especial) pode diferir entre os idiomas.


## Números Múltiplos

Escreva um programa que imprima todos os números de 1 a 100. No entanto, para múltiplos de 3, em vez do número, imprima “Indra”. Para múltiplos de 5, imprima "Minsait". Para números que são múltiplos de 3 e 5, imprima “Indra Minsait”.

Mas aqui está o problema: você pode usar apenas um `if`. Sem ramificações múltiplas, operadores ternários ou `else`.

---

### Boa sorte! :D
