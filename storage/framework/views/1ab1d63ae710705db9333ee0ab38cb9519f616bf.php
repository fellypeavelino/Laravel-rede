<?php $__env->startSection('title'); ?>Welcome!<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="row">
        <div class="col-md-6">
            <h3>Cadastrar</h3>
            <form action="<?php echo e(route('signup')); ?>" method="post">
                <div class="form-group <?php echo e($errors->has('email')? 'has-error' : ''); ?>">
                    <label for="email">Seu E-mail</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo e(Request::old('email')); ?>">
                </div>
                <div class="form-group <?php echo e($errors->has('first_name')? 'has-error' : ''); ?>">
                    <label for="first_name">Seu Nome</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo e(Request::old('first_name')); ?>">
                </div>
                <div class="form-group <?php echo e($errors->has('password')? 'has-error' : ''); ?>">
                    <label for="password">Sua Senha</label>
                    <input type="password" class="form-control" name="password" id="password" value="<?php echo e(Request::old('password')); ?>">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>

                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>" />
            </form>
        </div>
        <div class="col-md-6">
            <h3>Acessar</h3>
            <form action="<?php echo e(route('signin')); ?>" method="post">
                <div class="form-group">
                    <label for="email">Seu E-mail</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo e(Request::old('email')); ?>">
                </div>
                <div class="form-group">
                    <label for="password">Sua Senha</label>
                    <input type="password" class="form-control" name="password" id="password" value="<?php echo e(Request::old('password')); ?>">
                </div>
                <button type="submit" class="btn btn-primary">Acessar</button>
                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>" />
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>