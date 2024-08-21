<?php
ob_start();
?>

<section>
    <img src="/public/Assets/Images/QSN/JP.jpg" alt="Photo de JP">
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus libero nibh, quis placerat nulla sagittis sollicitudin. Aenean porttitor ipsum elementum, ornare libero nec, pellentesque lectus. Pellentesque id enim eu leo fringilla varius. Vivamus tincidunt neque ut sem malesuada egestas. Proin semper felis ut tortor faucibus, ut porttitor metus ultrices. Duis commodo mi sit amet arcu dapibus, in elementum turpis dignissim. Cras vitae nisl nec lectus hendrerit tempor. Proin augue nisi, porttitor a magna sit amet, gravida tincidunt tellus. Cras sed nisi sed eros sagittis aliquet. Cras nec pretium ex. Donec auctor mauris eget massa lobortis mattis. Nulla tempus pretium eleifend. Aliquam convallis enim sed feugiat ornare.</p>
    </div>
</section>

<section>
    <img src="/public/Assets/Images/QSN/Bea.jpg" alt="Photo de Béa">
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus libero nibh, quis placerat nulla sagittis sollicitudin. Aenean porttitor ipsum elementum, ornare libero nec, pellentesque lectus. Pellentesque id enim eu leo fringilla varius. Vivamus tincidunt neque ut sem malesuada egestas. Proin semper felis ut tortor faucibus, ut porttitor metus ultrices. Duis commodo mi sit amet arcu dapibus, in elementum turpis dignissim. Cras vitae nisl nec lectus hendrerit tempor. Proin augue nisi, porttitor a magna sit amet, gravida tincidunt tellus. Cras sed nisi sed eros sagittis aliquet. Cras nec pretium ex. Donec auctor mauris eget massa lobortis mattis. Nulla tempus pretium eleifend. Aliquam convallis enim sed feugiat ornare.</p>
    </div>
</section>

<?php
$content = ob_get_clean();
$titre = "QUI SOMMES-NOUS ?";
require "./template.php";
?>