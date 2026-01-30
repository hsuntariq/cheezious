<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './bootstrap.php' ?>

</head>

<body>


    <!-- underlay -->

    <div class="w-100 min-vh-100 position-fixed top-0" style="background-color: rgba(0,0,0,0.5);">
        <div class="col-6 p-5 min-vh-100 bg-white col-md-5">
            <div class="d-flex gap-4">
                <i style="width: 50px;height:50px;border-radius:50%;"
                    class="bi bi-person d-flex justify-content-center fs-3 align-items-center bg-warning">
                </i>
                <div class="">
                    <p>Login to explore</p>
                    <h5>World of flavors</h5>
                </div>
            </div>
        </div>
    </div>



    <div class="d-flex p-3 justify-content-between align-items-center">
        <div class="d-flex gap-4 align-items-center">
            <img src="https://cheezious.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fstack.54881ee4.png&w=256&q=75"
                width="30px" height="30px" alt="">
            <img class="d-none d-lg-block"
                src="https://cheezious.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FmainLogo.c4a33b22.png&w=1200&q=75"
                width="200px" alt="">
        </div>

        <img class="d-md-block d-lg-none"
            src="https://cheezious.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FmainLogo.c4a33b22.png&w=1200&q=75"
            width="200px" alt="">

        <div class="d-flex gap-4 d-none d-lg-flex">
            <button class="btn p-2 d-flex gap-1 fw-semibold btn-warning">
                <i class="bi bi-cart"></i>
                CART
            </button>
            <button class="btn p-2  d-flex gap-1 fw-semibold btn-warning">
                <i class="bi bi-person"></i>
                LOGIN
            </button>
        </div>
        <div class="d-flex d-lg-none">
            <button class="btn p-2 d-flex gap-1 fw-semibold ">
                <i class="bi bi-cart fs-2 text-danger"></i>

            </button>
            <button class="btn p-2  d-flex gap-1 fw-semibold ">
                <i class="bi bi-person fs-2 text-danger"></i>

            </button>
        </div>


    </div>


</body>

</html>