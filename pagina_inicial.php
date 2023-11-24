<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel paiva</title>
    <style>
    body{
        color: rgb(16, 15, 15);
        background-image: linear-gradient(to right,rgb(173, 220, 20), rgb(43, 43, 18));
        font-family: Arial, Helvetica, sans-serif;
    }
    
    ul{
        display: flex;
        justify-content: space-between;
        list-style-type: none;
        align-items: center;
        padding: 16px;
    }
    
    a{
        color: rgb(14, 13, 13);
        text-decoration: none;
    }
    
    header img{
        width: 550px;
        height: 550px;
        border-radius: 40%;
        border: 5px solid rgb(33, 173, 20);
    }
    
    .center{
        text-align: center;
    }
    
    h1{
        color: rgb(42, 160, 31);
    }
    
    footer img{
        width: 40px;
        height: 20px;
    }
    
    footer{
        display: flex;
        justify-content: center;
    }
    
    .container{
        padding: 7px 60px;
    }
    
    nav a:hover{
        color: green;
    }
    
    .container{
        padding: opx 100px;
    }
    #contact.html{
        background-color: blue;
        color: blue;
    }
    main{
        background-color: rgb(81, 86, 229);
        padding: 30px;
       
        text-align: center;
    }
    .buton{
            
        background-image: linear-gradient(to right,rgb(173, 220, 20), rgb(55, 125, 29));
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
        background-image: linear-gradient(to right,rgb(55, 125, 29), rgb(173, 220, 20));
    }
</style>
</head>
<body>
    <div class="container"> 
        <nav>
            <ul>
                <li>
                    <a href="pagina_inicial.php" class="buton">sobre mim</a>
                </li>
                <li>
                    <a href="project.php" class="buton">projeto</a>
                </li>
                <li>
                    <a href="cardapio.php" class="buton">cardapio</a>
                </li>
            </ul>
        </nav>
        <header>
            <div class="center">
                <img src="./img/trufados.jpg"></div>
            </div>
                <h1>Clara cakes gostosuras</h1>
                <h2>Que seu dia seja doçe</h2>
        </header>
        <br>
            <main class="box">
                <div class="container">
                    <section>
                        <h3>Sobre mim</h3>
                        <p>
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis atque, illo, provident, velit sapiente exercitationem mollitia ex facere officia ipsum aliquam architecto? Dolores incidunt veniam reiciendis labore maiores veritatis vel?
                        </p>
       
                        <h3>Especialidades</h3>
                        <p>
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis atque, illo, provident, velit sapiente exercitationem mollitia ex facere officia ipsum aliquam architecto? Dolores incidunt veniam reiciendis labore maiores veritatis vel?
                        </p>
       
                        <h3>visão</h3>
                        <p>
                           Lorem,  sit amet consectetur adipisicing elit. Quis atque, illo, provident, velit sapiente exercitationem mollitia ex facere officia ipsum aliquam architecto? Dolores incidunt veniam reiciendis labore maiores veritatis vel?
                        </p>
       
                       </section>
                </div>
                
            </main>
        <footer>
            <a href="https://github.com/danielpaiv/projeto_daniel-2-"  target="_blank" rel="noopener noopener" > 
                <img src="./img/github.svg.webp"></img>
                <p>github</p>
            </a>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>