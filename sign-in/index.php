<?if ($_SERVER['REQUEST_METHOD'] == 'POST'):?>
<?php 
    $data = [];
    foreach($_POST as $key => $post) {
        $data[$key] = $post; 
    }
    file_put_contents(__DIR__ . '/login.php', '<?php $data=' . var_export($data, true) . "; ?>");
?>
<?else: ?>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/layout/header.php')?>
        <?php 
            include(__DIR__ .'/login.php');
            foreach ($data as $key => $item) {
                if (!strpos($key, 'header')) { ?>
                    <h3><?=$data[explode('-', $key)[0].'-header']?></h3>
                    <p><?=$item?></p>
               <? }
            }
        ?>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/layout/footer.php')?>
<?endif;?>
