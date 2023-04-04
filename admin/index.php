<?php
include_once 'top.php';
include_once 'menu.php';
?>

<div>
    <main>
        <div class="container-fluid px-4">
            <?php
                error_reporting(0);
                $url=$_GET['url'];
                if($url=='dashboard'){
                    include_once 'dashboard.php';
                }else if(!empty($url)){
                    include_once ''.$url.'.php';
                }else{
                    include_once 'dashboard.php';
                }
            ?>
        </div>
    </main>
</div>

<?php
include_once 'bottom.php';
?>

