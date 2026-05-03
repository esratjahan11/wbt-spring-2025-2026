<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>

<body>

    <!-- Login Form -->
    <form action="login.php" method="post">
        <fieldset>
            <legend>Login Form</legend>

            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username" required></td>
                </tr>

                <tr>
                    <td><label for="password">Password:</label></td>
                    <td>
                        <input type="password" id="password" name="password"
                            minlength="8" maxlength="8" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="gmail">Gmail:</label></td>
                    <td><input type="email" id="gmail" name="gmail" required></td>
                </tr>

                <tr>
                    <td><label>Reason Of Contact:</label></td>
                    <td>
                        <input type="radio" name="reason" value="Projects"> Projects
                        <input type="radio" name="reason" value="Thesis"> Thesis
                        <input type="radio" name="reason" value="Job"> Job
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="login" value="Login">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>

        </fieldset>
    </form>

</body>

</html>


<?php
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $gmail = $_POST['gmail'];
    $reason = $_POST['reason'];

    if (empty($username) || empty($password) || empty($gmail) || empty($reason)) {
        echo "Please fill all fields.";
    } else {
        echo "Username: {$username} <br>";
        echo "Password: {$password} <br>";
        echo "Gmail: {$gmail} <br>";
        echo "Reason Of Contact: {$reason}";
    }
}
?>