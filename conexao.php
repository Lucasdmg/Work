<?php
/** Local onde est� rodando o PHP */
$hostname = 'wb_fait_17.mysql.dbaas.com.br';

/** Banco de dados */
$banco = 'wb_fait_17';

/** Nome de usu�rio que tem acesso */
$username = 'wb_fait_17';

/** Senha do usu�rio */
$senha = 'V9f9gs#xwpd';

/** mysql_connect -- Abre uma conex�o com o servidor MySQL */
$db = mysql_connect($hostname, $username, $senha);

/** mysql_select_db -- Seleciona um banco de dados MySQL */
mysql_select_db($banco, $db);

?>