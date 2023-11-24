<?php
if(isset($_POST['submit']))
{
    print_r('nome:' . $_POST['nome']);
    print_r('<br>');
    
    print_r('telefone:' . $_POST['telefone']);
    print_r('<br>');

    print_r('endereco:' . $_POST['endereco']);
    print_r('<br>');
    
    print_r('numero:' . $_POST['numero']);
    print_r('<br>');
    
    print_r('data_ped:' . $_POST['data_ped']);
    print_r('<br>');
    
    print_r('iten:' . $_POST['iten']);
    print_r('<br>');

    print_r('sabor:' . $_POST['sabor']);
    print_r('<br>');

    print_r('qtde:' . $_POST['qtde']);
    print_r('<br>');

    print_r('valor:' . $_POST['valor']);
    print_r('<br>');

    print_r('pagamento:' . $_POST['pagamento']);
    print_r('<br>');
    
    

      include_once('conexao.php');

      $nome = $_POST['nome'];
      $telefone = $_POST['telefone'];
      $endereco = $_POST['endereco'];
      $numero = $_POST['numero'];
      $data_ped = $_POST['data_ped'];
      $iten = $_POST['iten'];
      $sabor = $_POST['sabor'];
      $qtde = $_POST['qtde'];
      $valor = $_POST['valor'];
      $pagamento = $_POST['pagamento'];
      
      
 
  
     $result = mysqli_query($conexao, "INSERT INTO  pedidos(nome,telefone,endereco,numero,data_ped,iten,sabor,qtde,valor,pagamento)
     VALUES ('$nome','$telefone','$endereco','$numero','$data_ped','$iten','$sabor','$qtde','$valor','$pagamento')");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario | cheesecake</title>
    <style>
        body
        {
            background-color: rgb(206, 215, 29);
        }
        .box
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
            color: white;
        }

        legend
        {
            text-align: center;
        }

        .inputbox
        {
            position: relative;       
        }
        .inputUser
        {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 3px; 
        }
        .labelInput
        {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5px;
            color: white;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput
        {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
    
    #submit
    {
        background-image: linear-gradient(to right,rgb(173, 220, 20), rgb(43, 43, 18));
        width: 100%;
        border: none;
        padding: 10px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        border-radius: 10px;
    }
    #submit:hover
    {
        background-image: linear-gradient(to right,rgb(43, 43, 18), rgb(173, 220, 20));    
    }
    .buton{
        
        background-image: linear-gradient(to right,rgb(173, 220, 20), rgb(33, 30, 70));
        width: 100%;
        border: none;
        padding: 10px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        border-radius: 10px;
    }
    .buton:hover
    {
        background-image: linear-gradient(to right,rgb(33, 30, 70), rgb(173, 220, 20));
    }
    
    </style>
</head>
<body> 
    <div class="box">
        <form action="formulario_cheesecake.php"  method="POST">
            <fieldset>
                <legend><b>Preencha seus dados</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco"class="labelInput">Endereço</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="numero" id="numero" class="inputUser" required>
                    <label for="numero"class="labelInput">Número</label>
                </div>
                <br>

                <label for="data_ped"><b>data_ped</b></label>
                <input type="date" name="data_ped" id="data_ped" required>  
                <br>
                <input type="radio" id="iten" name="iten" value="cheesecake" required>
                <label for="iten">cheesecake</label>

                <p>Escolha o sabor</p>
                <input type="radio" id="Morango" name="sabor" value="Morango" required>
                <label for="sabor">Morango</label>

                <input type="radio" id="Laranja" name="sabor" value="Laranja" required>
                <label for="sabor">Laranja</label>

                <p></p>
                <label for="qtde">Quantidade</label>
                <input type="Number" id="qtde" name="qtde" value="qtde" required>               
                
                <p></p>
                <label for="valor">Valor</label>
                <input type="Number" id="valor" name="valor" value="valor" required>
                
                <br>
                

                <p>Forma de pagamento</p>
                <input type="radio" id="pagamento" name="pagamento" value="pix" required>
                <label for="pagamento">Pix</label>

                <input type="radio" id="pagamento" name="pagamento" value="dinheiro" required>
                <label for="pagamento">Dinheiro</label>

                <input type="radio" id="pagamento" name="pagamento" value="cartao" required>
                <label for="pagamento">Cartão</label>
                
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>

    </div>
    <a href="cardapio.php" class="buton">Voltar</a>
</body>
</html>