<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './bootstrap.php' ?>
    <style>
    .hide {
        transform: translateX(-100%)
    }

    .underlay {
        visibility: hidden;
    }

    .sidebar {
        transition: all 0.5s;
    }

    .hero-images {
        transition: all 0.7s;
    }
    </style>
</head>

<body>


    <!-- underlay -->

    <div class="w-100 min-vh-100 underlay position-fixed top-0" style="background-color: rgba(0,0,0,0.5);">
        <div class="col-6 sidebar hide p-5 min-vh-100 bg-white col-md-5 col-xl-3 col-lg-3">
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
                width="30px" class="menu-icon" height="30px" alt="">
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


    <!-- carousel -->

    <div class="images position-relative" style="height: 70vh;width:100%;">
        <img class="position-absolute object-fit-cover hero-images"
            src="https://cheezious.com/_next/image?url=https%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fbanners%2Fwebsite%2F1766418772820-1520%20x%20460%20px%20NEw%20%201.jpg&w=3840&q=75"
            width="100%" height="100%" alt="">
        <img class="position-absolute object-fit-cover hero-images"
            src="https://cheezious.com/_next/image?url=https%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fbanners%2Fwebsite%2F1764681926332-Web%20Banner_Amanah%20Mall_1520x460_opt-3%20pixels.png&w=3840&q=75"
            width="100%" height="100%" alt="">
        <img class="position-absolute object-fit-cover hero-images"
            src="https://cheezious.com/_next/image?url=https%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fbanners%2Fwebsite%2F1763728179352-Web%20banner%20(3.png&w=3840&q=75"
            width="100%" height="100%" alt="">
        <img class="position-absolute object-fit-cover hero-images"
            src="https://cheezious.com/_next/image?url=https%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fbanners%2Fwebsite%2F1759214309912-Web%20Banner_1520x460%20pixels_Beef%20Peperoni.png&w=3840&q=75"
            width="100%" height="100%" alt="">
    </div>






    <!-- categories -->

    <div class="container row mx-auto p-5">

        <?php
        include './config.php';
        $select = "SELECT * FROM categories";
        $result = mysqli_query($connection,$select);
        foreach ($result as $item) {
            ?>
            <div class="col-lg-3">
                <div class="card p-3 shadow-lg">
                    <img src="./category_images/<?php echo $item['image'] ?>" alt="">
                    <h4 class="text-warning">
                        <?php echo $item['name'] ?>
                    </h4>
                </div>
            </div>

        <?php
        }
        ?>
    
    </div>







    <script>
    let menu_icon = document.querySelector('.menu-icon')
    let sidebar = document.querySelector('.sidebar')
    let underlay = document.querySelector('.underlay')


    menu_icon.addEventListener('click', () => {
        underlay.style.visibility = 'visible'
        sidebar.classList.remove('hide')
    })


    underlay.addEventListener('click', () => {
        underlay.style.visibility = 'hidden'
        sidebar.classList.add('hide')
    })

    sidebar.addEventListener('click', (e) => {
        e.stopPropagation()
    })


    let images = document.querySelectorAll('.hero-images')
    let count = 0
    setInterval(() => {
        if (count > images.length - 1) {
            count = 0
        }
        images.forEach((item, index) => {
            item.style.opacity = '0'
        })

        images[count].style.opacity = '1'
        count++
    }, 2000)
    </script>


</body>

</html>