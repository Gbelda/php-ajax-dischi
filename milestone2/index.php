<?php
include __DIR__ . '/partials/head.php'

?>

<body>
    
<div id="app">

    <?php include __DIR__ . '/partials/site_header.php'; ?>

        <main>
        <div class="container">
            <div class="row d-flex flex-wrap justify-center">
                    <div class="card" v-for="album in albums">
                        <div class="img_container">
                            <img :src="`${album.poster}`" alt="">
                        </div>
                    <h3 class="title">{{album.title}}</h3>
                    <h5 class="meta_data">
                        {{album.author}}
                        <span class="year">{{album.year}}</span>
                    </h5>
                    </div>
            </div>
        </div>
    </main>
    
</div>





<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js' integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
<!-- Disable in production -->
<script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
<script src="./assets/js/app.js"></script>
</body>
</html>