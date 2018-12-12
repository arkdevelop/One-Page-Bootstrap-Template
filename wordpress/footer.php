<?php if( TT::get_mod('footer')!= 0 ): ?>
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="images/logo_bottom.png" class="logo rounded">
                <hr class="light">
                <br>
                <p>555-555-5555</p>
                <p>admin@arkdevelopment.me</p>
                <p>301 Street Name</p>
                <p>Toronto, Ontario, 000 000</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>My Hours</h5>
                <hr class="light">
                <br>
                <p>Monday - Friday: All Day</p>
                <p>Saturday: All Day</p>
                <p>Sunday: All Day</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Social Media</h5>
                <hr class="light">
                <!-- Social -->
                <div class="col-12 social">
                    <a href="#socialModal" data-toggle="modal" data-target="#socialModal"><i class="fab fa-facebook"></i></a>
                    <a href="#socialModal" data-toggle="modal" data-target="#socialModal"><i class="fab fa-twitter"></i></a>
                    <a href="#socialModal" data-toggle="modal" data-target="#socialModal"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#socialModal" data-toggle="modal" data-target="#socialModal"><i class="fab fa-instagram"></i></a>
                    <a href="#socialModal" data-toggle="modal" data-target="#socialModal"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Copyright -->
            <div class="col-12 float-left">
                <hr class="light-100">
                <h5>&copy;
                    <script type="text/javascript">
    let today = new Date();
                        let year = today.getFullYear();
                        let stringYear = year.toString();
                        document.write(stringYear);
                    </script>
                    <noscript>
2018
                    </noscript>
arkdevelopment.me
                </h5>
            </div>
        </div>
    </div>
</footer>
<?php endif; ?>
<?php
/*
*************************************************
  WordPress Footer Hook
*************************************************
*/
wp_footer(); ?>
