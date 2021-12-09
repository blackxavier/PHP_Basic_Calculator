<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="functions.php" method="POST">
        <input type="text" name="num1" placeholder="Input first number"> <br>
        <select name="operator">
            <label for="">Choose opertion</label>
            <option value="add">Add</option>
            <option value="sub">Substract</option>
            <option value="divide">Divide</option>
            <option value="multiply">Multiply</option>

        </select>
        <br>

        <input type="text" name="num2" placeholder="Input second number"><br>
        <button type="submit">Calculate</button><br>
    </form>
</body>

</html>