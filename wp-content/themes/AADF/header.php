<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php wp_head() ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,700i,900" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/Karla" rel="stylesheet">

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light">
    <img src="wp-content/themes/AADF/assets/images/logo.png" width="68" height="68" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

	<?php
	 echo wp_nav_menu();
	?>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0">
            <button class="btn button-header1 my-2 my-sm-0">J'adhère</button>
            <button class="btn button-header2 my-2 my-sm-0" type="submit">Je fais un don</button>
        </form>
    </div>
</nav>

<style>

    .button-header1{
        background: #E51E31;
        border-radius: 18.5px;
        border: none;
        color: white;
        padding: 7px 32px 7px 32px;
        margin-right: 1rem;

        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-size: 18.2222px;
        line-height: 21px;
    }

    .button-header1:hover{
        background: white;
        border-radius: 18.5px;
        border: 2px solid #E51E31;
        color: black;
        padding: 7px 32px 7px 32px;
        margin-right: 1rem;

        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-size: 18.2222px;
        line-height: 21px;
    }

    .button-header2{
        background:#FF9C00;
        border-radius: 18.5px;
        border: none;
        color: white;
        padding: 7px 32px 7px 32px;

        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-size: 18.2222px;
        line-height: 21px;
    }

    .button-header2:hover{
        background: white;
        border-radius: 18.5px;
        border: 2px solid #FF9C00;
        color: black;
        padding: 7px 32px 7px 32px;

        font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        font-size: 18.2222px;
        line-height: 21px;
    }

    .nav-link{
        font-family: 'Karla';
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 21px;
        margin: 0px 2rem 0px 2rem;
    }

    .hover-underline-animation {
        display: inline-block;
        position: relative;
        color: #0087ca;
    }

    .hover-underline-animation:after {
        content: '';
        position: absolute;
        width: 100%;
        transform: scaleX(0);
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: black;
        transform-origin: bottom right;
        transition: transform 0.25s ease-out;
    }

    .hover-underline-animation:hover:after {
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    .page_item{
        font-family: 'Karla';
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 21px;
        margin: 0px 2rem 0px 2rem;
        color: black;

        display: inline-block;
        position: relative;
    }

    .page_item:after{
        content: '';
        position: absolute;
        width: 80%;
        transform: scaleX(0);
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: black;
        transform-origin: bottom;
        transition: transform 0.25s ease-out;
    }

    .page_item:hover:after{
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    a:hover{
        text-decoration: none;
        color: black;
    }

    a{
        color: black;
    }
</style>
