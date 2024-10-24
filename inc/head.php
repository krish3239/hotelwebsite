<style>
        * {
            font-family: Poppins;
            ;
        }

        .green {
            background-color: #cccccc;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .badge {
            margin-left: 10px;
        }

        .swiper {
            width: 100%;
            height: 500px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 500px;
        }

        .form-availabilty {
            margin: 0 auto;
            margin-top: -50px;
            z-index: 2;
            position: relative;
            background-color: whitesmoke;
            width: 70%;
            box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
            margin: auto centre;
        }

        .flex {
            display: flex;
        }

        .centre {
            align-items: center;
            justify-content: center;
        }

        .whi {
            color: black;
            background-color: #cccccc;
        }
    </style>
<nav class="navbar navbar-expand-lg navbar-light green sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-4" href="index.php">Hotel Taj</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="room.php">Rooms</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>


            </ul>
            <div class="d-flex">
                <button type="button" class="btn btn-primary shadow-none me-2" data-bs-toggle="modal" data-bs-target="#registermodal">
                    register
                </button>

                <button type="button" class="btn btn-secondary shadow-none" data-bs-toggle="modal" data-bs-target="#modal">
                    login
                </button>
            </div>
        </div>
    </div>
</nav>
<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <div class="modal-header d-flex align-items-centre">
                    <h5 class="modal-title" id="staticBackdropLabel"><i class="bi bi-person-circle fs-3 me-3"></i>login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex align-item-center justify-content-between">
                        <button type="submit" class="btn btn-primary shadow-none" data-bs-dismiss="modal">login</button>
                        <a href="" class="text-decoration-none">forgot password?</a>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
<div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-2">
            <form class="row g-4">
                <div class="modal-header d-flex align-items-centre">
                    <h5 class="modal-title" id="staticBackdropLabel"><i class="bi bi-person-badge-fill p-1"></i>register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="col-md-12 ml-1 pl-2 fs-1">
                    <span class="badge bg-light text-dark ml-3">Upload correct information </span>
                </div>
                <div class="col-md-6 ml-1 pl-2">
                    <label for="name" class="form-label ">Name</label>
                    <input type="text" class="form-control " id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone number</label>
                    <input type="number" class="form-control" id="mobile">
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="input-group mb-3 col-12">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            I declare provided information is correct.
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>



        </div>
    </div>
</div>