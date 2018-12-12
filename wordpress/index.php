<?php get_header(); ?>
    <!-- Technology -->
    <div class="container-fluid padding">
        <div class="row technology text-center" id="technology">
            <div class="col-12">
                <h1 class="display-4">Technology</h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">The newest frameworks/languages were used in the coding of this website</p>
            </div>
        </div>
    </div>

    <!-- Three Column Section -->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-code"></i>
                <h3>HTML5</h3>
                <p>Built with the latest version of HTML, HTML5</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-bold"></i>
                <h3>BOOTSTRAP</h3>
                <p>Built with the latest version of Bootstrap, Bootstrap 4</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <i class="fab fa-css3"></i>
                <h3>CSS3</h3>
                <p>Built with the latest version of CSS, CSS3</p>
            </div>
        </div>
        <hr class="my-4">
    </div>

    <!-- Two Column Section -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6" id="about">
                <h2>About Me</h2>
                <p>The columns will automatically stack on top of each other when the screen is less than 576px wide</p>
                <p>Resize the browser window to see the effect. Responsive web design has become more important as the amount of mobile traffic now accounts for more than half of total internet traffic</p>
                <p>It can also display the web page differently depending on the screen size or viewing device</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#aboutModal">Learn more</a>
            </div>
            <br>
            <div class="col-lg-6">
                <img src="images/about.png" class="img-fluid">
            </div>
        </div>
    </div>
    <hr class="my-4">

    <!-- Fixed Background -->
    <figure>
        <div class="fixed-wrap">
            <div id="fixed"></div>
        </div>
    </figure>
    <br>

    <!-- Nature Pictures -->
    <button class="btn btn-primary btn-block" data-toggle="collapse" data-target="#nature"><noscript>Enable Javascript to use this </noscript>Dropdown</button>
    <div id="nature" class="collapse">
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="display-4">Yes, that was a panda eating bamboo!</h1>
                    <h4>and here are some nature pictures:</h4>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-6 col-md-3">
                    <img class="nature-image rounded-circle" src="images/dropdown1.jpg">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="nature-image rounded-circle" src="images/dropdown2.jpg">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="nature-image rounded-circle" src="images/dropdown3.jpg">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="nature-image rounded-circle" src="images/dropdown4.jpg">
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4">

    <!-- Meet The Team -->
    <div class="container-fluid padding">
        <div class="row team text-center">
            <div class="col-12" id="team">
                <h1 class="display-4">Meet The Team</h1>
            </div>
            <hr>
        </div>
    </div>

    <!-- Cards -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/person1.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Carl C</h4>
                        <p class="card-text">Carl is an old man that used to run track. Though he doesn't anymore, Carl can still beat the youngsters in races.</p>
                        <a href="#teamModal" class="btn btn-outline-secondary" data-toggle="modal" data-target="#teamModal">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/person2.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Jim Java</h4>
                        <p class="card-text">Jim isn't quite as fast as Carl, but what Jim lacks in speed he makes up for in scalability and popularity.</p>
                        <a href="#teamModal" class="btn btn-outline-secondary" data-toggle="modal" data-target="#teamModal">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/person3.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Jason Javascript</h4>
                        <p class="card-text">Jason gets mistaken for Jim's brother, though they're not related. He spends his spare time being an instructor with interactive classes which has helped him rival Jim's popularity.</p>
                        <a href="#teamModal" class="btn btn-outline-secondary" data-toggle="modal" data-target="#teamModal">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">
    </div>

    <!-- Contact -->
    <div class="container-fluid padding" id="contact">
        <div class="row padding">
            <div class="col-lg-6">
                <h3>Contact Us</h3>
                <form role="form" id="contactForm" data-toggle="validator" onsubmit="openModal()">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="name" class="h4">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email" class="h4">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="h4 ">Message</label>
                        <textarea id="message" class="form-control" rows="5" placeholder="Enter your message"
                                  required></textarea>
                    </div>
                    <button type="submit" id="form-submit" class="btn btn-outline-secondary">Submit</button>
                </form>
                <br>
            </div>
            <div class="col-lg-6">
                <noscript>
                    <div class="row padding">
                        <div class="col-12">
                            <h3>Our Location: </h3>
                        </div>
                        <div class="col-lg-6">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="float-left">(555) 555-5555</h4>
                        </div>
                        <div class="col-lg-6">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="float-left">email@domain.com</h4>
                        </div>
                        <div class="col-lg-6">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="float-left">Toronto, Ontario</h4>
                        </div>
                    </div>
                </noscript>
                <div id="map-container" class="z-depth-1 float-right" style="height: 400px; width: 600px; margin-right: 100px"></div>
                <br>
            </div>
        </div>

        <!-- Extras -->
        <button type="button" id="back-to-top" class="btn btn-primary btn-lg" role="button" title="Click to return to the top" data-toggle="tooltip" data-placement="left"><i class="fa fa-arrow-up"></i></button>

        <!-- About Modal -->
        <div id="aboutModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Social Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Fun Fact: </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>I own a German Shepherd named after "Elsa" from the Disney movie Frozen</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Modal -->
        <div id="socialModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Social Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Currently Unavailable</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>The social media you have clicked is unavailable at this time.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Modal -->
        <div id="teamModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Team Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Currently Unavailable</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Profiles are currently unavailable at this time.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Modal -->
        <div id="contactModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Social Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Currently Unavailable</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>The php backend for the contact form is currently unavailable at this time.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>