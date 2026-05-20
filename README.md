# Explicação <3
# Miguel Araujo

## 1- Login Vuneral
   O codigo define o email e a senha como espaços a serem definidos
   utilizando o stmt que prapara o banco para ler os comandos e enviar as devidas respostas, separando cada pedido
   com os valores enviados separadamente, eles são lidos como Strings (ss), desse modo o comando '1'='1' não tem efeito por não ser lido como string individual. Se ele receber os dados corretamente os executará.

## 2- Id vuneravel 

  o primeiro codigo o "OR 1=1 " faz com que ele leia toda sintatica junta sem separar ela sendo interpretada como um comando logico e nao como um dado o "1=1" e sempre verdadeiro. O seguro o comando `prepare()` faz com que seja dois passos diferentes
   -O primeiro passo: o PHP envia a estrutura do codigo apenas o sinal de interogação
   -Segundo passo ele envia os valores pelo `bind_param` enviando os valores da variavel $id.

## 3- Pesquisa invulneravel

   Ao executar o codigo inteiro, ele fica aberto a codigos maliciosos. Ao separar os codigos em duas etapas, o codigo malicioso não tem mais efeito. 
   Alterando a maneira do "LIKE" ajuda a tornar o codigo mais seguro, respondendo a "%" (Porcentagem) sem dar conflito, definindo como parte de busca do codigo.