<?php include "header.php" ?>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-contact.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                      
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Location Start-->
        <section class="location">
           <div class="location-shape" style="background-image: url(assets/images/shape/location-shape.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                       <!--Location Single-->
                        <div class="location__single">
                            <h3 class="location__title">about</h3>
                            <p class="location__text">Let`s take your business to the next level!</p>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4">
                       <!--Location Single-->
                        <div class="location__single location__single-last">
                            <h3 class="location__title">contact</h3>
                            <h5 class="location__phone-email">
                                <a href="tel:926668880000" class="location__phone">+45 60 54 30 77</a>
                                <a href="mailto:needhelp@company.com" class="location__email">info@trepavo.com</a>
                            </h5>
                            <div class="location__social">
                              
                                <a href="https://www.facebook.com/trepavocreativeagency"><i class="fab fa-facebook"></i></a>
                            
                                <a href="https://www.instagram.com/trepavocreativeagency/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                       <!--Location Single-->
                        <div class="location__single">
                            <h3 class="location__title">address</h3>
                            <p class="location__text">Tjørnevangen 1, 2660 Brøndby Strand, Copenhagen, DK </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="location__bottom">
                            <p class="location-bottom__text">Trepavo Creative Agency dedicated to business with personality! <a href="about.html">Find Your Solution</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Location End-->

        <!--contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">contact with us</span>
                    <h2 class="section-title__title">have question?</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page__form">
                            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Subject" name="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="Write message"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">send a message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact Page End-->

        <!--Google Map Start-->
        <section class="contcat-page-google-map">
            <iframe
               src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4506.107550099154!2d12.423975!3d55.618480000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465256f5545f2475%3A0x8c00df4dc176c692!2sTj%C3%B8rnevangen%201%2C%202660%20Br%C3%B8ndby%20Strand!5e0!3m2!1sen!2sdk!4v1674411280383!5m2!1sen!2sdk" width="2000" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               

        </section>
        <!--Google Map End-->

<?php include "footer.php" ?>
  