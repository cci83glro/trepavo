<ul class="service-details__points list-unstyled">
<?php
    foreach (explode("||", $lang["serviceDetail" . $service_id . "Points"]) as $point_text) {
        include "service-details-point-template.php";
    }
?>
</ul>