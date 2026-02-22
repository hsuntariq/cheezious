<?php
session_start();
?>
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



    <?php
 if (isset($_SESSION['error'])) { ?>

    <div id="errorAlert" class="position-fixed top-0 end-0 p-3" style="z-index: 9999;">

        <div class="alert alert-danger shadow-lg rounded-4 d-flex align-items-center fade show" role="alert"
            style="min-width: 300px; animation: slideIn 0.5s ease;">

            <div class="me-3">
                ❌
            </div>

            <div class="flex-grow-1">
                <strong>Error!</strong><br>
                <?php echo $_SESSION['error']; ?>
            </div>

            <button type="button" class="btn-close ms-3" data-bs-dismiss="alert"></button>
        </div>
    </div>

    <style>
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    </style>

    <?php
    

    
    }
    
    unset($_SESSION['error']);
    
    ?>
    <?php
 if (isset($_SESSION['cart_success'])) { ?>

    <div id="errorAlert" class="position-fixed top-0 end-0 p-3" style="z-index: 9999;">

        <div class="alert alert-success shadow-lg rounded-4 d-flex align-items-center fade show" role="alert"
            style="min-width: 300px; animation: slideIn 0.5s ease;">

            <div class="me-3">
                ✔
            </div>

            <div class="flex-grow-1">
                <strong>Success!</strong><br>
                <?php echo $_SESSION['cart_success']; ?>
            </div>

            <button type="button" class="btn-close ms-3" data-bs-dismiss="alert"></button>
        </div>
    </div>

    <style>
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    </style>

    <?php
    

    
    }
    
    unset($_SESSION['cart_success']);
    
    ?>





    <!-- cart popup -->


    <form action="./add-to-cart.php" method="POST"
        class="min-vh-100 d-none d-flex justify-content-center cart-popup align-items-center w-100 position-fixed top-0"
        style="background-color: rgba(0,0,0,0.5);z-index:444">
        <div style="height:90vh;overflow-y:scroll"
            class="card pop-form col-xl-4 col-lg-6 position-relative col-md-8 col-sm-10 col-11 rounded-md border-0 shadow">
            <input type="hidden" name="product_id" class="product_id" value="">
            <i class="bi bi-x-lg close-pop position-absolute text-danger pointer" style="top: 10px;right:10px"></i>
            <img class="pop-image"
                src="https://cheezious.com/_next/image?url=https%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1771498357951-01%20(1).png&w=1080&q=75"
                width="100%" alt="">
            <div class="p-3">
                <h5 class="mt-2 pop-name">Ramadan Deal 2</h5>
                <p class="text-secondary text-sm">Lorem ipsum dolor sit amet.</p>
                <div class="d-flex gap-3">
                    <div class="px-3 text-white rounded-pill text-sm py-1 bg-danger">
                        Starting price
                    </div>
                </div>
                <div class="d-flex my-1  justify-content-between align-items-center">
                    <h6 class="m-0">Choose Your Drink</h6>
                    <div class="px-3 text-dark rounded-pill text-sm py-1 bg-warning">
                        Required
                    </div>
                </div>

                <ul class="list-unstyled d-flex gap-3 flex-column">
                    <li class="d-flex gap-2 align-items-center">
                        <input name="extras" style="height:20px;width:20px" type="radio" id="Rango Next"
                            value="Rango Next">
                        <label for="Rango Next">Rango Next</label>
                    </li>
                    <li class="d-flex gap-2 align-items-center">
                        <input name="extras" style="height:20px;width:20px" type="radio" id="Cola Next"
                            value="Cola Next">
                        <label for="Cola Next">Cola Next</label>
                    </li>
                    <li class="d-flex gap-2 align-items-center">
                        <input name="extras" style="height:20px;width:20px" type="radio" id="Dare Next"
                            value="Dare Next">
                        <label for="Dare Next">Dare Next</label>
                    </li>
                    <li class="d-flex gap-2 align-items-center">
                        <input name="extras" style="height:20px;width:20px" type="radio" id="Fizz Next"
                            value="Fizz Next">
                        <label for="Fizz Next">Fizz Next</label>
                    </li>
                    <li class="d-flex gap-2 align-items-center">
                        <input name="extras" style="height:20px;width:20px" type="radio" id="Roh Afza Next"
                            value="Roh Afza Next">
                        <label for="Roh Afza Next">Roh Afza Next</label>
                    </li>
                    <li class="d-flex gap-2 align-items-center">
                        <input name="extras" style="height:20px;width:20px" type="radio" id="Jam-e-Shiree Next"
                            value="Jam-e-Shiree Next">
                        <label for="Jam-e-Shiree Next">Jam-e-Shiree Next</label>
                    </li>
                </ul>

                <button class="btn-warning w-100 rounded-pill btn">
                    Add To Cart
                </button>
            </div>
        </div>
    </form>







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


                <form action="./login.php" method="POST" class="sign-in-container w-100">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input name="email" type="text" placeholder="e.g. example@mail.com" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" placeholder="******" class="form-control">
                    </div>
                    <button class="btn w-100 mt-3 btn-danger">
                        Login
                    </button>
                </form>
                <form action="./signup.php" method="POST" class="sign-up-container w-100 d-none">

                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" placeholder="e.g. Example" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" placeholder="e.g. example@mail.com" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" placeholder="******" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input type="text" name="address" placeholder="Islamabad" class="form-control">
                    </div>
                    <button class="btn w-100 mt-3 btn-danger">
                        Sign Up
                    </button>
                </form>
                <span class="d-block my-2 text-danger login-text fw-semibold d-none text-end ms-auto" href="">
                    Already have an account ? <span class="text-decoration-none sign-in-btn text-primary fw-bold">Sign
                        In</span>
                </span>
                <span class="d-block my-2 text-danger register-text fw-semibold text-end ms-auto" href="">
                    New to the website ? <span class="text-decoration-none sign-up-btn text-primary fw-bold">Sign
                        Up</span>
                </span>
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
                        <?php 
                            if(isset($_SESSION['token'])){
                        ?>

                        <form action="./add-to-cart.php" method="POST">

                            <button data-image="<?php echo $item2['image'] ?>"
                                data-product_name="<?php echo $item2['product_name'] ?>"
                                data-id="<?php echo $item2['product_id'] ?>" type="button"
                                class='w-100 popup-cart btn  btn-light shadow rounded-3 p-2 my-3'>Add
                                To
                                Cart</button>
                        </form>

                        <?php 
                            }else{
                                echo "<button class='w-100 btn cart-btn btn-light shadow rounded-3 p-2 my-3'>Add To Cart</button>";
                            }
                        ?>


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
        <div style="height: 400px;width:400px;top:40px;overflow-y:scroll;"
            class="bg-body-secondary position-sticky  p-4 rounded-3 d-flex justify-content-center align-items-center flex-column gap-1">
            <!-- <img src="https://cheezious.com/_next/static/media/emptycart.e7858caa.svg" width="100px" alt="">
            <h5>YOUR CART IS EMPTY</h5>
            <h6>Go ahead and explore top categories </h6> -->


            <div class="d-flex w-100 gap-3 align-items-center justify-content-between text-danger fw-semibold">
                <h5>Total</h5>
                <h5>Rs. 3,547</h5>
            </div>

            <div class="bg-white w-100 p-4 rounded-md card border-0 shadow-lg">
                <div class="d-flex w-100 gap-3">
                    <img src="" alt="">
                    <div class="w-100">
                        <h5>Ramadan Deal 5</h5>
                        <div class="d-flex justify-content-between text-secondary">
                            <h5>Rango Next</h5>
                            <h5>Rs. 0</h5>
                        </div>
                        <div class="text-end text-danger">
                            Rs. 2,749
                        </div>
                        <div class="d-flex justify-content-end gap-1 align-items-center">
                            <i style="height: 30px;width:30px;"
                                class="bi rounded-circle bi-trash d-flex justify-content-center align-items-center bg-danger text-white"></i>
                            <h6>1</h6>
                            <i style="height: 30px;width:30px;"
                                class="bi d-flex justify-content-center align-items-center rounded-circle bi-plus bg-warning "></i>
                        </div>
                    </div>
                </div>
            </div>



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



    let cartPopUp = document.querySelector('.cart-popup') //oper wala
    let popUpBtn = document.querySelectorAll('.popup-cart') // neche wala
    let closeBtn = document.querySelector('.close-pop')
    let popImage = document.querySelector('.pop-image')
    let popName = document.querySelector('.pop-name')
    let product_id = document.querySelector('.product_id')
    popUpBtn.forEach((item, index) => {
        item.addEventListener('click', (e) => {
            popImage.src = `./category_images/${e.target.dataset.image}`
            popName.innerHTML = e.target.dataset.product_name
            product_id.value = e.target.dataset.id
            cartPopUp.classList.remove('d-none')
        })
    })

    closeBtn.addEventListener('click', () => {
        cartPopUp.classList.add('d-none')
    })
    </script>

</body>

</html>