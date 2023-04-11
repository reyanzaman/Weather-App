<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    
    <?php include("weather.php"); ?>

    <div class="title">
        <h1>Dhaka Weather App</h1>
    </div>

    <div class="container-fluid px-1 px-md-4 py-5 mx-auto">
        <div class="row d-flex justify-content-center px-3">
            <div class="card">
                <h2 class="ml-auto mr-4 mt-3 mb-0">Dhaka</h2>
                <p class="ml-auto mr-4 mb-0 med-font" id="weather">Sunny</p>
                <h1 class="ml-auto mr-4 large-font" id="temperature">-20&#176;</h1>
                <p class="time-font mb-0 ml-4 mt-auto"><?php echo $hour; ?><span class="sm-font" id="ampm"><?php echo $ampm; ?></span></p>
                <p class="ml-4 mb-4 date-font"><?php echo $date; ?></p>
            </div>
        </div>
    </div>
    
    <?php include("weather.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <footer class="footer">
        <p>Made by Khandoker Ashik Uz Zaman</p>
    </footer>

</body>
</html>