<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php')?>
    <title>About us</title>
    
</head>

<body>
<?php require('inc/head.php') ?>
   

    <div class="conatiner my-3 py-4 text-center">
    <h2>About us</h2>
        <hr style="width:10% ;margin:0 auto;height:2px; background-color:black" class="mb-4">
       <div class="text-center"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ratione ab debitis voluptatem omnis soluta. Nihil vel modi voluptate inventore totam, aperiam labore aliquam quasi facilis impedit iure delectus fuga natus, laborum, quaerat excepturi ducimus! Quisquam, dolorum impedit aliquam voluptas, suscipit, neque facilis aliquid accusantium tenetur sed reprehenderit velit enim?
       </p></div>
    </div>
<br><br>

    <div class="conatiner">
        <div class="row d-flex justify-content-center align-item-center">
            <div class="ms-2 me-2 col-lg-5 p-4 order-lg-1 order-md-1">
                <img src="img/michael-dam-mEZ3PoFGs_k-unsplash.jpg" style="width:200px; border-radius:20px; height:auto" class="w-100">
            </div>
            <div class="col-lg-5 ms-3  p-4 align-self-center order-lg-2 order-md-2">
                <h1>Steven Carrel</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit pariatur fuga fugiat cupiditate quis! Voluptatum aperiam eius ex. Modi ab officiis accusantium dolore maxime inventore sint iure reiciendis blanditiis sed quis fugit illum eum porro ea, nostrum est ex? Eaque autem ad dolorem repellendus numquam sunt cupiditate optio, corrupti iure hic laboriosam deserunt, ipsa illo placeat error quidem vel soluta eligendi recusandae consequatur atque. Laborum nesciunt velit accusamus voluptas debitis doloribus et officia recusandae aperiam! Tempora ad magni minus earum voluptate rem sint illo corrupti nihil! Itaque eum veniam libero dignissimos aliquid voluptatum quos repellat voluptas mollitia vel, illum accusamus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quos commodi, modi similique explicabo culpa debitis aliquam quasi repellendus, quibusdam in pariatur velit? Expedita aliquam, quaerat recusandae commodi quis sapiente quo reprehenderit in voluptate quisquam. Facilis expedita aut eligendi in! Consectetur tempore eius inventore cumque obcaecati. Quod ab aliquid laudantium?</p>
            </div>
        </div>
    </div>


  <?php require('inc/footer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

        });

        var swiper = new Swiper(".testimonial", {
            loop: true,
            speed: 2000,
            autoplay: {
                delay: 5500,
                disableOnInteraction: false,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true,
            },
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
        });
    </script>
</body>

</html>