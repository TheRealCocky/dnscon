<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zungueira CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    {{-------AQUI VAI FICAR A LISTA DE TODOS USUARIOS-----}}
    <div class="contaner">
        <div class="card">
            <div class="card-head">
                Zungueira CRUD
                <a href="/add/user" class="btn btn-success btn-sm float-end">Add Novo</a>
            </div>
            @if (Session::has('success'))
            <span class="alert alert-success p-2">{{Session::get('success')}}</span>
        @endif
        @if (Session::has('fail'))
            <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
        @endif
            <div class="card-body">
              <table class="table table-sm tablz-striped table-bordered">
                <thead>
                <th>S/N</th>
                <th>Nome Completo</th>
                <th>BI</th>
                <th>Sexo</th>
                <th>N° Bancada</th>
                <th>Email</th>
                <th>Numero de Telefone</th>
                <th> Data de Registro</th>
                <th>Ultima Actualização</th>
                <th colspan="2">Ação</th>
                
                </thead>
                <tbody>
                @if (count($all_users)>0)
                     @foreach ($all_users as $item)
                           <tr>
                               <td>{{$loop->iteration}}</td>
                               <td>{{$item->name}}</td>
                               <td>{{$item->bi}}</td>
                               <td>{{$item->sexo}}</td>
                               <td>{{$item->nbancada}}</td>
                               <td>{{$item->email}}</td>
                               <td>{{$item->phone_number}}</td>
                               <td>{{$item->created_at}}</td>
                               <td>{{$item->updated_at}}</td>
                              
                               <td><a href="/edit/{{$item->id}}" class="btn btn-primary btn-sm">Editar</a></td>
                               <td><a href="/delete/{{$item->id}}" class="btn btn-danger btn-sm ">Apagar</a></td>
                               
                            </tr> 
                @endforeach
    
               @else
    <tr>
        <td colspan="8"> Nenhuma Zungueira Encontrada!</td>
    </tr>
               @endif
                </tbody>
              </table>
            </div>
        </div>
    </div>
</body>
</html>