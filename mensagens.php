<?php  function mostraMensagem($tipo){ 
    if(isset($_SESSION["mensagem-$tipo"])): ?>
        <p class="text-<?=$tipo?>"><?=$_SESSION["mensagem-$tipo"]?></p>
        <?php unset($_SESSION["mensagem-$tipo"]); ?>
    <?php endif ?>
<?php }

mostraMensagem("danger");
mostraMensagem("success");

?>