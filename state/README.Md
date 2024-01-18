Neste caso vamos supor que o orçamento pode receber um desconto extra
por exemplo por que o cliente está chorando desconto, porém,
dependendo do estado que o orçamento se encontra não poderá ter desconto,
um orçamento finalizado não terá como ser aplicado desconto, então
implementemos aqui um padrão state, onde definimos cada classe como
um estado para o orçamento e a cada "passo" que o orçamento da ele recebe
uma nova instancia de state que sabe lidar com suas proprias responsabilidades.
