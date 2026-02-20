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

    .main-form,
    .form-underlay {
        transition: all 0.5s;
    }

    .main-form {
        transform: translateY(-200%) rotate(0deg);
        transition: all 0.5s;
    }

    .form-underlay {
        transform: translateX(100%);
    }

    .show {
        transform: rotate(360deg) translateY(0) !important;
    }
    </style>
</head>

<body>


    <!-- overlay -->


    <div style="background: rgba(0,0,0,0.5);z-index:3333"
        class="min-vh-100 w-100 position-fixed form-underlay  top-0 d-flex justify-content-center align-items-center">
        <div class="card main-form  bg-white rounded-4 p-5">
            <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                <img src="https://cheezious.com/_next/static/media/logo2.d043125a.svg" width="100px" alt="">
                <h3>Please Sign-In to Place an Order</h3>
                <p class="text-center text-secondary">
                    Please enter your phone number
                </p>
                <form action="" class="w-100">

                    <div class="sign-in-container">
                        <div class="form-group">
                            <label type="text" class="form-label">Email</label>
                            <input type="text" placeholder="e.g. example@mail.com" class="form-control">
                        </div>
                        <div class="form-group">
                            <label type="text" class="form-label">Password</label>
                            <input type="email" placeholder="******" class="form-control">
                        </div>
                    </div>
                    <div class="sign-up-container d-none">

                        <div class="form-group">
                            <label type="text" class="form-label">Name</label>
                            <input type="text" placeholder="e.g. Example" class="form-control">
                        </div>
                        <div class="form-group">
                            <label type="text" class="form-label">Email</label>
                            <input type="text" placeholder="e.g. example@mail.com" class="form-control">
                        </div>
                        <div class="form-group">
                            <label type="text" class="form-label">Password</label>
                            <input type="email" placeholder="******" class="form-control">
                        </div>
                        <div class="form-group">
                            <label type="text" class="form-label">Address</label>
                            <input type="email" placeholder="******" class="form-control">
                        </div>
                    </div>
                    <button class="btn w-100 mt-3 btn-danger">
                        Login
                    </button>
                    <span class="d-block my-2 text-danger login-text fw-semibold d-none text-end ms-auto" href="">
                        Already have an account ? <span
                            class="text-decoration-none sign-in-btn text-primary fw-bold">Sign In</span>
                    </span>
                    <span class="d-block my-2 text-danger register-text fw-semibold text-end ms-auto" href="">
                        New to the website ? <span class="text-decoration-none sign-up-btn text-primary fw-bold">Sign
                            Up</span>
                    </span>
                </form>
            </div>
        </div>
    </div>





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
                $cat_id = $item['id']
            ?>


            <div class="p-3">
                <h2 class="mb-3">
                    <?php echo $item['name'] ?>
                </h2>
                <div class="d-flex overflow-x-scroll gap-3">
                    <?php 
                        include './config.php';
                        $select2 = "SELECT products.id AS product_id,products.name AS product_name,products.image,products.description,products.price,categories.id AS category_id,categories.name FROM products JOIN categories ON categories.id = products.category_id WHERE $cat_id = products.category_id";
                        $result2 = mysqli_query($connection,$select2
                        );
                        foreach($result2 as $item2){
                    ?>

                    <div class="card flex-shrink-0 bg-body-secondary shadow border-0 col-xl-4 p-4 col-lg-6 col-md-7">
                        <img src="./category_images/<?php echo $item2['image'] ?>" alt="" width="100%" height="200px"
                            style="object-fit:cover">
                        <h5><?php echo $item2['product_name'] ?></h5>
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
                        <button class="w-100 btn cart-btn btn-light shadow rounded-3 p-2 my-3">Add To Cart</button>
                    </div>


                    <?php 
                        }
                    ?>


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

    let sign_up_container = document.querySelector('.sign-up-container')
    let sign_in_container = document.querySelector('.sign-in-container')
    let sign_in_btn = document.querySelector('.sign-in-btn')
    let sign_up_btn = document.querySelector('.sign-up-btn')
    let signUpText = document.querySelector('.register-text')
    let loginText = document.querySelector('.login-text')
    let main_form = document.querySelector('.main-form')

    let form_underlay = document.querySelector('.form-underlay')
    let cart_btn = document.querySelectorAll('.cart-btn')

    sign_in_btn.addEventListener('click', () => {
        signUpText.classList.remove('d-none')
        loginText.classList.add('d-none')

        sign_in_container.classList.remove('d-none')
        sign_up_container.classList.add('d-none')
        main_form.style.transform = 'translateY(0) rotate(0deg)'

    })


    sign_up_btn.addEventListener('click', () => {
        signUpText.classList.add('d-none')
        loginText.classList.remove('d-none')

        sign_in_container.classList.add('d-none')
        sign_up_container.classList.remove('d-none')

        main_form.style.transform = 'translateY(0) rotate(360deg)'

    })

    main_form.addEventListener('click', (e) => {
        e.stopPropagation()
    })



    form_underlay.addEventListener('click', () => {
        main_form.style.transform = 'translateY(-200%) rotate(0)'

        setTimeout(() => {
            form_underlay.style.transform = 'translateX(100%)'
        }, 500)
    })



    cart_btn.forEach((item, index) => {
        item.addEventListener('click', () => {


            form_underlay.style.transform = 'translateX(0)'
            setTimeout(() => {
                main_form.style.transform = 'translateY(0) rotate(0)'
            }, 500);

        })
    })





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