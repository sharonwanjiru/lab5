<!DOCTYPE html>
<html>
    <head>
        <title>Mpesa Express</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="lipa.php" method="POST">
            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" name="phoneNumber" id="phoneNumber"></input>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" name="amount" id="amount"></input>
            </div>
            <button type="submit" name="submit" class="btn btn-default">Submit</button>
        </form>
    </body>
</html>