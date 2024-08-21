<?php
ob_start();
?>

<section>
    <div>
        <h2>CUISINES</h2>
    </div>
    <div>
        
    </div>
</section>

<section>
    <div>
        <h2>DRESSINGS</h2>
    </div>
    <div>

    </div>
</section>

<section>
    <div>
        <h2>REVÊTEMENTS</h2>
    </div>
    <div>

    </div>
</section>

<?php
$content = ob_get_clean();
$titre = "NOS RÉALISATIONS";
require "./template.php";
?>