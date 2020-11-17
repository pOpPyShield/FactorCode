<?php 
    require_once 'Import/Header.php';
    require_once 'NavBar/NavBar.php';
?>
    <section class="Main">
        <div class="container">
            <div class="row">
                <?php include_once 'LeftNav/leftnav.php';?><!--done-->
                <section class="col-9" id="right">
                    <?php include_once 'Slidebar/slidebar.php'; ?><!--done-->
                    <?php include_once 'SanPhamT11/sanphamt11.php';?> <!--done-->    
            </div>
            <div class="main-p">
                <?php include_once 'PcBanChay/pcbanchay.php'; ?><!--done-->
            </div>
            <div class="main-product">
                <?php include_once 'UuDaiLapTop/uudailaptop.php'; ?><!--done-->
            </div>
            <div class="main-product">
              <?php include_once 'ManHinhKhuyenMai/manhinhkhuyenmai.php';?><!--done-->
            </div>

            <div class="main-product">
                <?php include_once 'Pc_Workstation/pc-workstation.php'; ?> <!--done-->
    
            <div class="main-product">
                <?php include_once 'BanPhim/banphimgaming.php'; ?> <!--done-->
            </div>
            <div class="main-product">
                <?php include_once 'ChuotGaming/chuotgaming.php'; ?><!--done-->
            </div>
            <hr>
            <div class="row" id="selling">
                <?php include_once 'FormInputEmailNoti/emailenter.php'; ?> <!--done-->
            </div>

            </div>  
        </div>
</section>
    <!------End-Main-->
<?php include_once 'FooterElement/FooterSpec.php';?>
<?php include_once 'Import/Footer.php' ?>
