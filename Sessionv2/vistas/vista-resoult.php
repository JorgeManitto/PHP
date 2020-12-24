<div class ="opcion">
<?php
    $widthBar = $porcentaje * 5;
    $estilo = "barra";

    // if($survey->getOptionSelected() == $dato['opcion']){
    //     $estilo = "seleccionado";
    // }
    echo $dato['opcion'];

?>
    <div class="<?php echo $estilo;?>" style="width:<?php echo $widthBar.'px;'?>">
    <?php echo $porcentaje. '%' ?>
    </div>
</div>