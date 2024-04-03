<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact</title>

    <?php include('css.php') ?>

</head>
<body>

    <!-- Navbar -->
    <?php include('header.php') ?>

    <!-- Cover -->
    <div style="background: url('assets/images/cover-plan-visit.jpg') center top / 105%" id="cover" class="plan-visit-cover">
        <div class="plan-visit-cover-content">
            <h1>Plan Your Visit to Our Hospitals</h1>
        </div>
    </div> 

    <!-- Content -->
    <div class="section-plan-visit">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-7">
                    <h5 class="mb-5"><strong class="text-blue">At Hoan My</strong>, clinical excellence, first-rate services and compassionate care are our highest priorities. Whether you’re a patient in one of our hospitals, visiting a friend or family member, or have an outpatient appointment scheduled with a specialist, we want you to feel comfortable and welcome.</h5>
                    <img src="assets/images/plan-visit.png" class="mb-5 d-md-none d-block" width="100%" class="mb-5">
                    <div class="accordion-started plan-visit-accordion accordion-bral">
                        <div>
                            <input class="ac-input" id="ac-1"  name="accordion-1" type="radio"/>
                            <label class="ac-label" for="ac-1">Arranging Your Visit</label>
                            <div class="article package-content ac-content">
                                <p>
                                    The <a href="<?php echo $book_appointment_url ?>">Book Appointment</a> section will guide you 
                                    through selecting the hospital that is right for you.
                                </p>
                                <p>
                                    The <a href="<?php echo $find_doctor_url ?>">Find a Doctor</a> feature allows you to search for a 
                                    doctor with the fitting specialty.
                                </p>
                                <p>
                                    Please visit <a href="<?php echo $network_url ?>">Our Hospitals & Clinics</a> for details about
                                    each of our hospitals.
                                </p>
                            </div>
                        </div>
                        <div>
                            <input class="ac-input" id="ac-2" name="accordion-1" type="radio"/>
                            <label class="ac-label" for="ac-2">Admission Procedure</label>
                            <div class="article ac-content">
                                <p>
                                    When you are admitted to the hospital, we hope to get you settled and that you feel comfortable as quickly as possible. Once a date for admission is confirmed, patients need to take note of the following:
                                </p>
                                <p class="text-blue"><b>Pre-admission checklist</b></p>
                                <ul>
                                   
									<li>Bring along your referral letter if you have one</li>
									<li>Remember to bring any medication you are taking</li>
									<li>For your comfort, please bring along a pair of comfortable non-slip slippers to move about in the ward. You may like to bring some personal toiletries like toothbrush, toothpaste and a comb.</li>
									<li>Please do not bring valuables or excessive cash for your stay. The hospital will not be responsible for any loss or damage to patients' personal property while on the premises.</li>

                                </ul>
                                <p class="text-blue"><b>Where to go when you arrive</b></p>
                                <p>Unless you are directed otherwise, please go to the Reception at the main lobby.</p>
                            </div>
                        </div>
                        <div>
                            <input class="ac-input" id="ac-3" name="accordion-1" type="radio" />
                            <label class="ac-label" for="ac-3">Documents You Will Need</label>
                            <div class="article ac-content">
                                <p>
                                    Please bring along your ID and health insurance card.
                                </p>
                            </div>
                        </div>
                        <div>
                            <input class="ac-input" id="ac-4" name="accordion-1" type="radio" />
                            <label class="ac-label" for="ac-4">Discharge Procedure</label>
                            <div class="article ac-content">
                                <p>Your doctor will let you know when it is suitable for you to be discharged.</p>
								<p>For your safety and well-being, we recommend that a family member or a friend accompanies you on the day of your discharge.</p>
								<p>Our staff will assist you in the following:</p>

                                <ul>
                                    <li>Arranging for a follow-up appointment at our outpatient clinics, if needed.</li>
									<li>Giving you the medicine that your doctor has prescribed and advising you on the medicine usage.</li>
									<li>Teaching basic self-care procedures and health education, so that you are able to care for yourself back home.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 offset-lg-1 d-md-block d-none">
                    <img src="assets/images/plan-visit.png" width="100%" class="mb-5">
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php') ?>

</body>
</html>