Neste cenário temos um processo que gera o pedido, implementamos a geração
do pedido e alguns logs no final, em uma aplicação real onde temos varias entradas
para este processo como API, Terminal, Web, é importante lidarmos com o encapuslamento
dessa parte do código corretamente.

Com o design Command podemos separar o Command de gerar a ordem e uma classe e apenas
chama-la para ser executada em qualquer contexto que precisarmos, sem duplicar código.
Este padrão de Command e CommandHandler se veio pela necessidade de sistemas
com arquiteturas hexagonais ou camadas, onde temos os usecases que são como os Handlers.
Estes Handlers sabem como lidar com o que precisa, e está aberto para receber
dependências do lado de fora.
