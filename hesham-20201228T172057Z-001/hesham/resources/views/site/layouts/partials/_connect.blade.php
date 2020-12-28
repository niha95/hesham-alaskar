  <!-- Quick support -->
  <div id="contact" class="site-quick-support site-dark-section">

    <!-- Bootstrap -->
    <div class="container">
        <div class="row">
            <!-- Bootstrap inner columns -->
            <div class="col-xs-12">

                <div class="map-and-form-container">

                    <!-- Left colom -->
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="left-colom">
                            <figure> <img src="{{ asset('site/assets/images/quick-support-man.png') }}" alt="image" style="
                                margin-top: 250px;
                            "> </figure>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <!-- form -->
                        <div class="form-container">
                            <!-- H1 heading -->


                            <!-- H2 heading -->
                            <h2>@lang('general.anyquestion')<br>
                                </h2>

                            <!-- Contact form -->
                            <form action="php/form.php" method="post" id="contactForm" class="site-contact-form">
                                <!-- Name -->
                                <label><input type="text" name="contact_name" placeholder="الاسم" required="required"></label>
                                <!-- Email -->
                                <label><input type="email" name="contact_email" placeholder="البريد الاليكترونى" required="required"></label>
                                <!-- Phone -->
                                <label><input type="number" name="contact_phone" placeholder="رقم الجوال" required="required"></label>
                                <!-- Message -->
                                <label><textarea name="contact_message" placeholder="رسالتك" required></textarea></label>
                                <!-- Submit -->
                                <button type="submit">@lang('general.consult') <i class="fa fa-spin fa-spinner"></i></button>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- End map and form container -->

            </div>
            <!-- End bootstrap inner columns -->
        </div>
    </div>
    <!-- End bootstrap -->

</div>
<!-- End quick support -->
