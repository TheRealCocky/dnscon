<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <title>Título da página</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style>
body{
    background-image:url(12.jpg);
 text-align: center;
 font:bold;
 background-color: ;
  }
  .img{
    color:blue;
    position: center;
  }


</style>
  </head>

  <body>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/users">Zungueiras</a></li>
        <li class="breadcrumb-item"><a href="/add/user">Cadastrar</a></li>
        <li class="breadcrumb-item active" aria-current="/edit/">Editar</li>
      </ol>
    </nav>

    <img src="'/Users/macbookssd/Desktop/Lulu/fotos/12.jpg" alt="..." class="rounded">
    <img src="{{ asset('/Users/macbookssd/Desktop/Lulu/fotos/12.jpg') }}" />
    <img  src='/Users/macbookssd/Desktop/Lulu/fotos/12.jpg' />
    <img src="{{ '/Users/macbookssd/Desktop/Lulu/fotos/12.jpg'}}">
    <img src="{{ public_path('/Users/macbookssd/Desktop/Lulu/fotos/12.jpg') }}">
  
    
         
       
        <div class="alert alert-secondary" role="alert">
          O Vendedor ambulante tambem merece respeitoe dignidade
    
          <p> Faça o seu Cadastro e seja legal!</p>
          <p> Juntos por uma Angola Organizada</p>
        </div>
     
      <a href="/add/user" class="btn btn-primary">Cadastrar</a>
   
  </body>
</html>