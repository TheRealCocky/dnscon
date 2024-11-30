<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD nova Zungueira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <div class="caed">
    <div class="card-header">Add novas zungueiras</div>
    @if (Session::has('fail'))
        <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
    @endif
    <div class="card-body">
        <form action="{{route('AddUser')}}" method="Post">
@csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nome Completo</label>
                <input type="text" name="name"  value="{{old('name')}}"  class="form-control" id="formGroupExampleInput" placeholder="Digite o nome completo">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">BI</label>
                <input type="number" name="BI" value="{{old('BI')}}" class="form-control" id="formGroupExampleInput2" placeholder="Digite o seu numero do BI">
                @error('BI')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
              
            <div class="mb-3">
               <fieldset>
                <legend for="formGroupExampleInput2" class="form-label" >Sexo</legend>
                <p>
                  <input type="radio" name="sexo" id="formGroupExampleInput2" value="Masculino" />
                  <label for="formGroupExampleInput2">Masculino</label>
                </p>
                <p>
                  <input type="radio" name="sexo" id="formGroupExampleInput2" value="Feminino" />
                  <label for="formGroupExampleInput2">Feminino</label>
                </p>
              
              </fieldset>
              @error('sexo')
              <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
             
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">N° da Bancada</label>
            <input type="number" name="bancada" value="{{old('bancada')}}" class="form-control" id="formGroupExampleInput2" placeholder="Digite o N° da sua bancada">
            @error('bancada')
            <span class="text-danger">{{$message}}</span>
        @enderror
       

        </div>
    
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Email</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" id="formGroupExampleInput2" placeholder="Digite o seu email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
    
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Numero Telefone</label>
                <input type="number" name="phone_number" value="{{old('phone_number')}}" class="form-control" id="formGroupExampleInput2" placeholder="Digite o seu numero">
                @error('phone_number')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
    
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">password</label>
                <input type="password" name="password" value="{{old('password')}}" class="form-control" id="formGroupExampleInput2" placeholder="Digite a tua password">
                @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
    
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Confirm password</label>
                <input type="password" name="password_confirmation"  class="form-control" id="formGroupExampleInput2" placeholder="Confirma password">
                @error('password_confirmation')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
    </div>
    </div>
</body>
</html>