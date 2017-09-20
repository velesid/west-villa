<?php
/*
Template Name: Pre-load
*/
?>

<style>
    .preload{
        position: relative;
        top: 0;
        left: 0;
        min-height: 100%;
        min-width: 100%;
        overflow: hidden;
    }

    .preload .left_box { /* --- button --- */
        width: 100px;
        height: 100px;
        position: absolute;
        left: 0px;
        top: 50%;
        margin-top: -50px;
        background: #00020a;
        cursor: pointer;
        opacity: 1;
        z-index: 103;
    }
    .left_box .fill {
        width: 100%;
        height: 100%;
        background: #00020a;
        transition-duration: 1.5s;
        float: left;
        color: #fff;
        text-align: center;
        opacity: 0;
        transform: scale(0.3);
    }
    .left_box:hover .fill{
        opacity: 1 !important;
        transform: scale(1);
        border: 1px solid #b99a49;
    }
    .left_box:hover img{
        opacity: 0 !important;
    }
    .box_animOut {
        animation-name: zoomOut;
        animation-duration: 3s;
        opacity: 1;
    }
    .left_box .fill p {
        width: 100%;
        padding-top: 33px;
        letter-spacing: 4px;
        font-size: 12px;}   /*-------------*/

.left_box > img {
    width: 35px;
    height: 35px;
    display: block;
    position: absolute;
    transform: translateX(100%);
    top: calc(50% - 17.5px);
    }
    .preload .left_box .menu_icon{
        width: 35px;
        height: 35px;
        margin: 32px auto 0;
        display: block;
    }
    .block-content:before{
        content: "";
        width: 60%;
        height: 100%;
        display: block;
        background-image: -webkit-radial-gradient(#000, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.08), rgba(0, 0, 0, 0.06), rgba(0, 0, 0, 0.04), rgba(0, 0, 0, 0.02), transparent);
        border-radius: 50%;
        position: absolute;
        left: 18%;
        top: 15%;
    }
    .background{
        width: 100%;
        height: auto;
        position: absolute;
        bottom: 0;
    }
    .block-content .logo{
        width: 50%;
        position: absolute;
        top: 25%;
        transform: translatex(50%);
    }
    .preload > p{
        width: 100%;
        font-size: 14px;
        text-align: center;
        position: absolute;
        font-family: sans-serif;
        color: rgba(173, 169, 139, 0.46);
        bottom: 0;
    }
    .menu_icon
</style>

<div class="preload">

    <div class="left_box animated fadeInLeft">
        <div class="fill box_animOut" style="opacity: 0;">
            <p>MENU</p>
        </div>
        <img  src="<?= get_template_directory_uri(); ?>/library/photo/menu2.svg" />
    </div>


        <img  class="background" src="<?= get_template_directory_uri(); ?>/library/photo/start.png" />
    <div class="block-content">
        <img  class="logo" src="<?= get_template_directory_uri(); ?>/library/photo/w.v.logo_.png" />
    </div>
    <p>© West Villa 2017</p>

</div>