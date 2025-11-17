<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your Inquiry - Atlas Relocation Services Limited</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/payment.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --atlas-navy: #005a82;
            --atlas-red: #a61220;
            --atlas-navy-light: #006b99;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #e3f2fd 50%, #f1f3f5 100%);
            min-height: 100vh;
            padding: 8rem 0 0;
        }

        .page-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .page-header h1 {
            color: var(--atlas-navy);
            font-weight: 600;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .page-header p {
            color: #6c757d;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .form-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 900px;
            margin: 0 auto;
        }

        .card-header-custom {
            background: linear-gradient(135deg, var(--atlas-navy) 0%, var(--atlas-navy-light) 100%);
            color: white;
            padding: 2.5rem 2rem;
            text-align: center;
            position: relative;
            /* allow absolute positioning of back button */
        }

        .card-header-custom h2 {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
        }

        .card-header-custom p {
            color: #b3d9ec;
            margin: 0;
            font-size: 0.95rem;
        }

        .card-body-custom {
            padding: 2.5rem 3rem;
        }

        .form-label {
            color: #495057;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-control,
        .form-select {
            border: 1px solid #ced4da;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--atlas-navy);
            box-shadow: 0 0 0 0.2rem rgba(0, 90, 130, 0.15);
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            pointer-events: none;
        }

        .input-icon .form-control,
        .input-icon .form-select {
            padding-left: 2.75rem;
        }

        .input-icon-textarea i {
            top: 1rem;
            transform: none;
        }

        textarea.form-control {
            resize: none;
            min-height: 120px;
        }

        .btn-submit {
            background: white;
            color: var(--atlas-navy);
            border: 2px solid var(--atlas-navy);
            border-radius: 50px;
            padding: 0.875rem 2rem;
            font-weight: 600;
            font-size: 1.05rem;
            width: 100%;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .btn-submit:hover {
            background: var(--atlas-navy);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 90, 130, 0.3);
        }

        .privacy-note {
            text-align: center;
            color: #6c757d;
            font-size: 0.875rem;
            margin-top: 1.5rem;
        }

        .privacy-note a {
            color: var(--atlas-red);
            text-decoration: none;
        }

        .privacy-note a:hover {
            text-decoration: underline;
        }

        .contact-info-box {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
            padding: 1.75rem 2.5rem;
            margin-top: 3rem;
            text-align: center;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid #e9ecef;
        }

        .contact-info-box p {
            margin: 0;
            color: #495057;
            font-size: 1rem;
        }

        .contact-info-box .phone {
            color: var(--atlas-navy);
            font-weight: 600;
        }

        .contact-info-box .email {
            color: var(--atlas-red);
            text-decoration: none;
            font-weight: 500;
        }

        .contact-info-box .email:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            body {
                /* Slightly smaller offset on mobile */
                padding: 6.5rem 0 0;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .page-header p {
                font-size: 1rem;
            }

            .card-body-custom {
                padding: 2rem 1.5rem;
            }

            .card-header-custom h2 {
                font-size: 1.5rem;
            }

            .contact-info-box {
                padding: 1.5rem 1.5rem;
            }
        }

        /* Back button alignment inside card header */
        .card-header-custom .back-btn {
            position: absolute;
            left: 1rem;
            top: 1rem;
            transform: none;
            border-color: #ffffff;
            color: #ffffff;
        }

        .card-header-custom .back-btn:hover {
            background: rgba(255, 255, 255, 0.15);
            color: #ffffff;
        }

        .form-control.is-invalid,
        .form-select.is-invalid {
            border-color: #dc3545;
        }

        .invalid-feedback {
            display: block;
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .site-footer {
            background: #005a82;
            color: #fff;
            padding: 40px 40px;
            font-size: 14px;
            box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.08);
        }

        .site-footer .container {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 6px 12px;
        }

        .site-footer a.footer-link {
            color: #fff;
            text-decoration: underline;
            margin: 0 6px;
        }

        .site-footer a.footer-link:hover {
            color: #a61220;
            text-decoration: none;
        }

        @media (max-width:520px) {
            .site-footer .container {
                flex-direction: column;
                gap: 6px;
                text-align: center;
                padding: 10px;
            }
        }

        /* Ensure footer text is white and centered */
        .site-footer .copyright {
            color: #fff;
            text-align: center;
            margin: 8px 0;
        }

        @media (max-width: 768px) {
            .card-header-custom .back-btn {
                left: 0.75rem;
                top: 0.75rem;
                padding: 6px 12px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/atlas-removebg-preview.png" alt="Atlas Logo" height="100px" width="120px">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                SERVICES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                <li><a class="dropdown-item" href="services.php">OVERVIEW</a></li>
                                <li><a class="dropdown-item" href="lounge.php">ATLAS CONNECT VIP ZONE</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                    <a href="booknow.php" class="btn btn-style ms-lg-2">BOOK NOW</a>
                </div>

            </nav>
        </div>
    </header>
    <!-- //header -->

    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Make Your Inquiry</h1>
            <p>We're here to assist with your travel, relocation, or corporate mobility needs.</p>
        </div>

        <!-- Form Card -->
        <div class="form-card">
            <!-- Card Header -->
            <div class="card-header-custom">
                <button class="btn btn-outline-primary back-btn" onclick="window.location.href='services.php'">
                    <i class="fas fa-arrow-left me-2"></i>Back
                </button>
                <h2 class="text-white">
                    <i class="bi bi-briefcase"></i>
                    Atlas Relocation Services
                </h2>
                <p>Professional Corporate Relocation & Transport Solutions</p>
            </div>

            <!-- Card Body -->
            <div class="card-body-custom">
                <form id="inquiryForm" method="POST" action="proc_booknow.php"  >
                    <!-- Salutation and Full Name Row -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="salutation" class="form-label">Salutation</label>
                            <select class="form-select" id="salutation" name="salutation" required>
                                <option value="">Select</option>
                                <option value="mr">Mr</option>
                                <option value="mrs">Mrs</option>
                                <option value="miss">Miss</option>
                                <option value="dr">Dr</option>
                                <option value="prof">Prof</option>
                            </select>
                            <div class="invalid-feedback">Please select a salutation.</div>
                        </div>
                        <div class="col-md-9">
                            <label for="fullName" class="form-label">Full Name</label>
                            <div class="input-icon">
                                <i class="bi bi-person"></i>
                                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" name="fullName"
                                    required>
                                <div class="invalid-feedback">Please enter your full name.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Email and Phone Row -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-icon">
                                <i class="bi bi-envelope"></i>
                                <input type="email" class="form-control" id="email" placeholder="your.email@example.com" name="email"
                                    required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <div class="input-icon">
                                <i class="bi bi-telephone"></i>
                                <input type="tel" class="form-control" id="phone" placeholder="+234 xxx xxx xxxx" name="phone"
                                    required>
                                <div class="invalid-feedback">Please enter your phone number.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Arrival/Departure -->
                    <div class="mb-3">
                        <label for="arrivalDeparture" class="form-label">Arrival/Departure</label>
                        <select class="form-select" id="arrivalDeparture" name="arrivalDeparture" required>
                            <option value="">Select</option>
                            <option value="arrival">Arrival</option>
                            <option value="departure">Departure</option>
                        </select>
                        <div class="invalid-feedback">Please select arrival or departure.</div>
                    </div>

                    <!-- Service Needed -->
                    <div class="mb-3">
                        <label for="service" class="form-label">Service Needed</label>
                        <select class="form-select" id="service" name="service" required>
                            <option value="">Select a service</option>
                            <option value="airport-shuttle">Airport Transfer</option>
                            <option value="daily-transfer">Daily Transfer</option>
                            <option value="point-to-point">Point-to-Point Transfer</option>
                            <option value="protocol">Protocol / Meet & Greet</option>
                            <option value="security-escort"> Escort Services</option>
                            <option value="flight-booking">Flight Ticket / Private Jet Booking</option>
                            <option value="accommodation">Accommodation & Destination Services</option>
                            <option value="destination-consulting">Destination Service Consulting</option>
                            <option value="fleet-management">Fleet Management</option>
                            <option value="security-personnel">Securuty personnel </option>
                            <option value="others">Others</option>

                        </select>
                        <div class="invalid-feedback">Please select a service.</div>
                    </div>

                    <!-- Airport Transport Details (Hidden by default) -->
                    <div id="airportDetails" class="mb-3" style="display: none;">
                        <h5 class="mb-3">Airport Transport Details</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="airport" class="form-label">Airport</label>
                                <div class="input-icon">
                                    <i class="bi bi-airplane"></i>
                                    <input type="text" class="form-control" id="airport" name="airport"
                                        placeholder="e.g., Murtala Muhammed International Airport">
                                    <div class="invalid-feedback">Please enter the airport.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="airline" class="form-label">Airline</label>
                                <div class="input-icon">
                                    <i class="bi bi-airplane-engines"></i>
                                    <input type="text" class="form-control" id="airline"  name="airline" placeholder="e.g., Emirates">
                                    <div class="invalid-feedback">Please enter the airline.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="flightNumber" class="form-label">Flight Number</label>
                                <div class="input-icon">
                                    <i class="bi bi-hash"></i>
                                    <input type="text" class="form-control" id="flightNumber" name="flightNumber"
                                        placeholder="e.g., EK 123">
                                    <div class="invalid-feedback">Please enter the flight number.</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="flightDate" class="form-label">Date</label>
                                <div class="input-icon">
                                    <i class="bi bi-calendar"></i>
                                    <input type="date" class="form-control" id="flightDate" name="flightDate"> 
                                    <div class="invalid-feedback">Please select the date.</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="flightTime" class="form-label">Time of Arrival</label>
                                <div class="input-icon">
                                    <i class="bi bi-clock"></i>
                                    <input type="time" class="form-control" id="flightTime" name="flightTime">
                                    <div class="invalid-feedback">Please select the time of arrival.</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="destination" class="form-label">Destination</label>
                            <div class="input-icon">
                                <i class="bi bi-geo-alt"></i>
                                <input type="text" class="form-control" id="destination"
                               name="destination"     placeholder="e.g., Lagos, Nigeria">
                                <div class="invalid-feedback">Please enter the destination.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Meet and Greet Services -->
                    <div id="meetGreetSection" class="mb-3" style="display: none;">
                        <h5 class="mb-3">Additional Services</h5>
                        <div class="mb-3">
                            <label class="form-label">Do you want Meet and Greet Services?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="meetGreet" id="meetGreetYes" name="meetGreet"
                                    value="yes">
                                <label class="form-check-label" for="meetGreetYes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="meetGreet" id="meetGreetNo"
                                    value="no" checked>
                                <label class="form-check-label" for="meetGreetNo">No</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="numBags" class="form-label">How many bags do you have?</label>
                            <div class="input-icon">
                                <i class="bi bi-bag"></i>
                                <input type="number" class="form-control" id="numBags" min="0" placeholder="0" name="numBags">
                                <div class="invalid-feedback">Please enter the number of bags.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Country and Nature Row -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="country" class="form-label">Country</label>
                            <div class="input-icon">
                                <i class="bi bi-globe"></i>
                                <select class="form-select" id="country" name="country" required>
                                    <option value="">Select your country</option>
                                    <option value="afghanistan">Afghanistan</option>
                                    <option value="albania">Albania</option>
                                    <option value="algeria">Algeria</option>
                                    <option value="andorra">Andorra</option>
                                    <option value="angola">Angola</option>
                                    <option value="antigua-and-barbuda">Antigua and Barbuda</option>
                                    <option value="argentina">Argentina</option>
                                    <option value="armenia">Armenia</option>
                                    <option value="australia">Australia</option>
                                    <option value="austria">Austria</option>
                                    <option value="azerbaijan">Azerbaijan</option>
                                    <option value="bahamas">Bahamas</option>
                                    <option value="bahrain">Bahrain</option>
                                    <option value="bangladesh">Bangladesh</option>
                                    <option value="barbados">Barbados</option>
                                    <option value="belarus">Belarus</option>
                                    <option value="belgium">Belgium</option>
                                    <option value="belize">Belize</option>
                                    <option value="benin">Benin</option>
                                    <option value="bhutan">Bhutan</option>
                                    <option value="bolivia">Bolivia</option>
                                    <option value="bosnia-and-herzegovina">Bosnia and Herzegovina</option>
                                    <option value="botswana">Botswana</option>
                                    <option value="brazil">Brazil</option>
                                    <option value="brunei">Brunei</option>
                                    <option value="bulgaria">Bulgaria</option>
                                    <option value="burkina-faso">Burkina Faso</option>
                                    <option value="burundi">Burundi</option>
                                    <option value="cabo-verde">Cabo Verde</option>
                                    <option value="cambodia">Cambodia</option>
                                    <option value="cameroon">Cameroon</option>
                                    <option value="canada">Canada</option>
                                    <option value="central-african-republic">Central African Republic</option>
                                    <option value="chad">Chad</option>
                                    <option value="chile">Chile</option>
                                    <option value="china">China</option>
                                    <option value="colombia">Colombia</option>
                                    <option value="comoros">Comoros</option>
                                    <option value="congo-democratic-republic">Congo (Democratic Republic)</option>
                                    <option value="congo-republic">Congo (Republic)</option>
                                    <option value="costa-rica">Costa Rica</option>
                                    <option value="croatia">Croatia</option>
                                    <option value="cuba">Cuba</option>
                                    <option value="cyprus">Cyprus</option>
                                    <option value="czech-republic">Czech Republic (Czechia)</option>
                                    <option value="denmark">Denmark</option>
                                    <option value="djibouti">Djibouti</option>
                                    <option value="dominica">Dominica</option>
                                    <option value="dominican-republic">Dominican Republic</option>
                                    <option value="east-timor">East Timor (Timor-Leste)</option>
                                    <option value="ecuador">Ecuador</option>
                                    <option value="egypt">Egypt</option>
                                    <option value="el-salvador">El Salvador</option>
                                    <option value="equatorial-guinea">Equatorial Guinea</option>
                                    <option value="eritrea">Eritrea</option>
                                    <option value="estonia">Estonia</option>
                                    <option value="eswatini">Eswatini</option>
                                    <option value="ethiopia">Ethiopia</option>
                                    <option value="fiji">Fiji</option>
                                    <option value="finland">Finland</option>
                                    <option value="france">France</option>
                                    <option value="gabon">Gabon</option>
                                    <option value="gambia">Gambia</option>
                                    <option value="georgia">Georgia</option>
                                    <option value="germany">Germany</option>
                                    <option value="ghana">Ghana</option>
                                    <option value="greece">Greece</option>
                                    <option value="grenada">Grenada</option>
                                    <option value="guatemala">Guatemala</option>
                                    <option value="guinea">Guinea</option>
                                    <option value="guinea-bissau">Guinea-Bissau</option>
                                    <option value="guyana">Guyana</option>
                                    <option value="haiti">Haiti</option>
                                    <option value="honduras">Honduras</option>
                                    <option value="hungary">Hungary</option>
                                    <option value="iceland">Iceland</option>
                                    <option value="india">India</option>
                                    <option value="indonesia">Indonesia</option>
                                    <option value="iran">Iran</option>
                                    <option value="iraq">Iraq</option>
                                    <option value="ireland">Ireland</option>
                                    <option value="israel">Israel</option>
                                    <option value="italy">Italy</option>
                                    <option value="ivory-coast">Ivory Coast (Côte d’Ivoire)</option>
                                    <option value="jamaica">Jamaica</option>
                                    <option value="japan">Japan</option>
                                    <option value="jordan">Jordan</option>
                                    <option value="kazakhstan">Kazakhstan</option>
                                    <option value="kenya">Kenya</option>
                                    <option value="kiribati">Kiribati</option>
                                    <option value="korea-north">Korea (North)</option>
                                    <option value="korea-south">Korea (South)</option>
                                    <option value="kosovo">Kosovo</option>
                                    <option value="kuwait">Kuwait</option>
                                    <option value="kyrgyzstan">Kyrgyzstan</option>
                                    <option value="laos">Laos</option>
                                    <option value="latvia">Latvia</option>
                                    <option value="lebanon">Lebanon</option>
                                    <option value="lesotho">Lesotho</option>
                                    <option value="liberia">Liberia</option>
                                    <option value="libya">Libya</option>
                                    <option value="liechtenstein">Liechtenstein</option>
                                    <option value="lithuania">Lithuania</option>
                                    <option value="luxembourg">Luxembourg</option>
                                    <option value="madagascar">Madagascar</option>
                                    <option value="malawi">Malawi</option>
                                    <option value="malaysia">Malaysia</option>
                                    <option value="maldives">Maldives</option>
                                    <option value="mali">Mali</option>
                                    <option value="malta">Malta</option>
                                    <option value="marshall-islands">Marshall Islands</option>
                                    <option value="mauritania">Mauritania</option>
                                    <option value="mauritius">Mauritius</option>
                                    <option value="mexico">Mexico</option>
                                    <option value="micronesia">Micronesia</option>
                                    <option value="moldova">Moldova</option>
                                    <option value="monaco">Monaco</option>
                                    <option value="mongolia">Mongolia</option>
                                    <option value="montenegro">Montenegro</option>
                                    <option value="morocco">Morocco</option>
                                    <option value="mozambique">Mozambique</option>
                                    <option value="myanmar">Myanmar (Burma)</option>
                                    <option value="namibia">Namibia</option>
                                    <option value="nauru">Nauru</option>
                                    <option value="nepal">Nepal</option>
                                    <option value="netherlands">Netherlands</option>
                                    <option value="new-zealand">New Zealand</option>
                                    <option value="nicaragua">Nicaragua</option>
                                    <option value="niger">Niger</option>
                                    <option value="nigeria">Nigeria</option>
                                    <option value="north-macedonia">North Macedonia</option>
                                    <option value="norway">Norway</option>
                                    <option value="oman">Oman</option>
                                    <option value="pakistan">Pakistan</option>
                                    <option value="palau">Palau</option>
                                    <option value="palestine">Palestine</option>
                                    <option value="panama">Panama</option>
                                    <option value="papua-new-guinea">Papua New Guinea</option>
                                    <option value="paraguay">Paraguay</option>
                                    <option value="peru">Peru</option>
                                    <option value="philippines">Philippines</option>
                                    <option value="poland">Poland</option>
                                    <option value="portugal">Portugal</option>
                                    <option value="qatar">Qatar</option>
                                    <option value="romania">Romania</option>
                                    <option value="russia">Russia</option>
                                    <option value="rwanda">Rwanda</option>
                                    <option value="saint-kitts-and-nevis">Saint Kitts and Nevis</option>
                                    <option value="saint-lucia">Saint Lucia</option>
                                    <option value="saint-vincent-and-the-grenadines">Saint Vincent and the Grenadines
                                    </option>
                                    <option value="samoa">Samoa</option>
                                    <option value="san-marino">San Marino</option>
                                    <option value="sao-tome-and-principe">Sao Tome and Principe</option>
                                    <option value="saudi-arabia">Saudi Arabia</option>
                                    <option value="senegal">Senegal</option>
                                    <option value="serbia">Serbia</option>
                                    <option value="seychelles">Seychelles</option>
                                    <option value="sierra-leone">Sierra Leone</option>
                                    <option value="singapore">Singapore</option>
                                    <option value="slovakia">Slovakia</option>
                                    <option value="slovenia">Slovenia</option>
                                    <option value="solomon-islands">Solomon Islands</option>
                                    <option value="somalia">Somalia</option>
                                    <option value="south-africa">South Africa</option>
                                    <option value="south-sudan">South Sudan</option>
                                    <option value="spain">Spain</option>
                                    <option value="sri-lanka">Sri Lanka</option>
                                    <option value="sudan">Sudan</option>
                                    <option value="suriname">Suriname</option>
                                    <option value="sweden">Sweden</option>
                                    <option value="switzerland">Switzerland</option>
                                    <option value="syria">Syria</option>
                                    <option value="taiwan">Taiwan</option>
                                    <option value="tajikistan">Tajikistan</option>
                                    <option value="tanzania">Tanzania</option>
                                    <option value="thailand">Thailand</option>
                                    <option value="togo">Togo</option>
                                    <option value="tonga">Tonga</option>
                                    <option value="trinidad-and-tobago">Trinidad and Tobago</option>
                                    <option value="tunisia">Tunisia</option>
                                    <option value="turkey">Turkey</option>
                                    <option value="turkmenistan">Turkmenistan</option>
                                    <option value="tuvalu">Tuvalu</option>
                                    <option value="uganda">Uganda</option>
                                    <option value="ukraine">Ukraine</option>
                                    <option value="united-arab-emirates">United Arab Emirates</option>
                                    <option value="united-kingdom">United Kingdom</option>
                                    <option value="united-states">United States</option>
                                    <option value="uruguay">Uruguay</option>
                                    <option value="uzbekistan">Uzbekistan</option>
                                    <option value="vanuatu">Vanuatu</option>
                                    <option value="vatican-city">Vatican City</option>
                                    <option value="venezuela">Venezuela</option>
                                    <option value="vietnam">Vietnam</option>
                                    <option value="yemen">Yemen</option>
                                    <option value="zambia">Zambia</option>
                                    <option value="zimbabwe">Zimbabwe</option>
                                    <option value="other">Other</option>
                                </select>

                                <div class="invalid-feedback">Please select your country.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nature" class="form-label">Nature of Inquiry</label>
                            <select class="form-select" id="nature" name="nature" required>
                                <option value="">Select inquiry type</option>
                                <option value="personal">Personal</option>
                                <option value="corporate">Corporate</option>
                                <option value="partnership">Partnership</option>
                                <option value="other">Other</option>
                            </select>
                            <div class="invalid-feedback">Please select the nature of inquiry.</div>
                        </div>
                    </div>

                    <!-- Explain Inquiry -->
                    <div class="mb-3">
                        <label for="inquiry" class="form-label">Explain Inquiry</label>
                        <div class="input-icon input-icon-textarea">
                            <i class="bi bi-chat-left-text"></i>
                            <textarea class="form-control" id="inquiry" placeholder="Briefly describe your inquiry"
                         name="inquiry" required></textarea>
                            <div class="invalid-feedback">Please describe your inquiry.</div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-submit">
                        Submit Inquiry
                    </button>

                    <!-- Privacy Note -->
                    <div class="privacy-note">
                        By submitting this form, you agree to our
                        <a href="#" onclick="return false;">Privacy Policy</a>
                        and
                        <a href="#" onclick="return false;">Terms of Service</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="contact-info-box">
            <p>
                Need help?
                <span class="phone">Call +234 +234 (809)747 7219</span>
                or email
                <a href="mailto:Atlas@atlas-ng.com" class="email">Atlas@atlas-ng.com</a>
            </p>
        </div>
    </div>
    <footer class="site-footer" role="contentinfo" aria-label="Site footer">
        <div class="container">
            <p class="copyright">
                © <span id="year"></span> Atlas Relocation Services Limited. All rights reserved.
                <a href="/privacy.php" class="footer-link">Privacy Policy</a> |
                <a href="/terms.php" class="footer-link">Terms</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  
</body>

</html>