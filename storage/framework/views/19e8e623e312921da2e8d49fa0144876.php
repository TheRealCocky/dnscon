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
    
    <div class="contaner">
        <div class="card">
            <div class="card-head">
                Zungueira CRUD
                <a href="/add/user" class="btn btn-success btn-sm float-end">Add Novo</a>
            </div>
            <?php if(Session::has('success')): ?>
            <span class="alert alert-success p-2"><?php echo e(Session::get('success')); ?></span>
        <?php endif; ?>
        <?php if(Session::has('fail')): ?>
            <span class="alert alert-danger p-2"><?php echo e(Session::get('fail')); ?></span>
        <?php endif; ?>
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
                <?php if(count($all_users)>0): ?>
                     <?php $__currentLoopData = $all_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                               <td><?php echo e($loop->iteration); ?></td>
                               <td><?php echo e($item->name); ?></td>
                               <td><?php echo e($item->bi); ?></td>
                               <td><?php echo e($item->sexo); ?></td>
                               <td><?php echo e($item->nbancada); ?></td>
                               <td><?php echo e($item->email); ?></td>
                               <td><?php echo e($item->phone_number); ?></td>
                               <td><?php echo e($item->created_at); ?></td>
                               <td><?php echo e($item->updated_at); ?></td>
                              
                               <td><a href="/edit/<?php echo e($item->id); ?>" class="btn btn-primary btn-sm">Editar</a></td>
                               <td><a href="/delete/<?php echo e($item->id); ?>" class="btn btn-danger btn-sm ">Apagar</a></td>
                               
                            </tr> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
               <?php else: ?>
    <tr>
        <td colspan="8"> Nenhuma Zungueira Encontrada!</td>
    </tr>
               <?php endif; ?>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH /Users/macbookssd/Desktop/Lulu/resources/views/users.blade.php ENDPATH**/ ?>