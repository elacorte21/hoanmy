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
    <div style="background: url('assets/images/cover-find-doctor-2.jpg') center top / 105%" id="cover" class="find-doctor-cover">
        <div class="find-doctor-cover-content">
            <h1>Find a Doctor</h1>
        </div>
    </div> 

    <!-- Form -->
    <div class="section-find-doctor">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h5 class="mb-5">Our hospitals and clinics enjoy a strong reputation founded in trust and compassionate care. This has been built over the years due to the hard work and dedication of our experienced clinical and non-clinical staff, who are a credit to the Hoan My family.
					<br><br>Here you can search by specialty or name, to find doctors within our network who provide the care you need.
					</h5>
                    
                    <form>
                        <div class="form-row">
                            <div class="form-group contact-form-group col-lg-4 col-md-4">
                                <label class="text-blue">First and last name (optional)</label>
                                <input type="text" name="#" placeholder="">
                            </div>
                            <div class="form-group contact-form-group col-lg-4 col-md-4">
                                <label class="text-blue">Choose a specialty (optional)</label>
<select name="specialty" id="specialty">
                                    <option value="">Please select</option>
<option value="Anaesthesiology">Anaesthesiology</option>
<option value="Cardiology">Cardiology</option>
<option value="Cardiothoracic Surgery">Cardiothoracic Surgery</option>
<option value="Colorectal Surgery">Colorectal Surgery</option>
<option value="Dentistry">Dentistry</option>
<option value="Dermatology">Dermatology</option>
<option value="Diagnostic Radiology">Diagnostic Radiology</option>
<option value="Ear, Nose & Throat">Ear, Nose & Throat</option>
<option value="Emergency Medicine">Emergency Medicine</option>
<option value="Endocrinology">Endocrinology</option>
<option value="Family Medicine">Family Medicine</option>
<option value="Gastroenterology">Gastroenterology</option>
<option value="General Internal Medicine">General Internal Medicine</option>
<option value="Geriatric Medicine">Geriatric Medicine</option>
<option value="Haematology">Haematology</option>
<option value="Infectious Diseases">Infectious Diseases</option>
<option value="Medical Oncology">Medical Oncology</option>
<option value="Neurology">Neurology</option>
<option value="Neurosurgery">Neurosurgery</option>
<option value="Neonatology">Neonatology</option>
<option value="Obstetrics & Gynaecology (incl. IVF)">Obstetrics & Gynaecology (incl. IVF)</option>
<option value="Oncology">Oncology</option>
<option value="Ophthalmology">Ophthalmology</option>
<option value="Oral & Maxillofacial Surgery">Oral & Maxillofacial Surgery</option>
<option value="Orthopaedics">Orthopaedics</option>
<option value="Paediatric Medicine">Paediatric Medicine</option>
<option value="Palliative Medicine">Palliative Medicine</option>
<option value="Plastic Surgery & Burns">Plastic Surgery & Burns</option>
<option value="Psychiatric Medicine">Psychiatric Medicine</option>
<option value="Renal Medicine">Renal Medicine</option>
<option value="Respiratory Medicine">Respiratory Medicine</option>
<option value="Rheumatology & Immunology">Rheumatology & Immunology</option>
<option value="Urology">Urology</option>

									                                </select>
							</div>
                            <div class="form-group contact-form-group col-lg-2 col-md-4">
<!--                                <button type="submit" class="btn-sky-blue find-doctor-btn">SEARCH</button>-->
                                <a  href="<?=$find_doctor_result_url?>" class="btn-sky-blue find-doctor-btn">SEARCH</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('footer.php') ?>

</body>
</html>