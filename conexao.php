<?php
/** Local onde está rodando o PHP */
$hostname = 'wb_0000_17.mysql.dbaas.com.br';

/** Banco de dados */
$banco = 'wb_00000_17';

/** Nome de usuário que tem acesso */
$username = 'wb_0000_17';

/** Senha do usuário */
$senha = 'senha';

/** mysql_connect -- Abre uma conexão com o servidor MySQL */
$db = mysql_connect($hostname, $username, $senha);

/** mysql_select_db -- Seleciona um banco de dados MySQL */
mysql_select_db($banco, $db);

?>
