<?php
session_start();
?>
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



    <?php 
            
        include './navbar.php';
    ?>


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





    <!-- menu section -->


    <div class="container p-5">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Explore Menu</h2>
            <a href="./all-menu.php" class="text-danger text-decoration-none fs-6 fw-bold">
                VIEW ALL
            </a>
        </div>

        <?php 
             include './config.php';
                $select = "SELECT * FROM categories";
                $result = mysqli_query($connection,$select);
                if(mysqli_num_rows($result) > 0){
        ?>

        <div class="position-relative">
            <i class="bi right bi-chevron-right bg-danger position-absolute d-flex justify-content-center align-items-center rounded-2 z-3 text-white"
                style="width: 30px;height:30px;display:block;right:0px;top:50%;transform:translate(50%,-50%);cursor:pointer"></i>
            <i class="bi left bi-chevron-left bg-danger position-absolute d-flex justify-content-center align-items-center rounded-2 z-3 text-white"
                style="width: 30px;height:30px;display:block;left:0px;top:50%;transform:translate(-50%,-50%);cursor:pointer"></i>
            <div class="container menu d-flex gap-4 overflow-x-scroll position-relative px-0 mx-auto py-4">

                <?php 
                include './config.php';
                $select = "SELECT * FROM products";
                $result = mysqli_query($connection,$select);
                foreach($result as $item){
            ?>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card text-center border-warning  ">
                        <img src="./category_images/<?php echo $item['image'] ?>" height="200px" width="80%"
                            class="mx-auto object-fit-cover" alt="">
                        <h6>
                            <?php echo $item['name'] ?>
                        </h6>
                    </div>
                </div>


                <?php 
                }
            ?>

            </div>


        </div>
        <?php 
                }else{
                    echo "<h2 class='text-center display-3'>No Items Available</h2>";
                }
        ?>
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