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

 - **Composite**
    - É bastante comum nós precisarmos trabalhar com coleções de itens que podem ter mais de uma implementação. Se essa estrutura pode ser descrita como uma árvore (no modelo computacional), então o padrão Composite pode ser muito útil.
    - O Composite é um padrão de projeto estrutural que permite que você componha objetos em estruturas de árvores e então trabalhe com essas estruturas como se elas fossem objetos individuais.
    - https://refactoring.guru/pt-br/design-patterns/composite

 - **Facade**
    - Em determinados casos, nós podemos precisar de um acesso simplificado a uma parte complexa ou grande do nosso sistema, como autenticação, acesso a sistema de arquivos, cache, etc. Uma classe de fachada, contendo apenas a funcionalidade desejada, pode ser bastante útil.
    - O Facade é um padrão de projeto estrutural que fornece uma interface simplificada para uma biblioteca, um framework, ou qualquer conjunto complexo de classes.
    - https://refactoring.guru/pt-br/design-patterns/facade

 - **Proxy**
    - O Proxy é um padrão de projeto estrutural que permite que você forneça um substituto ou um espaço reservado para outro objeto. Um proxy controla o acesso ao objeto original, permitindo que você faça algo ou antes ou depois do pedido chegar ao objeto original.
    - https://refactoring.guru/design-patterns/proxy

    