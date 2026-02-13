<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include './bootstrap.php';
    ?>

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


    <?php 
        include './navbar.php';
    ?>



    <?php 
        include './config.php';
        $select = "SELECT * FROM categories";
        $result = mysqli_query($connection,$select);
        if(mysqli_num_rows($result) > 0){
    ?>


    <div class="position-relative container">
        <i class="bi right bi-chevron-right border-danger border text-danger position-absolute d-flex justify-content-center align-items-center rounded-circle z-3 "
            style="width: 40px;height:40px;display:block;right:0px;top:50%;transform:translate(20%,-50%);cursor:pointer"></i>
        <i class="bi left bi-chevron-left border-danger border text-danger position-absolute d-flex justify-content-center align-items-center rounded-circle z-3 "
            style="width: 40px;height:40px;display:block;left:0px;top:50%;transform:translate(-20%,-50%);cursor:pointer"></i>

        <div class="container overflow-x-scroll menu d-flex gap-3 bg-body-secondary p-4 rounded-3">
            <?php 
            include './config.php';
            $select = "SELECT name FROM categories";
            $result = mysqli_query($connection,$select);
            foreach($result as $item){
        ?>

            <div class="card p-3 flex-shrink-0 border-0">
                <h5 class="m-0 "><?php echo $item['name'] ?></h5>
            </div>

            <?php 
            }
            ?>
        </div>
    </div>

    <?php 
        }else {
            echo "<h5 class='text-center fs-1'>No Items Available</h5>";
        }
    ?>


    <div class="d-flex container gap-2">
        <div class="">

            <?php

                include './config.php';
                $select = "SELECT * FROM categories";
                $result = mysqli_query($connection,$select);
                foreach($result as $item){
            ?>


            <div class="p-3">
                <h2 class="mb-3">
                    <?php echo $item['name'] ?>
                </h2>
                <div class="card shadow border-0 col-xl-4 p-4 col-lg-5 col-md-6">
                    <img src="https://cheezious.com/_next/image?url=https%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1768467924857-1764228828812-1763768054858-CH%20-%20MT%20App%20800x800_v01.png&w=3840&q=75"
                        alt="" width="100%">
                    <h5>Malai Tikka</h5>
                    <p class="text-secondary" style="font-size: 13px;">A flavorful Pizza loaded with fresh BBQ Malai
                        Tikka
                        chunks and topped with a
                        swi...</p>
                    <div class="d-flex gap-3 align-items-center">
                        <h5 class="text-danger m-0">
                            Rs. 1,600
                        </h5>
                        <div class="px-2 py-1 bg-danger fw-bold text-white text-capitalize rounded-pill">
                            Starting price
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                }
            ?>
        </div>
        <div style="height: 300px;top:40px;"
            class="bg-body-secondary position-sticky  p-4 rounded-3 d-flex justify-content-center align-items-center flex-column gap-1">
            <img src="https://cheezious.com/_next/static/media/emptycart.e7858caa.svg" width="100px" alt="">
            <h5>YOUR CART IS EMPTY</h5>
            <h6>Go ahead and explore top categories </h6>
        </div>
    </div>




    <script>
    let menu_icon = document.querySelector('.menu-icon')
    let sidebar = document.querySelector('.sidebar')
    let underlay = document.querySelector('.underlay')
    let right = document.querySelector('.right')
    let left = document.querySelector('.left')
    let menu = document.querySelector('.menu')
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

    right.addEventListener('click', () => {
        menu.scrollBy({
            left: 320,
            behavior: 'smooth'
        })
    })
    left.addEventListener('click', () => {
        menu.scrollBy({
            left: -320,
            behavior: 'smooth'
        })
    })
    </script>

</body>

</html>