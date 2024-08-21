<?php
ob_start();
?>

<section>
    <div>

        <div>
            <img src="/public/Assets/Icons/tel.png" alt="Icone de téléphone">
            <p>06 12 67 79 73</p>
        </div>

        <div>
            <img src="/public/Assets/Icons/mail.png" alt="Icone de mail">
            <a href="mailto:jpfagencement@gmail.com?subject=Demande de devis&body=Bonjour,%0AJe souhaiterais avoir plus d'informations concernant...">
                jpfagencement@gmail.com
            </a>
        </div>

        <div>
            <img src="/public/Assets/Icons/instagram.png" alt="Icone de Instagram">
            <a href="https://www.instagram.com/jpf_agencement_et_decoration?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">jpf_agencement_et_decoration</a>
        </div>

        <div>
            <img src="/public/Assets/Icons/facebook.png" alt="Icone de Facebook">
            <a href="https://www.facebook.com/profile.php?id=100088100282637">J.PF Agencement</a>
        </div>
        
    </div>

    <div>

        <form action="/public/email.php">
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="prenom" placeholder="Prénom" required>
            <input type="email" name="email" placeholder="Adresse email" required>
            <input type="text" name="message" placeholder="Message" required>
            <input type="submit" value="Envoyer">
        </form>

    </div>
</section>

<?php
$content = ob_get_clean();
$titre = "CONTACT";
require "./template.php";
?>