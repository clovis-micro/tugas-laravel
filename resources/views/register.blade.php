<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman register</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="./signup" method="post">
        @csrf
        <label>First name</label><br>
        <input type="text" name="first"><br><br>
        <label>Last name</label><br>
        <input type="text" name="last"><br><br>
        <label>Gender</label><br>
        <input type="radio">Male<br>
        <input type="radio">Female<br>
        <input type="radio">Other<br><br>
        <label>Nationality:</label><br>
        <select name="indonesia">
            <option value="indonesia">Indonesia</option>
            <option value="english">English</option>
            <option value="other">Other</option>
        </select><br><br>
        <label>Language Spoken:</label><br>
        <input type="checkbox">Indonesia<br>
        <input type="checkbox">English<br>
        <input type="checkbox">Arabic<br>
        <input type="checkbox">Japanese<br><br>
        <label>Bio:</label><br><br>
        <textarea name="pesan" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>