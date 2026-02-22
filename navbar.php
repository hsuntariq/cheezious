<div class="w-100 z-3 min-vh-100 underlay position-fixed top-0" style="background-color: rgba(0,0,0,0.5);">
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
        <button class="btn position-relative p-2 d-flex gap-1 fw-semibold btn-warning">
            <?php 
                if(isset($_SESSION['token'])){

                $user_id = $_SESSION['user_id'];
                include './config.php';
                $count = "SELECT COUNT(id) AS total FROM cart WHERE user_id = $user_id";
                $result = mysqli_query($connection,$count);
                if(mysqli_num_rows($result) > -1){
            ?>

            <div class="rounded-circle text-white fw-bold position-absolute d-flex justify-content-center align-items-center"
                style="width:12px;height:12px;background:red;top:-5px;right:-8px;font-size:10px;">
                <?php 
                    foreach($result as $item){
                        echo $item['total'];
                    }
                ?>
            </div>


            <?php } } ?>

            <i class="bi bi-cart"></i>
            CART
        </button>
        <button class="btn p-2  d-flex gap-1 fw-semibold btn-warning">
            <i class="bi bi-person"></i>
            <?php 
                if(isset($_SESSION['token'])){
                echo $_SESSION['token'];

                }else{
                echo "LOGIN";
                }
            ?>
        </button>
        <?php 
            if(isset($_SESSION['token'])){
        ?>

        <form action="./logout.php" method="POST">
            <button class="btn p-2 d-flex gap-1 fw-semibold btn-danger">
                <i class="bi bi-power"></i>
                Logout
            </button>
        </form>

        <?php }?>

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