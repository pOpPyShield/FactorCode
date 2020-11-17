<?php 
    require_once 'Import/Header.php';
    require_once 'NavBar/NavBar.php';
?>
    <section class="Main">
        <div class="container">
            <div class="row">
                <?php include_once './Views/LeftNav/leftnav.php';?><!--done-->
                <section class="col-9" id="right">
                    <?php include_once './Views/Slidebar/slidebar.php'; ?><!--done-->
                    <?php include_once './Views/SanPhamT11/sanphamt11.php';?> <!--done-->    
            </div>
            <div class="main-p">
                <?php include_once './Views/PcBanChay/pcbanchay.php'; ?><!--done-->
            </div>
            <div class="main-product">
                <?php include_once './Views/UuDaiLapTop/uudailaptop.php'; ?><!--done-->
            </div>
            <div class="main-product">
              <?php include_once './Views/ManHinhKhuyenMai/manhinhkhuyenmai.php';?><!--done-->
            </div>

            <div class="main-product">
                <?php include_once './Views/Pc_Workstation/pc-workstation.php'; ?> <!--done-->
    
            <div class="main-product">
                <?php include_once './Views/BanPhim/banphimgaming.php'; ?> <!--done-->
            </div>
            <div class="main-product">
                <?php include_once './Views/ChuotGaming/chuotgaming.php'; ?><!--done-->
            </div>
            <hr>
            <div class="row" id="selling">
                <?php include_once './Views/FormInputEmailNoti/emailenter.php'; ?> <!--done-->
            </div>

            </div>  
        </div>
</section>
    <!------End-Main-->
<?php include_once './Views/FooterElement/FooterSpec.php';?>
<?php include_once './Views/Import/Footer.php' ?>
