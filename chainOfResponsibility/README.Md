Neste padrão temos um comportamento em cadeia
onde caso um desconto não se encaixe, outro desconto pode
se encaixar, tendo assim uma sequencia de descontos a serem testados
utilizando este padrão de cadeia de responsabilidades (chain of responsibility)
conseguimos colocar o peso de um novo disconto na criação de uma nova classe
que extende a Discount, e apenas adicionando-a ao array na sequência em que queremos.

Não tenho certeza se implementei da melhor forma possível pois existe uma parte do código que está sempre se repetindo, porém a ideia é treinar o conceito do chain e melhorar minha experiência como programador ^^.