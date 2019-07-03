<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate QR Code</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <style>
        body, html {
            height: 100%;
            width: 100%;
        }
       
    </style>
</head>
<body class="bg">
    <div class="container" id="panel">
        <br><br><br>
        <div class="row">
            <div style="background-color: white; padding: 20px; box-shadow: 10px 10px 5px #888;">
                <div >
                    <h1>Generate QR-code in PHP</h1>
                </div>
                <hr>
                <form action="show.php" method="get">
                    <input type="text"  name="text" style="border-radius: 0px; " placeholder="Text..." value="">
                    <br><br>
                    <input type="submit" value="Generate">
                </form>
            </div>
        </div>
    </div>
</body>
</html>