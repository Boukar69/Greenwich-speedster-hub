<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $car_model = htmlspecialchars($_POST['car_model']);
    $start_date = htmlspecialchars($_POST['start_date']);
    $end_date = htmlspecialchars($_POST['end_date']);

    $file = fopen("rental_details.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nPhone: $phone\nCar Model: $car_model\nStart Date: $start_date\nEnd Date: $end_date\n\n");
    fclose($file);

    echo "Thank you, $name. Your car rental request has been received.";
} else {
    echo "Invalid request.";
}
?>