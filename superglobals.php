<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Суперглобальні змінні PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Суперглобальні змінні PHP</h1>

<table>
    <tr>
        <th>Змінна</th>
        <th>Значення</th>
    </tr>
    <tr>
        <td>$GLOBALS</td>
        <td><?php echo htmlspecialchars(print_r($GLOBALS, true)); ?></td>
    </tr>
    <tr>
        <td>$_SERVER</td>
        <td><?php echo htmlspecialchars(print_r($_SERVER, true)); ?></td>
    </tr>
    <tr>
        <td>$_GET</td>
        <td><?php echo htmlspecialchars(print_r($_GET, true)); ?></td>
    </tr>
    <tr>
        <td>$_POST</td>
        <td><?php echo htmlspecialchars(print_r($_POST, true)); ?></td>
    </tr>
    <tr>
        <td>$_FILES</td>
        <td><?php echo htmlspecialchars(print_r($_FILES, true)); ?></td>
    </tr>
    <tr>
        <td>$_COOKIE</td>
        <td><?php echo htmlspecialchars(print_r($_COOKIE, true)); ?></td>
    </tr>
    <tr>
        <td>$_SESSION</td>
        <td><?php echo htmlspecialchars(print_r($_SESSION, true)); ?></td>
    </tr>
    <tr>
        <td>$_REQUEST</td>
        <td><?php echo htmlspecialchars(print_r($_REQUEST, true)); ?></td>
    </tr>
    <tr>
        <td>$_ENV</td>
        <td><?php echo htmlspecialchars(print_r($_ENV, true)); ?></td>
    </tr>
</table>

<script src="scripts.js"></script>
</body>
</html>
