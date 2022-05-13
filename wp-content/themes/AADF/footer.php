</div>
<footer class=" text-white mx-auto" style="background-color: black;">

    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                <ul class="list-unstyled mb-0">
                    <text-white class="text-white">
                        <li style="margin: 1rem" class="header-view">
							<?php
							wp_nav_menu( [
								'theme_location' => 'footer',
								'container'      => false,
							] )
							?>
                        </li>
                    </text-white>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">Echangeons ensemble</h5>

                <ul class="list-unstyled">
                    <li>
                        <img src="http://localhost/wordpress/wp-content/uploads/2022/05/Vector.png">
                        <img src="http://localhost/wordpress/wp-content/uploads/2022/05/Vector-2.png">
                        <img src="http://localhost/wordpress/wp-content/uploads/2022/05/Vector-1.png">
                    </li>
                    <li>

                    </li>
                    <li>

                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <div class="container p-4">
        <hr>
    </div>

    <!-- Copyright -->
    <div class="has-text-align-right p-3 container" style="background-color: rgba(0, 0, 0, 0.2);">
        <img src="wp-content/themes/AADF/assets/images/logo.png" class="image-align-left" width="68" height="68"
             alt="">
        <a class="text-white" href="https://mdbootstrap.com/">Mentions légales</a>
        <a class="text-white" href="https://mdbootstrap.com/">Cookies</a>
        © Copyright 2022 Association des Analystes Digitaux Francophones
    </div><!-- Copyright -->
</footer>
</body>
<style scoped>
    a {
        margin: 0px 2rem 0px 0px;
    }

    footer {
        padding-bottom: 6rem;
    }

    .image-align-left {
        float: left;
        margin-bottom: 2rem;
    }

    hr {
        border: none;
        border-top: 1px solid white;
        color: white;
        overflow: visible;
        text-align: center;
        height: 5px;
    }

    .text-white {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 21px;

        color: #FFFFFF;
        text-decoration: none;
    }

    .text-white:hover {
        text-decoration: none;
        color: white;
    }

    img {
        margin: 1rem;
    }

    .text-white.header-view li{
        padding: 5rem;
    }

    text-white li a{
        color: white;
    }

    text-white li a:after{
        content: '';
        position: absolute;
        width: 100%;
        transform: scaleX(0);
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: white;
        transform-origin: bottom;
        transition: transform 0.25s ease-out;
    }

    text-white li a:hover:after{
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    text-white li a:hover{
        text-decoration: none;
        color: white;
    }

</style>
</html>