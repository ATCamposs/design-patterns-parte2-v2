**Padrões de projeto Parte 2: Padrões estruturais**

 - **Adapter**
    - Quando precisamos utilizar código legado ou código de componentes externos em nosso sistema, é muito comum não ter a interface (métodos públicos) batendo com o que a gente precisa, então nesses casos nós criamos adapters.
    - _O Adapter é um padrão de projeto estrutural que permite objetos com interfaces incompatíveis colaborarem entre si._
    - https://refactoring.guru/pt-br/design-patterns/adapter

 - **Bridge**
    - Em casos bem específicos, durante o desenvolvimento do sistema, podemos nos deparar com uma estrutura de classes que pode acabar crescendo indefinidamente por dois motivos diferentes. Duas características distintas. No nosso simples exemplo, seria pelo conteúdo que seria exportado, e pelo formato em que esse conteúdo seria salvo.
    - _O Bridge é um padrão de projeto estrutural que permite que você divida uma classe grande ou um conjunto de classes intimamente ligadas em duas hierarquias separadas—abstração e implementação—que podem ser desenvolvidas independentemente umas das outras._
    - https://refactoring.guru/pt-br/design-patterns/bridge

 - **Decorator**
    - O padrão Decorator é muito poderoso e bastante comum de ser implementado, mas possui alguns detalhes importantes a serem observados, como o fato do Decorator precisar possuir a mesma interface do objeto que ele está decorando.
    - O Decorator é um padrão de projeto estrutural que permite que você acople novos comportamentos para objetos ao colocá-los dentro de invólucros de objetos que contém os comportamentos.
    - https://refactoring.guru/pt-br/design-patterns/decorator