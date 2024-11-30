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
    <?php if(Session::has('fail')): ?>
        <span class="alert alert-danger p-2"><?php echo e(Session::get('fail')); ?></span>
    <?php endif; ?>
    <div class="card-body">
        <form action="<?php echo e(route('AddUser')); ?>" method="Post">
<?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nome Completo</label>
                <input type="text" name="name"  value="<?php echo e(old('name')); ?>"  class="form-control" id="formGroupExampleInput" placeholder="Digite o nome completo">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">BI</label>
                <input type="number" name="BI" value="<?php echo e(old('BI')); ?>" class="form-control" id="formGroupExampleInput2" placeholder="Digite o seu numero do BI">
                <?php $__errorArgs = ['BI'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
              <?php $__errorArgs = ['sexo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="text-danger"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
             
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">N° da Bancada</label>
            <input type="number" name="bancada" value="<?php echo e(old('bancada')); ?>" class="form-control" id="formGroupExampleInput2" placeholder="Digite o N° da sua bancada">
            <?php $__errorArgs = ['bancada'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
       

        </div>
    
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Email</label>
                <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control" id="formGroupExampleInput2" placeholder="Digite o seu email">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
    
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Numero Telefone</label>
                <input type="number" name="phone_number" value="<?php echo e(old('phone_number')); ?>" class="form-control" id="formGroupExampleInput2" placeholder="Digite o seu numero">
                <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
    
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">password</label>
                <input type="password" name="password" value="<?php echo e(old('password')); ?>" class="form-control" id="formGroupExampleInput2" placeholder="Digite a tua password">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
    
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Confirm password</label>
                <input type="password" name="password_confirmation"  class="form-control" id="formGroupExampleInput2" placeholder="Confirma password">
                <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
    </div>
    </div>
</body>
</html><?php /**PATH /Users/macbookssd/Desktop/PROJECTOS LARAVEL/Lulu/resources/views/add-user.blade.php ENDPATH**/ ?>