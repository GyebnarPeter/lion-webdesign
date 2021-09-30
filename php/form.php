<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $full_message = "Név: " . $name .
                    "Email: " . $email .
                    "Telefon: " . $phone .
                    "Üzenet: " . $message;

    if(mail('info@lionwebdesign.hu', 'Kérdés érkezett!', $full_message, "From: " .$email)){
        echo "<script>
                function response() {
                    window.location.href = '../uzenet-elkuldve.html';
                }
                response();
             </script>";
    } else {
        echo "<script>
                alert('Sikertelen üzenet küldés');
             </script>";
    }
}

?>