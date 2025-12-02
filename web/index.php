<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title>tng</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <meta name="format-detection" content="telephone=no, email=no">
</head>
<body>

<?
$page = isset($_REQUEST['page']) ? htmlspecialchars($_REQUEST['page']) : '';

SWITCH ( $page ) {
    case 'carousel':             include "includes/carousel_example.php";       break;
    case 'login':                include "includes/login.php";                  break;
    case 'regnew':               include "includes/regnew.php";                 break;
    case 'footer':               include "includes/footer.php";                 break;
    case 'home':                 include "includes/home.php";                   break;
    case 'play':                 include "includes/play.php";                   break;
    case 'profile':              include "includes/profile.php";                break;
    default:                     include "includes/carousel_example.php";       break;
}
?>

</body>
</html>
