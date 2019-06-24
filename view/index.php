
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <style>
        .js-show-form{
            border: 1px solid black;
            max-width: 320px;
            cursor: pointer;
            padding-left: 5px;
            background-color: #026b9a;
            color: #fff;
            font-size:18px;

        }
        div form{
            display:none;
        }
    </style>
</head>
<body>
    
    <form action="lib/cars.php" method="POST">
        <h1>show all cars</h1>
        <input type="submit">
    </form>
    <div>
    <h1 class="js-show-form">search car by name</h1>
    <form action="lib/searchcars.php" method="POST">
        <input type="text" name="method" style="display:none" value="name">
        <select name="year" >
                <option value="2004">2004 year</option>
                <option value="2014">2014 year</option>
                <option value="2016">2016 year</option>
                <option value="2019">2019 year</option>
        </select>
        <select name="name" >
            <option value="BMW">BMW</option>
            <option value="Mazda">Mazda</option>
            <option value="Audi">Audi</option>
            <option value="Reng Rover">Reng Rover</option>
        </select>
        <input type="submit">
    </form>
    </div>
    <div>
    
    <h1 class="js-show-form">search car by model</h1>
    <form action="lib/searchcars.php" method="POST">
        <input type="text" name="method" style="display:none" value="model">
        <select name="year" >
                <option value="2004">2004 year</option>
                <option value="2014">2014 year</option>
                <option value="2016">2016 year</option>
                <option value="2019">2019 year</option>
        </select>
        <select name="name" >
            <option value="z4">BMW:z4</option>
            <option value="cx5">Mazda:cx5</option>
            <option value="sport">Reng Rover:sport</option>
            <option value="X6">BMW:X6</option>
            <option value="a8">Audi</option>
        </select>
        <input type="submit">
    </form>
    </div>
    <div>

    <h1 class="js-show-form">search car by color</h1>
        <form action="lib/searchcars.php" method="POST">
            <input type="text" name="method" style="display:none" value="color">
            <select name="year" >
                <option value="2004">2004 year</option>
                <option value="2014">2014 year</option>
                <option value="2016">2016 year</option>
                <option value="2019">2019 year</option>
            </select>
            <select name="name" >
                <option value="red">red</option>
                <option value="white">white</option>
                <option value="black">black</option>
                <option value="grey">grey</option>
            </select>
            <input type="submit">
        </form>
    </div>
    <div>

    <h1 class="js-show-form">search car by max_speed</h1>
        <form action="lib/searchcars.php" method="POST">
            <input type="text" name="method" style="display:none" value="max_speed">
            <select name="year" >
                <option value="2004">2004 year</option>
                <option value="2014">2014 year</option>
                <option value="2016">2016 year</option>
                <option value="2019">2019 year</option>
            </select>
            <select name="name" >
                <option value="220">220 km/h</option>
                <option value="240">240 km/h</option>
                <option value="280">280 km/h</option>
                <option value="290">290 km/h</option>
                <option value="320">320 km/h</option>
            </select>
            <input type="submit">
        </form>
    </div>
    <div>

    <h1 class="js-show-form">search car by price</h1>
        <form action="lib/searchcars.php" method="POST">
            <input type="text" name="method" style="display:none" value="price">
            <select name="year" >
                <option value="2004">2004 year</option>
                <option value="2014">2014 year</option>
                <option value="2016">2016 year</option>
                <option value="2019">2019 year</option>
            </select>
            <select name="name" >
                <option value="40000">40000$</option>
                <option value="49000">49000$</option>
                <option value="70000">70000$</option>
                <option value="75000">75000$</option>
                <option value="80000">80000$</option>
            </select>
            <input type="submit">
        </form>
    </div>

        <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
        </script>
        <script>
            $( document ).ready(function() {
                console.log('1')
                $('.js-show-form').on('click',function(){
                    $(this).closest('div').find('form').toggle();
                })
            });
        </script>
</body>
</html>