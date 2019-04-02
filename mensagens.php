<?php  if(isset($_SESSION["mensagem-danger"])): ?>
    <p class="text-danger"><?=$_SESSION["mensagem-danger"]?></p>
    <?php unset($_SESSION["mensagem-danger"]); ?>
<?php endif ?>

<?php  if(isset($_SESSION["mensagem-success"])): ?>
    <p class="text-success"><?=$_SESSION["mensagem-success"]?></p>
    <?php unset($_SESSION["mensagem-success"]); ?>
<?php endif ?>