<?php

include __DIR__ . '/database/albums.php';
include __DIR__ . '/partials/head.php';
?>


<body>

    <?php include __DIR__ . '/partials/site_header.php'; ?>

    <main>
        <div class="container">
            <div class="row d-flex flex-wrap justify-center">
                <?php foreach ($albums as $album ) { ?>
                    <div class="card">
                        <div class="img_container">
                            <img src="<?php echo $album['poster']?>" alt="">
                        </div>
                    <h3 class="title"><?php echo strtoupper($album['title']) ?></h3>
                    <h5 class="meta_data">
                        <?php echo $album['author']?>
                        <span class="year"><?php echo $album['year']?></span>
                    </h5>
                    </div>
               <?php } ?>
            </div>
        </div>
    </main>

</body>
</html>