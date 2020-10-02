@extends('layouts.app')

@section('content')
    <!--  =================================
                        Contact us Part End
                  ==================================  -->
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h1> <strong>Contact</strong> Us</h1>
                        <p class="contact-header-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ratione, unde quo similique eos minima eligendi, id, recusandae adipisci error ex exercitationem iusto modi accusantium nisi autem tenetur tempora architecto?
                        </p>
                    </div>
                    <div class="contacts">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <x-alert></x-alert>
                                <div class="heading-title">
                                    <form class="getin_form" method="post" action="{{ route('contactmsg') }}">
                                        @csrf
                                        <div class="row px-2">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control" id="name1" type="text" placeholder="Name:" required name="name">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="email" id="email1" placeholder="Email:" name="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" id="email1" required placeholder="Mobile: +88 015XXXXXXXX" name="mobile">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="message1" placeholder="Message:" required name="message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" id="submit_btn1" class="contact_btn">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="contact-meta">
                                    <div class="heading-title ">
                                        <span class="compny-name">Wicon Electronics World</span>
                                        <h3>Headoffice</h3>
                                    </div>
                                    <p class="bottom10">Address: 26/A/2 Topkhana Road, SegunBagicha, Dhaka.</p>
                                    <p class="bottom10">+880 1318314773</p>
                                    <p class="bottom10">+880 9678776777</p>
                                    <p class="bottom10"><a href="#">info@wicon.com.bd</a></p>
                                    <p class="bottom10">Sat-Thu: 9am-6pm</p>
                                    <ul class="social-icons">
                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                                        <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i> </a> </li>
                                        <li><a href="#" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                                        <li><a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i> </a> </li>
                                        <li><a href="#"><i class="far fa-envelope"></i> </a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.413933154784!2d90.4063581155076!3d23.732614184598162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f6a6744035%3A0xb153d59ff87f4717!2sWICON%20ELECTRONICS%20WORLD!5e0!3m2!1sen!2sbd!4v1601211167920!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-header">
                        <h3>ShowRooms & DealerShops</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="showroom">
                        <div class="showroom-area">
                            <h5>Dhaka-1</h5>
                        </div>
                        <div class="showroom-name">
                            <h4>Wicon Electronics</h4>
                        </div>
                        <div class="showroom-address">
                            <p>175 Basment-1, Sundarban Squre Market, Dhaka 1000</p>
                            <!-- <a href="#">
                                <p class="phone">Phone : 012345678910</p>
                            </a>
                            <a href="#">
                                <p>Email : google@gmail.com</p>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="showroom">
                        <div class="showroom-area">
                            <h5>Dhaka-1</h5>
                        </div>
                        <div class="showroom-name">
                            <h4>Wicon Electronics</h4>
                        </div>
                        <div class="showroom-address">
                            <p>175 Basment-1, Sundarban Squre Market, Dhaka 1000</p>
                            <!-- <a href="#">
                                <p class="phone">Phone : 012345678910</p>
                            </a>
                            <a href="#">
                                <p>Email : google@gmail.com</p>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="showroom">
                        <div class="showroom-area">
                            <h5>Dhaka-1</h5>
                        </div>
                        <div class="showroom-name">
                            <h4>Wicon Electronics</h4>
                        </div>
                        <div class="showroom-address">
                            <p>175 Basment-1, Sundarban Squre Market, Dhaka 1000</p>
                            <!-- <a href="#">
                                <p class="phone">Phone : 012345678910</p>
                            </a>
                            <a href="#">
                                <p>Email : google@gmail.com</p>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="showroom">
                        <div class="showroom-area">
                            <h5>Dhaka-1</h5>
                        </div>
                        <div class="showroom-name">
                            <h4>Wicon Electronics</h4>
                        </div>
                        <div class="showroom-address">
                            <p>175 Basment-1, Sundarban Squre Market, Dhaka 1000</p>
                            <!-- <a class="phone" href="#">
                                <p class="phone">Phone : 012345678910</p>
                            </a>
                            <a href="#">
                                <p>Email : google@gmail.com</p>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="showroom">
                        <div class="showroom-area">
                            <h5>Dhaka-1</h5>
                        </div>
                        <div class="showroom-name">
                            <h4>Wicon Electronics</h4>
                        </div>
                        <div class="showroom-address">
                            <p>175 Basment-1, Sundarban Squre Market, Dhaka 1000</p>
                            <!-- <a href="#">
                                <p class="phone">Phone : 012345678910</p>
                            </a>
                            <a href="#">
                                <p>Email : google@gmail.com</p>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="showroom">
                        <div class="showroom-area">
                            <h5>Dhaka-1</h5>
                        </div>
                        <div class="showroom-name">
                            <h4>Wicon Electronics</h4>
                        </div>
                        <div class="showroom-address">
                            <p>175 Basment-1, Sundarban Squre Market, Dhaka 1000</p>
                            <!-- <a href="#">
                                <p class="phone">Phone : 012345678910</p>
                            </a>
                            <a href="#">
                                <p>Email : google@gmail.com</p>
                            </a> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
