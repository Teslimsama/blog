<?php 

include 'session.php';


    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $email = $_POST['email'];

    // if (!isset($_SESSION['captcha'])) {
    // 	$secret = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";
    // 	$response = $_POST['g-recaptcha-response'];
    // 	$remoteip = $_SERVER['REMOTE_ADDR'];
    // 	$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
    // 	$data = file_get_contents($url);
    // 	$row = json_decode($data, true);


    // 	if ($row['success'] == true) {
    // 		$_SESSION['captcha'] = time() + (10 * 60);
    // 	} else {
    // 		$_SESSION['error'] = 'Please answer recaptcha correctly';
    // 		header('location: signup');
    // 		exit();
    // 	}
    // }

    $stmt = $conn->prepare("INSERT INTO comment (email, name, message) VALUES (:email, :name, :message )");
    $stmt->execute(['email' => $email, 'name' => $name, 'message' => $comment]);
