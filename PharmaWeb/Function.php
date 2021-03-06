<?php 


    print_r($_POST);

    if (isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $pain = $_POST['pain'];
        $Condition = $_POST['Condition'];

        $mailTo = "belkys@pharma-trials.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have recieved an email from ".$name;".\n\n";

        mail($mailTo, $headers, $txt, $name, $phone, $address, $gender, $pain, $Condition);
        header("Location: Patient.php?mailsend");
        
    }



?>