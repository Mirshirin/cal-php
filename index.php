<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="marging.css">
    <title>calculater</title>
</head>
<body>
    <h1>this is a simple calculater</h1>
    <form action="function.php" method="POST">
    <label for="num1">first number1</label>
    <input type="number"  name="num1" placeholder="number1" id="num1" required/>
    <br>
    <p id="idp">choose the oprand </p>

    <select name="oprand" id="id1">
        <option value="minus">minus</option>
        <option value="muliple">muliple</option>
        <option value="plus">plus</option>
    </select>
    <br>
    <label for="num2">second number2</label>
    <input type="number" name="num2"  placeholder="number2" id="num2" required/>
    <br>
    <button id="idb" type="submit">Calculate</button>
    <br>
    <!-- <label for="num2">result </label>
    <input type="number" id="result" disabled> -->

    </form>



</body>
</html>