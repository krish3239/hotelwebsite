<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php')?>
    <title>Hotel taj</title>
   
</head>

<body>
<?php require('inc/head.php') ?>
    <div class="container-fluid">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img style="object-fit: cover;" src="slider/bilderboken-rlwE8f8anOc-unsplash.jpg" />
                </div>
                <div class="swiper-slide">
                    <img style="object-fit: cover;" src="slider/eddi-aguirre-ZAVHbpOn4Jk-unsplash.jpg" />
                </div>

                <div class="swiper-slide">
                    <img style="object-fit: cover;" src="slider/jennifer-latuperisa-andresen-Cj7a21nHLyo-unsplash.jpg" />
                </div>
                <div class="swiper-slide">
                    <img style="object-fit: cover;" src="slider/kelly-sikkema-dqU02E4iSAs-unsplash.jpg" />
                </div>
            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div> -->
        </div>
    </div>
    <div class="conatiner form-availabilty">
        <form class="row gx-3 gy-2 align-items-end" style="padding-left:20px; padding-bottom:20px; padding-right:20px ">
            <h3>Check Availability</h3>
            <div class="col-sm-3">
                <label for="specificSizeInputName">Check in</label>
                <input type="date" class="form-control" id="specificSizeInputName" placeholder="">
            </div>
            <div class="col-sm-3">
                <label for="specificSizeInputName">Check out</label>
                <input type="date" class="form-control" id="specificSizeInputName" placeholder="">
            </div>
            <div class="col-sm-2">
                <label for="specificSizeInputName">Adults</label>
                <select class="form-select" aria-label="Small select example">
                    <option selected value="0">zero</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-sm-2">
                <label for="specificSizeInputName">children</label>
                <select class="form-select" aria-label="Small select example">
                    <option selected value="0">zero</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="col-sm-2 ">

                <button type="submit" class="btn btn-primary">check</button>
            </div>
    </div>
    </form>
    </div>
    <br><br><br><br><br>

    <h3 class="text-center mb-3">Our Rooms</h3>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6  col-sm-12 ">
                <div class="card" style="width:100%;height:700px">
                    <img class="card-img-top" src="rooms/avery-klein-JaXs8Tk5Iww-unsplash.jpg" style="width: 100%;height:400px; object-fit:cover;" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Single room</h5>
                        <h6>$200 per night</h6>
                        <div class="features mt-3 mb-4">
                            <h6>Features</h6>
                            <span class="badge badge-pill whi">2 beds</span>
                            <span class="badge badge-pill whi">1 bathroom</span>
                            <span class="badge badge-pill whi">2 balcony</span>
                        </div>
                        <div class="facilities mt-3 mb-4">
                            <h6>Facilities</h6>
                            <span class="badge badge-pill whi">1 Ac</span>
                            <span class="badge badge-pill whi">Free wifi</span>
                            <span class="badge badge-pill whi">1 fridge</span>
                        </div>
                        <span class="d-flex justify-content-between">
                            <a href=" #" class="btn btn-primary">Book now</a>
                            <a href="#" class="btn btn-light">More details</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6  col-sm-12 ">
                <div class="card" style="width:100%;height:700px">
                    <img class="card-img-top" src="rooms/finn-jbTAqnE48tA-unsplash.jpg" style="width: 100%; height:400px; object-fit:cover;" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Single room</h5>
                        <h6>$150 per night</h6>
                        <div class="features mt-3 mb-4">
                            <h6>Features</h6>
                            <span class="badge badge-pill whi">2 beds</span>
                            <span class="badge badge-pill whi">1 bathroom</span>
                            <span class="badge badge-pill whi">2 balcony</span>
                        </div>
                        <div class="facilities mt-3 mb-4">
                            <h6>Facilities</h6>
                            <span class="badge badge-pill whi">2 Ac</span>
                            <span class="badge badge-pill whi">Free wifi</span>
                            <span class="badge badge-pill whi">1 fridge</span>
                        </div>
                        <span class="d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Book now</a>
                            <a href="#" class="btn btn-light">More details</a>
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div class="card" style="width:100%;height:700px">
                    <img class="card-img-top" src="rooms/jon-tyson-4kgsyPpka_Y-unsplash.jpg" style="width: 100%;height:400px; object-fit:cover;" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Single room</h5>
                        <h6>$300 per night</h6>
                        <div class="features mt-3 mb-4">
                            <h6>Features</h6>
                            <span class="badge badge-pill whi">3 beds</span>
                            <span class="badge badge-pill whi">1 bathroom</span>
                            <span class="badge badge-pill whi">1 balcony</span>
                        </div>
                        <div class="facilities mt-3 mb-4">
                            <h6>Facilities</h6>
                            <span class="badge badge-pill whi">1 Ac</span>
                            <span class="badge badge-pill whi">Free wifi</span>
                            <span class="badge badge-pill whi">2 fridge</span>
                        </div>
                        <span class="d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Book now</a>
                            <a href="#" class="btn btn-light">More details</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6  col-sm-12">
                <div class="card" style="width:100%; height:700px">
                    <img class="card-img-top" src="rooms/sven-brandsma-GZ5cKOgeIB0-unsplash.jpg" style="width: 100%;height:400px;object-fit:cover;" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Single room</h5>
                        <h6>$200 per night</h6>
                        <div class="features mt-3 mb-4">
                            <h6>Features</h6>
                            <span class="badge badge-pill whi">2 beds</span>
                            <span class="badge badge-pill whi">1 bathroom</span>
                            <span class="badge badge-pill whi">2 balcony</span>
                        </div>
                        <div class="facilities mt-3 mb-4 ">
                            <h6>Facilities</h6>
                            <span class="badge badge-pill whi">1 Ac</span>
                            <span class="badge badge-pill whi">Free wifi</span>
                            <span class="badge badge-pill whi">1 fridge</span>
                        </div>
                        <span class="d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Book now</a>
                            <a href="#" class="btn btn-light">More details</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-3 mb-5">
                <a href="" class="btn" style="background-color: #cccccc; border-radius:10px;">More Rooms</a>
            </div>
        </div>
    </div>
    <br><br><br>

    <h2 class="text-center mb-4">Reviews</h2>
    <br>
    <div class="container-fluid">
        <div class="swiper testimonial p-2 " style=" width:100%;height:300px;background-color:whitesmoke ;">
            <div class="swiper-wrapper me-3 ms-3">
                <div class="swiper-slide py-4">
                    <div class="profile d-flex align-items-center px-4 pb-4">

                        <img class="ps-2 m-0" src="rooms/avery-klein-JaXs8Tk5Iww-unsplash.jpg" style="width:50px;height:50px;">
                        <h6 class="ps-2 m-0" style="font-size:1.6rem;">User1</h6>
                    </div>
                    <p class="ps-4" style="font-size:1.3rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit optio doloremque similique perspiciatis? Vitae, qui laborum cum veniam hic autem fugiat, nobis dolorem error velit itaque eos cumque ut dolor, nostrum facilis laudantium. Ipsa, molestiae, unde et necessitatibus corporis deserunt at, nam dicta quo obcaecati nesciunt nihil sit sapiente quisquam!</p>
                </div>
                <div class="swiper-slide py-4">
                    <div class="profile d-flex align-items-center px-4 pb-4">

                        <img class="ps-2 m-0" src="rooms/avery-klein-JaXs8Tk5Iww-unsplash.jpg" style="width:50px;height:50px;">
                        <h6 class="ps-2 m-0" style="font-size:1.6rem;">User2</h6>
                    </div>
                    <p class="ps-4" style="font-size:1.3rem;">Ladipisicing elit. Velit optio doloremque similique perspiciatis? Vitae, qui laborum cum veniam hic autem fugiat, nobis dolorem error velit itaque eos cumque ut dolor, nostrum facilis laudantium. Ipsa, molestiae, unde et necessitatibus corporis deserunt at, nam dicta quo obcaecati nesciunt nihil sit sapiente quisquam!</p>
                </div>
                <div class="swiper-slide py-4">
                    <div class="profile d-flex align-items-center px-4 pb-4">

                        <img class="ps-2 m-0" src="rooms/avery-klein-JaXs8Tk5Iww-unsplash.jpg" style="width:50px;height:50px;">
                        <h6 class="ps-2 m-0" style="font-size:1.6rem;">User3</h6>
                    </div>
                    <p class="ps-4" style="font-size:1.3rem;">Lorem ipsum dolor sit amet . Velit optio doloremque similique perspiciatis? Vitae, qui laborum cum veniam hic autem fugiat, nobis dolorem error velit itaque eos cumque ut dolor, nostrum facilis laudantium. Ipsa, molestiae, unde et necessitatibus corporis deserunt at, nam dicta quo obcaecati nesciunt nihil sit sapiente quisquam!</p>
                </div>
                <div class="swiper-slide py-4">
                    <div class="profile d-flex align-items-center px-4 pb-4">

                        <img class="ps-2 m-0" src="rooms/avery-klein-JaXs8Tk5Iww-unsplash.jpg" style="width:50px;height:50px;">
                        <h6 class="ps-2 m-0" style="font-size:1.6rem;">User1</h6>
                    </div>
                    <p class="ps-4" style="font-size:1.3rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit optio doloremque similique perspiciatis? Vitae, qui laborum cum veniam hic autem fugiat, nobis dolorem error velit itaque eos cumque ut dolor, nostrum facilis laudantium. Ipsa, molestiae, unde et necessitatibus corporis deserunt at, nam dicta quo obcaecati nesciunt nihil sit sapiente quisquam!</p>
                </div>
                <div class="swiper-slide py-4">
                    <div class="profile d-flex align-items-center px-4 pb-4">

                        <img class="ps-2 m-0" src="rooms/avery-klein-JaXs8Tk5Iww-unsplash.jpg" style="width:50px;height:50px;">
                        <h6 class="ps-2 m-0" style="font-size:1.6rem;">User1</h6>
                    </div>
                    <p class="ps-4" style="font-size:1.3rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit optio doloremque similique perspiciatis? Vitae, qui laborum cum veniam hic autem fugiat, nobis dolorem error velit itaque eos cumque ut dolor, nostrum facilis laudantium. Ipsa, molestiae, unde et necessitatibus corporis deserunt at, nam dicta quo obcaecati nesciunt nihil sit sapiente quisquam!</p>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-3 mb-5">
                <a href="" class="btn" style="background-color: #cccccc; border-radius:10px;">Know more</a>
            </div>
    </div>
    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <iframe style="width: 100%; background-color:whitesmoke;" class="p-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13584.23455377161!2d74.86056232251029!3d31.659615437120927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391964ab516fc571%3A0x8be4829ada91eb2e!2sTaj%20Swarna%2C%20Amritsar!5e0!3m2!1sen!2sin!4v1721977895511!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="mt-4 mb-4 p-4" style=" background-color:whitesmoke;color:black;">
                    <h5>Call US</h5>
                    <a href="tel:9115157184" style="color:black;" class=" text-decoration-none "><i class="bi bi-telephone"></i> 9115157184</a>
                    <br>
                    <a href="tel:9115157184" style="color:black;" class=" text-decoration-none "><i class="bi bi-telephone"></i> 8288934979</a>
                </div>
                <div class=" mt-4 p-4" style=" background-color:whitesmoke; color:black;">
                    <h5>Follow Us</h5>
                    <a href="#" style="color:black;" class=" d-inline-block text-decoration-none mb-2"><span><i class="bi bi-twitter me-1"></i>twitter</span></a>
                    <br>
                    <a href="#" style="color:black;" class=" d-inline-block text-decoration-none mb-2"><span><i class="bi bi-facebook me-1"></i>facebook</span></a>
                    <br>
                    <a href="#" style="color:black;" class=" d-inline-block text-decoration-none mb-2"><span><i class="bi bi-instagram me-1"></i>Instagram</span></a>
                    <br>
                </div>
            </div>

        </div>
        <br><br><br>
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