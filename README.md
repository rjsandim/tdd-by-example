# TDD-by-example
It's a repository about my study about TDD following the examples available on Kent Beck book: Test-Driven Development - By Example.

## Capítulo 01: Dinheiro Multi-Moeda

- Comece pelos testes
- Faça o mínimo para fazer o teste passar
- Lembre-se do ciclo:
  1. Adicione um pequeno teste
  2. Rode todos os testes e falhe
  3. Faça uma pequena mudança
  4. Rode todos os testes e seja bem-sucedido
  5. Refatore para remover duplicação
- Se a dependência é o problema, a duplicação é o Sintoma.
- TDD não é sobre darmos passos pequeninos; é sobre sermos capazes de dar passos pequeninos.

## Capítulo 02: Degenerar Objetos

- O Objetivo é código limpo que funciona
- Como chegar rapidamente ao "verde"?
    1. Engane-o - retorne uma constante e gradualmente substitua contantes por variáveis até ter o código real.
    2. Use a implementação óbvia - codifique a implementação real.
    3. Triangulação: ver Capítulo 03.
    
## Capítulo 03: Igualdade para Todos

- A vantagem de se usar um ValueObject é que não temos que nos preocupar com sinônimos (objetos que apontam para o mesmo endereço na memória).
- Estratégia da triangulação - Levando como analogia a triangulação de distâncias ente duas radios através de um receptor. Podemos criar um teste e fornecer uma solução que semrpe funcionará em uma determinada condição. Então, podemos criar uma situação onde o valor fixado não atenderá. Logo este é o momento de generalizar. Perceba que  fomos "triangulando" até a solução adequada.
- A triangulação é sugerida quando as idéias não estão surgindo. Ela nos ajuda a tomar uma direção.

## Capítulo 04: Privacidade

- Conceitualmente, nosso teste deverá nos informar que a operação "times" deveria nos devolver um ValueObject do valor multiplicado, portanto, devemos mudar este teste.
- Com TDD não estamos lutando pela perfeição. Ao dizer tudo de duas formas, como código e como teste, esperamos reduzir nossos defeitos o suficiente para seguir em frente com confiança.

## Capítulo 05: Falando Francamente

Em breve.