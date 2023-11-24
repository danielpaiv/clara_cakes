<?php
    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbpassword ='';
    $dbName = 'brownie_pedidos';

    $conexao = new mysqli($dbhost,$dbUsername,$dbpassword,$dbName);

    if($conexao->connect_errno)
   {
       echo "Erro";
   }
   else
   {
       echo "Pedido efetuado com sucesso";
      
   }
   ?>
   <H1>
    <P>OLÁ</P>
   </H1>
   <H2>
    <P>EM BREVE</P>
    <P>ENTRAREMOS</P>
    <P>EM CONTATO!</P>
   </H2>
    
   