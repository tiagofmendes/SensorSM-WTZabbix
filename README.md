1° Passo: Baixar os arquivos PHP e alocar em um servidor web;
2° Passo: Edite o arquivo search_data.php e coloque o IP do seu sensor;
3° Passo: Vá no Zabbix e crie um novo Host e crie uma interface do tipo "SNMP" e coloque o IP do sensor;
4° Passo: Edite o host criado anteriormente e adicione um "Item" do tipo "HTTP Agent" e coloque no campo "Key" com a chave "http_value_search_temp" ou algo da sua preferência;
          Defina o campo "Type of information" como "Numeric (float);
          No campo "URL" coloque o IP/Domínio do servidor onde os arquivos PHP foram hospedados e coloque no fim da URL "/?id=1" (000.000.000.000/sensor/?id=1);
          Defina o campo "Request Type" como "GET";
          Defina o campo "Timeout" para "10s";
          No campo "Host Interface" coloque o IP do sensor com a porta 161 (000.000.000.000:161);
          Por fim clique no botão "add".
Repare que existe no arquivo index.php uma variável que recebe o ID enviado pelo Zabbix. Esse ID é o responsável por pegar os valores de cada chanel do sensor.
Por conta disso, é preciso criar um "Item" para cada chanel do sensor e colocar um ID na URL para defirnir qual é o chanel que será monitorado.
Para este sensor, existem 2 canais para medir temperatura e mais 2 canais para umidade, portanto, para monitorar todos os canais é preciso criar 4 itens definindo os IDs conforme no código.
Os IDs configurados no arquivo index.php vão do 1 ao 4, logo as URLs dos Itens no Zabbix devem conter no final o "/?id=1" onde o número no final é a definição do canal.
          
