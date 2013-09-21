<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './conf.inc.php';
        include './paginacao.php';
        $conf = new Conf();
        $conf->conectar();
        
        $sql = "SELECT * FROM historico ORDER BY id DESC";
        $resultado = mysql_query($sql);

        //CONTEUDO
        while ($linha2 = mysql_fetch_array($resultado)){
        echo $nome = $linha2["acao"]."<br/>";
        }
        //FIM CONTEUDO
        
        /*
         * Estancia da classe paginação
         * precisa passar por parâmetro mysql_query e 
         * Números de registros por página
         */
        $nav = new Paginacao();
        $nav->linkNavegacao($resultado,10);
       
        ?>
    </body>
</html>
