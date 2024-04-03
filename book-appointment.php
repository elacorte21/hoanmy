<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact</title>

    <?php include('css.php') ?>

</head>
<body>

    <!-- Header -->
    <?php include('header.php') ?>

    <!-- Cover -->
    <div style="background: url('assets/images/cover-book-appointment.jpg') center top / 105%" id="cover" class="book-appointment-cover">
        <div class="book-appointment-cover-content">
            <h1>Book an Appointment</h1>
        </div>
    </div> 

    <!-- Contact -->
    <div class="section-book">
        <div class="container">
            <div style="display: block; position: relative; float: center; left: 0; right: 0; margin: 0 auto !important;">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <h2 class="text-blue">Contact Us</h2>
                        <h5 class="mb-5">
							Please fill out the form below if you would like to book an appointment. Alternatively, if you have a general question, please contact us <a href="<?=$contact_url?>" class="">here</a>.
						</h5>

                        <form action="#">
                            <div class="contact-form-group mb-3">
                                <label class="text-blue">Patient Information</label>
                                <input type="text" name="#" placeholder="First and last name">
                            </div>
                            <div class="contact-form-group mb-3">
                                <input type="email" name="#" placeholder="Email">
                            </div>
                            <div class="contact-form-group mb-3">
                                <input type="text" name="#" placeholder="Phone number">
                            </div>
                            <!--<div class="contact-form-group mb-3">
                                <input type="text" name="#" placeholder="Address">
                            </div>-->
                            <div class="contact-form-group mb-3">
                                <select name="#" id="">
                                    <option value="">Gender</option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                </select>
                            </div>
                            <!--<div class="input-group date mb-3" data-provide="datepicker">
                                <input type="text" name="#" placeholder="Date of birth" class="date-input">
                                <div class="input-group-addon">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                            </div>-->
                            <div class="contact-form-group mb-3">
                                <textarea name="#" rows="5" placeholder="Brief description of what appointment is for"></textarea>
                            </div>
                            <div class="contact-form-group mb-3 choose-specialist">
                                <label class="text-blue">Choose a Specialist</label>
                                <select name="#">
                                    <option value="">Choose a specialty (if you know this information)</option>
                                    <option value="#">-</option>
                                </select>
                            </div>
                            <div class="contact-form-group mb-3">
                                <select name="#">
                                    <option value="">Choose a doctor (optional)</option>
                                    <option value="#">-</option>
                                </select>
                            </div>
                            <div class="input-group date mb-5 choose-medical" data-provide="datepicker">
                                <label class="text-blue">Preferred Date</label>
                                <input type="text" name="preferred_date" id="preferred_date" placeholder="Please select" class="date-input">
                                <div class="input-group-addon">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                            </div>
                            <div class="inquiry-popup" style="display: none;">
                                <button type="button" class="inquiry-close"><i class="fas fa-times"></i></button>
                                <p class="lead">Thank You</p>
                                <p>
                                    Thank you for requesting an appoinment with a Hoan My medical center. We will respond to your request as soon as possible.
                                </p>
                                <br>
                                <button class="btn-white border-0">RETURN HOME</button><br>
                                <br>
                                <button class="btn-white border-0">REQUEST NEW APPOINTMENT</button>
                            </div>
                            <button type="button" class="btn-sky-blue btn-inquiry d-block mx-auto">BOOK APPOINTMENT</button>                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('footer.php') ?>

</body>
</html>