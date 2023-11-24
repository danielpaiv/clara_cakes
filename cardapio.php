
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
      
       body{
        background-color: rgb(206, 215, 29);
        text-align: center;

       }
       h3{
        display: flex;
        justify-content: space-between;
        list-style-type: none;
        align-items: center;
        padding: 16px;
        font-family: Arial, Helvetica, sans-serif;
        color: rgb(60, 255, 0);
       }
       header img{
        
        width: 250px;
        height: 250px;
        border-radius: 40%;
        border: 5px solid rgb(33, 173, 20);
        display: flex;
        justify-content: space-between;
        list-style-type: none;
        align-items: center;
        padding: 16px;
        }
        .cardapio{
        background-color: rgb(7, 184, 107);
        }
        .buton{
            background-image: linear-gradient(to right,rgb(173, 220, 20), rgb(33, 30, 70));
            color: black;
            padding: 10px;
        }
        .buton:hover
    {
        background-image: linear-gradient(to right,rgb(33, 30, 70), rgb(173, 220, 20));
    }
        
        
  
    </style>

</head>
<body>
    <h1 class="cardapio"> 
    <br>    
          <p>cardápio</p>    
    </h1>
   <br>
    <h3 class="Brownie">
        <a href="pagina_inicial.php" class="buton">Pagina inicial</a>
    </h3>

    <header class="img">
        
        <div class="center">
            <legend><b>Brownie na marmita</b></legend>
            <a href="formulario_brownie.php" class="buton">Fazer o Pedido</a>
            <img src="./img/brownie.jpg"></div>              
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis atque, illo, provident, velit sapiente exercitationem mollitia ex facere officia ipsum aliquam architecto? Dolores incidunt veniam reiciendis labore maiores veritatis vel?
            </p>
            <br>
        </div>
        <div class="center">
            <legend><b>Cheesecakes</b></legend>
            <a href="formulario_cheesecake.php" class="buton">Fazer o Pedidos</a>
            <img src="./img/cheesecake.jpg"></div>
            <br>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis atque, illo, provident, velit sapiente exercitationem mollitia ex facere officia ipsum aliquam architecto? Dolores incidunt veniam reiciendis labore maiores veritatis vel?
             </p>
             
        </div>
            
    </header>

</body>
</html>