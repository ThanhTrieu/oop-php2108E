<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sum number</title>
</head>
<body>
    <form method="post" action="server/sum.php">
        <div>
            <label>number 1</label>
            <input type="number" name="number_1" />
        </div>
        <br/>
        <div>
            <label>number 2</label>
            <input type="number" name="number_2" />
        </div>
        <br/>
        <button type="submit" name="btnSum"> Sum </button>
    </form>
</body>
</html>