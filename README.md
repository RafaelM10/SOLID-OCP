# Aplicação do principio SOLID em php o famoso OPEN-CLOSED PRINCIPLE
Um dos principios mas dificeis de serem aplicados, tem como objetivo trabalhar diretamente com a manutenção das classes e tem como premissa está frase “Você deve ser capaz de estender um comportamento de uma classe sem a necessidade de modificá-lo.” 

## Utilizando nesse mini projeto de extrair e ler CSV e TXT: 
Neste mini projeto você vera que foi utilizado uma pasta chamada extrator onde nela temos 3 classes 1-Arquivo, 2-Txt e 3-Csv. não limitando a classe lerArquivo que temos dentro da nossa classe Leitor com varios if e elseif e sim alterando a classe para que ela compreenda o funcionamento de que Caso seja CSv extraia através da classe Csv.php e o mesmo segue para o txt facilitando a implementação de novos métodos.
- Single Responsability Principle
- Open/Closed Principle

### Utilizando SOLID temos um código
- Modular e testável.
- Código limpo e de facil compreensão.
- se uma classe precisar ser alterada, apenas um aspecto do sistema será afetado, minimizando o impacto em outras partes do código.
