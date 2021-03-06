<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <h4>Editar banco</h4>
            <?php echo Form::model($bank,[
                    'route'  => ['admin.banks.update',
                    'bank'   => $bank->id],
                    'method' => 'PUT',
                ]); ?>

                <?php echo $__env->make('admin.banks._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="row">
                    <?php echo Form::submit('Salvar Banco', ['class' => 'btn waves-effect']); ?>

                </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>