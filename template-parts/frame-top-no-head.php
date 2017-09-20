    <style>
        /**** frame-top-no-head ****/
        body {
            padding: 40px;
            height: 100vh;
            transition: padding 1.5s ease-in-out !important;
            background-color: #000715;
            box-sizing: border-box;
            font-family: roboto;
        }
        .start-page {
            position: fixed;
            z-index: 2;
            width: 56px;
            height: 56px;;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            border: 1px solid #ffffff;
            cursor: pointer;
            background-color: #000715;
            box-sizing: border-box;
        }
        .start-page > img {
            top: calc(50% - 14px);
            width: 28px;
            left: 0;
            height: auto;
            margin: auto;
            display: block;
            transition: transform .2s ease-in-out;
            position: relative;
        }
        .start-page:hover > img {
            transform: rotate(90deg);
        }
        .page-loaded .wrapper-frame {
            transform: scaleY(1);
            transition: transform .5s ease-in-out !important;
        }
        .wrapper-frame {
            transform: scaleY(.75);
            outline: #fff solid 1px;
            outline-offset: 9px;
            height: 100%;
            overflow-y: auto;
            overflow-x: hidden;
        }
    </style>

<body class="page-loaded">
<a href="http://www.west-villa.com.ua/menu/">
    <div class="start-page">
        <img src="http://www.try.arpik.net/wp-content/themes/structure/library/photo/button-close.svg" alt="">
    </div>
</a>

<div class="wrapper-frame">