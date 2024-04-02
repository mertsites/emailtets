<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    $bericht = $_POST["bericht"];

    $ontvanger_email = "merterdogan54321@gmail.com"; // Vul hier het e-mailadres in waar je de berichten wilt ontvangen
    $onderwerp = "Nieuw bericht via contactformulier";

    $inhoud = "Naam: $naam\n";
    $inhoud .= "E-mail: $email\n\n";
    $inhoud .= "Bericht:\n$bericht\n";

    // Verstuur e-mail
    mail($ontvanger_email, $onderwerp, $inhoud);

    // Stuur gebruiker door naar een bedankpagina
    header("Location: bedankpagina.html");
    exit();
}
?>
