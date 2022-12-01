<div class="content">
<form action="<?= OOP\app\Core\Router::url("login")?>" method="POST">
<table class="table2">
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Login" style="font-size:20px"></td>
        </tr>
    </table>
</form>