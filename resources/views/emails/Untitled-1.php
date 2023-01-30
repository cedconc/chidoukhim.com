
text/x-generic e7ee9d1ee4b338777d996c048e708ae1bfa470c2.php ( PHP script, UTF-8 Unicode text, with very long lines )
<?php $__env->startComponent('mail::message'); ?>
# <?php echo e(__("Bonjour!")); ?>


<?php echo e(__("Le Membre")); ?> <?php echo e($origine->prenom); ?> <?php echo e($origine->name); ?> <?php echo e(__("souhaite rentrer en chidouh avec le membre")); ?>  <?php echo e($cible->prenom); ?> <?php echo e($cible->name); ?> <?php echo e(__("par l'intermédiaire de la messagerie privée")); ?>


<?php echo e(__("Nous vous demandons d’aller dans votre espace personnel chidouh via le boutton qui suit afin de consulter la demande du profil du Membre concerné en vue d’accepter la mise en chidouh ou de la refuser.")); ?>


<?php $__env->startComponent('mail::button', ['url' => <?php echo e(config('app.name')); ?> . '/chidours']); ?>
<?php echo e(__("Liste de Chidouh")); ?>

<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


<?php echo e(__("Nous vous informons que vous trouverez dans votre espace la  messagerie nouvellement crée avec la chadranite de l’autre Membre.")); ?>


<?php echo e(__("Nous vous remercions pour votre collaboration au sein de la plate-forme.")); ?>


<?php echo e(__("L’équipe de la plate-forme.")); ?>



<small><strong><?php echo e(__("Confidentialité:")); ?></strong> <?php echo e(__("Toutes les informations que vous nous transmettez via votre espace “mon compte” demeurent strictement confidentielles.")); ?></small>


<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/shha6455/chidouhkim.com/resources/views/emails/demande_de_chidour.blade.php ENDPATH**/ ?>
