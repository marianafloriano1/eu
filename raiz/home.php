<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Lateral</title>
    <style>
        /* Estilos para o menu lateral */
        .sidebar {
            height: 100%;
            width: 100px; /* Largura do menu lateral */
            position: fixed;
            top: 0;
            left: 0;
            background-color: #D2C3F3; /* Cor de fundo do menu */
            padding-top: 20px; /* Espaçamento superior */
        }
        
        /* Estilos para a lista do menu */
        .sidebar ul {
            list-style-type: none; /* Remove marcadores de lista */
            padding: 0;
            margin: 0;
        }
        
        /* Estilos para cada item do menu */
        .sidebar ul li {
            padding: 10px;
            color: #fff; /* Cor do texto */
            font-size: 18px; /* Tamanho da fonte */
            cursor: pointer; /* Mostrar cursor ao passar por cima */
        }
        
        /* Estilos para o efeito de hover (quando passa o mouse por cima) */
        .sidebar ul li:hover {
            background-color: #DACFF1; /* Cor de fundo quando passa o mouse */
        }
        .titulo{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: #AB92F3;
            font-size: 70px;
            text-align: center;
        }
       
        .search-container {
    display: flex;
    align-items: center; /* Centraliza verticalmente os elementos */
  }

  /* Estilo para o campo de texto */
  .search-input {
    padding: 10px;
    border: 1px;
    border-radius: 0 5px 5px 0;
    outline: none;
    width: 900px;
    background-color: #BEE1AE;
    margin-top: 20px;

}

  /* Estilo para o botão de pesquisa */
  .search-button {
    padding: 10px 15px;
    color: #EFE5AE;
    border: 1px;
    border-radius: 5px 0 0 5px;
    cursor: pointer;
    outline: none;
    background-color: #BEE1AE;
    margin-top: 20px;

  }
.subtitulo{
  font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 17px ;
    text-align: center;
    margin-top: 20px;
}

    </style>
</head>
<body>
    <!-- Div do menu lateral -->
    <div class="sidebar">
        <!-- Lista de itens do menu -->
        <ul>
            
        <li  style="color: #9FEBE2; font-size:40px; margin-top:40px;" class="bi bi-circle-fill" onclick="window.location.href='generos.php'"></li>
          
          <li  style="color: #F6A4E4; font-size:40px; margin-top:40px;" class="bi bi-circle-fill" onclick="window.location.href='perfil.php'"></li>
         
          <li style="color: #EFE5AE; font-size:40px; margin-top:40px;" class="bi bi-circle-fill" onclick="window.location.href='perfil.php'"></li>
           
        </ul>
    </div>
    <h1 class="titulo">Entre Universos</h1>
    
    <div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-6">
      <div class="search-container">
        <button type="submit" class="search-button"><i class="bi bi-star-fill"></i></button>
        <input type="text" class="search-input" placeholder="">
      </div>
    </div>
  </div>
</div>
<h3 class="subtitulo">Livros populares no momento:</h3>


</body>
</html>
