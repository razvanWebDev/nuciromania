<?php include "PHP/header.php"; ?>
<?php include "PHP/nav.php"; ?>

<section id="contact">
    <h2 class="section-title">Contact</h2>
    <div class="contact-container">
        <div class="contact-logo">
            <div class="logo-details">
                <img class="contact-logo-img" src="img/logo.svg" alt="">
                <div class="contact-details">
                    <p><img src="img/logos/location.svg" alt="address" class="contact-icon">Comuna Surduc, jud. Sălaj</p>
                    <p><img src="img/logos/phone.svg" alt="phone" class="contact-icon">(+4)0723 20 21 10</p>
                    <p><a href="office@nuciromania.ro"><img src="img/logos/email.svg" alt="email"
                                class="contact-icon">office@nuciromania.ro</a>
                    </p>

                </div>
            </div>
        </div>
        <form action="PHP/contact.php" method="POST" enctype="multipart/form-data">
            <div class="form-line">
                <div class="input-container half-width">
                    <label for="name" class="floating-label">Nume</label>
                    <input class="label-transform  required-field" type="text" name="name">
                </div>
                <div class="input-container half-width">
                    <label for="lastName" class="floating-label">Prenume</label>
                    <input class="label-transform  required-field" type="text" name="lastName">
                </div>
            </div>
            <div class="form-line">
                <div class="input-container half-width">
                    <label for="email" class="floating-label">Email</label>
                    <input class="label-transform  required-field" type="email" name="email">
                </div>
                <div class="input-container half-width">
                    <label for="phone" class="floating-label">Telefon</label>
                    <input class="label-transform required-field" type="tel" name="phone">
                </div>
            </div>
            <div class="form-line">
                <div class="input-container">
                    <label for="message" class="floating-label">Mesaj</label>
                    <textarea class="label-transform required-field" name="message" rows="5"></textarea>
                </div>
            </div>
            <!-- <p class="terms-checkbox">
                <input type="checkbox" name="terms_and_conditions" class="required-field">
                I have read and accept the privacy policy and the legal notice
            </p> -->

            <p class="all-fields-required-message">Completeaza toate randurile obligatorii</p>
            <button type="submit" name="submit" class="submit-contact">TRIMITE</button>
        </form>
    </div>
</section>

<?php include "PHP/footer.php"; ?>