<main role="main" class="container">
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bgc rounded box-shadow">
        <img class="mr-3" src="login/image/LOGO.png" alt="" width="250" height="70">
    </div>

    <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0"><?php echo $titulo; ?></h6>

        <?php foreach($datos as $dato) {?>

            <a href="<?php echo Base_url() ?>/home">
                <div class="media text-muted pt-3">

                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-150">
                        <span class="d-block"></span>
                        <i class="fa-solid fa-chevron-right "></i>
                    </div>
                    <strong class="text-gray-dark"><?php echo $dato['categoria']; ?></strong>
                </div>
             </div>
            </a>

        <?php } ?>
        
        
    </div>
</main>