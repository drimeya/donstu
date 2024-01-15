<?if ($_SERVER['REQUEST_METHOD'] == 'POST'):?>
<?php 
    session_start();
    $data = [];
    foreach($_POST as $key => $post) {
        $data[$key] = $post; 
    }
    $_SESSION['account-data'] = $data;;
?>
<?else: ?>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/layout/header.php');?>
        <?php 
            if (isset($_SESSION['account-data'])) {
                $data = $_SESSION['account-data'];
                foreach ($data as $key => $item) {
                    if (!strpos($key, 'header')) { ?>
                        <h3><?=$data[explode('-', $key)[0].'-header']?></h3>
                        <p><?=$item?></p>
                   <? }
                }
            } else {
                echo '<h1>Вы не вошли, повторите попытку позже</h1>';
            }
            
        ?>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/layout/footer.php')?>
<?endif;?>
