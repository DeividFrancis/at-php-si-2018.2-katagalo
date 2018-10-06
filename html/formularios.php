<?php
function formularioInserir($obj, $method = "POST"){ ob_start();?>
<form class="text-center" style="color: #757575;" action="../controller/<?=$obj->get("tabela")?>.controller.php"
    method="<?=$method?>">
    <? foreach($obj->getVars() as $name => $value): 
        if($name == "tabela" OR $name == "id") continue;?>
    <!-- Start input -->
    <div class="md-form">
        <input type="text" name="<?= $name ?>" id="<?= $name ?>" class="form-control">
        <label class="text-capitalize" for="<?= $name ?>"><?= $value == null? $name : $value ?></label>
    </div>
    <!-- fim do input -->
    <?php endforeach ?>
    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Salvar</button>
</form>
<?php
    echo ob_get_clean();
} ?>
<?
