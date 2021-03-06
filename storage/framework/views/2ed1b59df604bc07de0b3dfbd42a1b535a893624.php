<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>O que você tem a dizer?</h3></header>
            <form action="<?php echo e(route('post.create')); ?>" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Seu pensamento.."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Postar</button>
                <input type="hidden" value="<?php echo e(Session::token()); ?>" name="_token" />
            </form>
        </div>
    </section>

    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>O que seus amigos estão dizendo..</h3></header>
            <?php foreach($posts as $post): ?>
            <article class="post" data-postid="<?php echo e($post->id); ?>">
                <p><?php echo e($post->body); ?></p>
                <div class="info">
                    Postado por <?php echo e($post->user->first_name); ?> em <?php echo e($post->created_at); ?>

                </div>
                <div class="interaction">
                    <a href="#">Curti</a> |
                    <a href="#">Não Curti</a> |
                    <?php if(Auth::user() == $post->user): ?>
                        <a href="#" class="edit">Editar</a> |
                        <a href="<?php echo e(route('post.delete', ['post_id' => $post->id])); ?>">Apagar</a>

                    <?php endif; ?>


                </div>
            </article>
            <?php endforeach; ?>

        </div>
    </section>

    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editar postagem</h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="post-body">Ediar a postagem</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Salvar alterações</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script>
        var token = '<?php echo e(Session::token()); ?>';
        var url = '<?php echo e(route('edit')); ?>';
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>