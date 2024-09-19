<x-layout>

    <div class="page-header-area">
        <div class="page-header-content bg-img" data-bg-img="assets/images/photos/bg1.jpg">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Contact Area Wrapper ==-->
    <div class="contact-area section-space">
        <div class="container">
            <div class="contact-wrp">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="contact-info-area mt-n1">
                            <h3 class="contact-info-area-title">Contact</h3>

                            <!--== Start Contact Info Item ==-->
                            <div class="contact-info-item">
                                <div class="contact-info-icon"><i class="icon icon-location-pin"></i></div>
                                <div class="contact-info-content">
                                    <p>Address goes here, street, Crossroad 123.</p>
                                </div>
                            </div>
                            <!--== End Contact Info Item ==-->

                            <!--== Start Contact Info Item ==-->
                            <div class="contact-info-item">
                                <div class="contact-info-icon"><i class="icon icon-envelope"></i></div>
                                <div class="contact-info-content">
                                    <p>info@example.com / info@example.com</p>
                                </div>
                            </div>
                            <!--== End Contact Info Item ==-->

                            <!--== Start Contact Info Item ==-->
                            <div class="contact-info-item">
                                <div class="contact-info-icon"><i class="icon icon-screen-smartphone"></i></div>
                                <div class="contact-info-content">
                                    <p>+1 35 776 859 000 / +1 35 776 859 011</p>
                                </div>
                            </div>
                            <!--== End Contact Info Item ==-->
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="contact-form-area">
                            <!--== Start Contact Form ==-->
                            <form class="contact-form" id="contact-form"
                                action="https://htmldemo.net/dkoor/dkoor/assets/php/mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-input-item">
                                            <input class="form-control" type="text" name="con_name" id="name"
                                                placeholder="Name">
                                            <i class="icon fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-input-item">
                                            <input class="form-control" type="email" name="con_email" id="mail"
                                                placeholder="Email">
                                            <i class="icon fa fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input-item">
                                    <input class="form-control" type="text" name="con_subject" id="subject"
                                        placeholder="Subject">
                                    <i class="icon fa fa-phone-square"></i>
                                </div>
                                <div class="form-input-item">
                                    <textarea class="form-control" name="con_message" id="message"></textarea>
                                </div>
                                <button class="btn btn-submit mt-1" type="submit">Send Message</button>
                            </form>
                            <!--== End Contact Form ==-->

                            <!--== Message Notification ==-->
                            <div class="form-message mt-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Contact Area Wrapper ==-->

    <!--== Start Map Area Wrapper ==-->
    <div class="container section-bottom-space">
        <div class="map-area mb-n1">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d802879.9165497769!2d144.83475730949783!3d-38.180874157285366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sbd!4v1636803638401!5m2!1sen!2sbd"></iframe>
        </div>
    </div>
</x-layout>