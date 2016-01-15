<?php
    $body_weight = $_POST['body_weight'];
    $body_height = $_POST['body_height'];
    $calc_bmi = ($body_weight * 10000) / ($body_height * $body_height);
    $bmi_round = round($calc_bmi, 1);

    if ($bmi_round < 18.5) {
        $bmi_weight = "Untergewicht";
    } elseif ($bmi_round <= 25) {
        $bmi_weight = "Normalgewicht";
    } elseif ($bmi_round <= 30) {
        $bmi_weight = "leichtes Übergewicht";
    } elseif ($bmi_round <= 40) {
        $bmi_weight = "starkes Übergewicht";
    } elseif ($bmi_round > 40) {
        $bmi_weight = "extremes Übergewicht";
    }

    echo '<p>BMI-Index von: '.$bmi_round.'</p><p>Du hast '.$bmi_weight.'.</p>';
?>