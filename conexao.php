<?php
/** Local onde está rodando o PHP */
$hostname = 'wb_fait_17.mysql.dbaas.com.br';

/** Banco de dados */
$banco = 'wb_fait_17';

/** Nome de usuário que tem acesso */
$username = 'wb_fait_17';

/** Senha do usuário */
$senha = 'V9f9gs#xwpd';

/** mysql_connect -- Abre uma conexão com o servidor MySQL */
$db = mysql_connect($hostname, $username, $senha);

/** mysql_select_db -- Seleciona um banco de dados MySQL */
mysql_select_db($banco, $db);

?>