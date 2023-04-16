<?php
require_once 'vendor/autoload.php';
require_once 'mobile_phone.php';
require_once 'database.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

if (isset($_POST['phone_id'])) {
    $phone_id = $_POST['phone_id'];

    $stmt = $pdo->prepare("SELECT * FROM phones WHERE id = ?");
    $stmt->execute([$phone_id]);

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $phone = new MobilePhone($row);
    } else {
        echo "Phone not found.";
        exit;
    }

    if (isset($_POST['brand']) && isset($_POST['model']) && isset($_POST['price']) && isset($_POST['availability'])) {
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $price = $_POST['price'];
        $availability = ($_POST['availability'] == 'true');

        $phone
            ->setBrand($brand)
            ->setModel($model)
            ->setPrice($price)
            ->setAvailability($availability);

        $phone->edit($pdo);

        header("Location: index.php");
        exit;
    }
} else {
    echo "Phone not found.";
    exit;
}
echo $twig->render('edit_phone.twig', ['phone' => $phone]);
exit;
