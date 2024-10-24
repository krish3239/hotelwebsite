<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php') ?>
    <title>About us</title>

</head>

<body>
    <?php require('inc/head.php') ?>


    <div class="conatiner my-3 py-4 text-center">
        <h2>Rooms</h2>
        <hr style="width:10% ;margin:0 auto;height:2px; background-color:black" class="mb-4">
    </div>
    <br><br>
    <div class="conatiner">
        <div class="row ms-3">
            <div style=" color:black;" class="col-lg-3 col-md-12 px-3">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid flex-lg-column ms-2">
                        <h4 style="color:black;align-self:flex-start; justify-content:center">Filter</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#fil" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <div class="d-flex flex-column">
                                <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>

                            </div>


                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch py-2" style="background-color:whitesmoke;" id="fil">
                            <div class="border p-1 align-items-stretch">
                                <h5 class="mb-3">Check Availabilty</h5>
                                <label for="specificSizeInputName">Check in</label>
                                <input type="date" class="form-control mb-2 " id="specificSizeInputName" placeholder="">
                                <label for="specificSizeInputName">Check out</label>
                                <input type="date" class="form-control mb-2 " id="specificSizeInputName" placeholder="">
                            </div>
                            <br>
                            <div class="border p-2">
                                <h5 class="mb-3">Guests</h5>
                                <div class="d-flex p-1">
                                    <label for="specificSizeInputName" class="me-1 mt-2">Adults</label>
                                    <input type="number" class="form-control mb-2 me-1" id="specificSizeInputName" placeholder="">
                                    <label for="specificSizeInputName" class="me-1 mt-2">Children</label>
                                    <input type="number" class="form-control mb-2 me-1" id="specificSizeInputName" placeholder="">
                                </div>


                            </div>

                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9  col-md-12 px-4">
                <div class="card" style="border: 0px;" style="background-color: #FFFACD;">
                    <div class="row">
                        <div class="col-md-6 py-4 ps-4">
                            <img class="card-img" style="height:300px;width:100%;object-fit:fill;" src="rooms/avery-klein-JaXs8Tk5Iww-unsplash.jpg" alt="Card image cap">
                        </div>
                        <div class="col-md-3 py-4 align-self-center">
                            <div class="card-body">
                                <h5 class="card-title">Dulex room</h5>
                                <div class="features mt-3 mb-4">
                                    <h6>Features</h6>
                                    <span class="badge badge-pill whi">2 beds</span>
                                    <span class="badge badge-pill whi">1 bathroom</span>
                                    <span class="badge badge-pill whi">2 balcony</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="guests mt-3 mb-4">
                                    <h6>Guests</h6>
                                    <span class="badge badge-pill whi">3 Adult</span>
                                    <span class="badge badge-pill whi">2 Kids</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-center justify-content-center py-4">
                            <div class="card-body d-flex flex-column">
                                <div class="w-100 text-align-center">
                                    <h2 class="text-center">Price $200</h2>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary  w-100">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 py-4 ps-4">
                            <img class="card-img" style="height:300px;width:100%;object-fit:fill;" src="rooms/avery-klein-JaXs8Tk5Iww-unsplash.jpg" alt="Card image cap">
                        </div>
                        <div class="col-md-3 py-4 align-self-center">
                            <div class="card-body">
                                <h5 class="card-title">Dulex room</h5>
                                <div class="features mt-3 mb-4">
                                    <h6>Features</h6>
                                    <span class="badge badge-pill whi">2 beds</span>
                                    <span class="badge badge-pill whi">1 bathroom</span>
                                    <span class="badge badge-pill whi">2 balcony</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="guests mt-3 mb-4">
                                    <h6>Guests</h6>
                                    <span class="badge badge-pill whi">3 Adult</span>
                                    <span class="badge badge-pill whi">2 Kids</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-center justify-content-center py-4">
                            <div class="card-body d-flex flex-column">
                                <div class="w-100 text-align-center">
                                    <h2 class="text-center">Price $200</h2>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary  w-100">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 py-4 ps-4">
                            <img class="card-img" style="height:300px;width:100%;object-fit:fill;" src="rooms/avery-klein-JaXs8Tk5Iww-unsplash.jpg" alt="Card image cap">
                        </div>
                        <div class="col-md-3 py-4 align-self-center">
                            <div class="card-body">
                                <h5 class="card-title">Dulex room</h5>
                                <div class="features mt-3 mb-4">
                                    <h6>Features</h6>
                                    <span class="badge badge-pill whi">2 beds</span>
                                    <span class="badge badge-pill whi">1 bathroom</span>
                                    <span class="badge badge-pill whi">2 balcony</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="guests mt-3 mb-4">
                                    <h6>Guests</h6>
                                    <span class="badge badge-pill whi">3 Adult</span>
                                    <span class="badge badge-pill whi">2 Kids</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-center justify-content-center py-4">
                            <div class="card-body d-flex flex-column">
                                <div class="w-100 text-align-center">
                                    <h2 class="text-center">Price $200</h2>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary  w-100">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-4 ps-4">
                            <img class="card-img" style="height:300px;width:100%;object-fit:fill;" src="rooms/avery-klein-JaXs8Tk5Iww-unsplash.jpg" alt="Card image cap">
                        </div>
                        <div class="col-md-3 py-4 align-self-center">
                            <div class="card-body">
                                <h5 class="card-title">Dulex room</h5>
                                <div class="features mt-3 mb-4">
                                    <h6>Features</h6>
                                    <span class="badge badge-pill whi">2 beds</span>
                                    <span class="badge badge-pill whi">1 bathroom</span>
                                    <span class="badge badge-pill whi">2 balcony</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="guests mt-3 mb-4">
                                    <h6>Guests</h6>
                                    <span class="badge badge-pill whi">3 Adult</span>
                                    <span class="badge badge-pill whi">2 Kids</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-center justify-content-center py-4">
                            <div class="card-body d-flex flex-column">
                                <div class="w-100 text-align-center">
                                    <h2 class="text-center">Price $200</h2>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary  w-100">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>



    <?php require('inc/footer.php') ?>
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