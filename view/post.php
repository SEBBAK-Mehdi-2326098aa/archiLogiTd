<?php $title = 'Exemple Annonces Basic PHP: Connexion'; ?>

<?php ob_start(); ?>
    <h1><?php echo $post['title']; ?></h1>

    <div class="date"> <?php echo $post['date']; ?> </div>
    <div class="body"> <?php echo $post['body']; ?> </div>
<?php $content = ob_get_clean(); ?>
<?php require 'layout.php'; ?>