 <!-- Header-->
 <style>
    #main-header1{
        position:relative;
        background: rgb(0,0,0)!important;
        background: radial-gradient(circle, rgba(0,0,0,0.48503151260504207) 22%, rgba(0,0,0,0.39539565826330536) 49%, rgba(0,212,255,0) 100%)!important;
        height: 80vh !important;
    }
    #main-header1:before{
        content:"";
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background-repeat: no-repeat;
        background-size: cover;
        filter: drop-shadow(0px 7px 6px black);
        z-index:-1;
        animation:changeImage 10s Linear infinite;
    }
    @keyframes changeImage {
        0%{
            background-image:url("img/nepalcars.jpg");
            background-position:center;
        }
        25%{
            background-image:url("img/nepalcars.jpg");
        }
        50%{
            background-image:url("img/nepalcars.jpg");
        }
        75%{
            background-image:url("img/nepalcars.jpg");
        }
        100%{
            background-image:url("img/nepalcars.jpg");
           
        }
        
    }
    </style>
   <header class="bg-dark py-5 d-flex align-items-center" id="main-header1">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
 <img style="height:100px;" src="https://reviews.com.np/uploads/article/nepal-polices-first-ever-mobile-app-launched-in-gandaki-zone/thumb/540X360resize_nepal-polices-first-ever-mobile-app-launched-in-gandaki-zone.png" >
 
 <img style="height:100px;" src="https://logos-download.com/wp-content/uploads/2021/07/Emblem_of_Nepal.png">

            <h1 class="display-4 fw-bolder"><?php echo $_settings->info('name') ?></h1>
            <p class="lead fw-normal text-white-50 mb-0 mt-4"><a class="btn btn-default btn-lg bg-lightblue" href='<?php echo base_url.'admin' ?>'>Welcome</a></p>
        </div>
    </div>
</header>
<!-- Section-->
<style>
    .book-cover{
        object-fit:contain !important;
        height:auto !important;
    }
</style>
<section class="py-3">
    <div class="container px-4 px-lg-5 mt-5">
    <?php require_once('about.html') ?>
    </div>
    <center><p class="lead fw-normal text-white-50 mb-0 mt-4"><a class="btn btn-default btn-lg bg-lightblue" href='<?php echo base_url.'bill' ?>'>Watch you Fine Bill Statement</a></p></center>
</section>