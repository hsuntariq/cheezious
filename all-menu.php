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