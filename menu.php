<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#FF0000;">
    <div class="navbar-inner">
    <div class="container">
        <div class="row">
            <a class="navbar-brand" href="#"><span style="color:#FFFFFF;">PP PLUS</span><span style="color:#3399CC">  REAL ESTATE CO,LTD</span></a>
 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
 
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
 
                    <?php
                    if (empty($_SESSION['mem_id'])) {
                        ?>
                        <li><a href="login.php">Login</a></li>    
                        <li><a href="register.php" >Sigup</a></li>   
                        <?php
                    } else {
                        ?>   
                        <li> <a href="#">ยินดีต้อนรับ : <b><?php echo $_SESSION['mem_name']; ?></b></a></li>
                        <?php
                        if ($_SESSION['mem_level'] == 1) {
                            ?>
                            <li> <a href="category.php">จัดการหมวดกระทู้</a></li>
                        <?php } ?>
                        <li><a href="logout.php">ออกจากระบบ</a></li>
                        <?php
                    }
                    ?>             
 
                </ul>
            </div>
        </div>
    </div>
    </div>    
</div>