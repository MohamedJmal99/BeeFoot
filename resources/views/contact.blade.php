@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>

<body>
    <div class="contact-container">
        <div class="contact-banner">
            <div class="contact-banner-content">
                <h1>Contactez-Nous</h1>
                <p><a href="{{ url('/') }}">Accueil</a> / Contactez-Nous</p>
            </div>
        </div>
        <div class="contact-container2">
            <div class="images-boxes">
                <div class="image-box">
                    <div class="image-box-icon">
                        <img src="../images/phone.png" alt="">
                    </div>
                    <div class="image-box-info">
                        <h3>Téléphone</h3>
                        <a href="tel:+21644254563">44254563</a>
                    </div>
                </div>
                <div class="image-box">
                    <div class="image-box-icon">
                        <img src="../images/envelope.png" alt="">
                    </div>
                    <div class="image-box-info">
                        <h3>E-mail</h3>
                        <a href="mailto:Kravel@Galion.Com">Kravel@Galion.Com</a>
                    </div>
                </div>
                <div class="image-box">
                    <div class="image-box-icon">
                        <img src="../images/maps.png" alt="">
                    </div>
                    <div class="image-box-info">
                        <h3>E-mail</h3>
                        <a href="">92 Cherry Drive Uniondale, NY 11553</a>
                    </div>
                </div>
            </div>
            <div class="form-container2">
                <div class="form">
                    <form action="">
                        <div class="form-object">
                            <label for=""> Object</label>
                                <input type="text" required>
                            
                        </div>
                        <div class="fullname">
                            <div class="form-firstname">
                            <label for=""> First name </label>
                                <input type="text" required name="firstname" id="">
                            
                        </div>
                            <div class="form-lastname">
                            <label for=""> Last name </label>
                                <input type="text" required name="lastname" id="">
                            
                        </div>
                        </div>
                        <div class="credentials">
                            <div class="formphone">
                            <label for="">Phone number </label>
                                <input type="tel" name="telephone" id="" required>
                            
                        </div>
                            <div class="formemail">
                            <label for=""> E-mail </label>
                                <input type="email" name="email" required>
                            
                        </div>
                        </div>
                        <div class="formmessage">
                        <label for=""> Message </label>
                            <textarea name="" id="" cols="30" rows="10" required>
                    </textarea>
                        
                    </div>
                    <button type="submit">Send</button>
                    </form>
                </div>
                <div class="social-media-content">
                    <div class="main">
                        <div class="main-top">
                          <div class="adresse">
                            <div class="adresse-icon">
                              <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="adresse-text">
                              29 Avenue Alain Savary,<br>
                              Belvédère – 1002 Tunis
                            </div>
                          </div>
                          <br>
                          <br>
                          <div class="telephone">
                            <div class="telephone-icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="telephone-text">
                              <a href="tel:+216 71 288 688">Tél: (+216) 71 288 688</a>
                              <br>
                              <a href="tel:+216 71 288 844">Fax : (+216) 71 288 844</a>
                            </div>
                          </div>
                        </div>
                        <div class="main-mid">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.7279246806247!2d10.179466976270648!3d36.82503686629845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd348f788bc6d3%3A0x27e4fae13a6a3483!2sBoussayene%20Knani%20Law%20Firm%20(CLAYSTON%20-%20BK)!5e0!3m2!1sen!2stn!4v1717508602620!5m2!1sen!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="main-bottom">
                          <div class="email">
                            <div class="email-icon"><i class="fa-solid fa-envelope"></i></div>
                            <div class="email-text">
                              <a href="mailto:info@bkassocies.com.tn">info@bkassocies.com.tn</a>
                            </div>
                          </div>
                          <br>
                          <br>
                          <div class="social-media">
                            <a href="https://www.facebook.com/BKassocies/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/company/boussayene-knani-associes/?originalSubdomain=tn" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://x.com/knanilaw" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                          </div>
                        </div>
                        
                        
                      </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@include('layouts.footer')
