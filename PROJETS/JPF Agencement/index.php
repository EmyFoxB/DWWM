<?php
ob_start();
?>

<main>
    <section>
        <video src="/public/Assets/Video/VideoJPF.mp4"></video>
    </section>

    <section>
        <div>
            <button type="button">DEVIS GRATUIT</button>
        </div>
        <div>

        </div>
    </section>
</main>

<?php
$content = ob_get_clean();
$titre = "ACCUEIL";
require "public/template.php";
?>