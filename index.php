<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            position: absolute;
            left: 0%;
            text-align: center;
            background-color: brown;
        }

        .container {
            justify-content: center;
            align-items: center;
            display: flex;
            height: 100%;
            text-align: center;
        }

        button {
            width: 200px;
            height: 60px;
            font-size: 30px;
            background-color: green;
            color: honeydew;
            margin-top: 50px;
            margin-left: 40px;
            margin-right: 40px;

        }

        .design {
            border-radius: 20px;
        }

        button:hover {
            background-color: rgb(190, 34, 60);
            color: grey;
        }

        p {
            color: black;
            margin: 0 50px;
            font-size: 45px;
            border: 5px solid red;
            padding: 10px;
            border-radius: 50px 20px;
        }

        h1 {
            font-size: 35px;
            color: rgb(209, 167, 200);
            text-align: center;
            padding-left: 10%;
            font-size: bold;
        }

        /*---Footer Style---*/
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: rgb(70, 87, 180);
            color: white;

        }


        .copy {
            float: left;
            margin-left: 40px;
        }

        .deve {
            float: right;
            margin-right: 40px;
            font-size: bold;
        }

        /*---Footer Style---Closed--*/
    </style>
    <title>Counter Website</title>
</head>

<body>
    <script>
        var sum = 0;
        document.getElementById("result").innerHTML = sum;
        function myincrement() {
            sum = sum + 1;
            document.getElementById("result").innerHTML = sum;

        }

        function myreset() {
            sum = 0;
            document.getElementById("result").innerHTML = sum;
        }

        function mydecrement() {
            sum = sum - 1;
            document.getElementById("result").innerHTML = sum;

        }
    </script>
    <h1>Counter</h1>
    <p id="result">0</p>
    <div="container">
        <button class="design" onclick="myincrement()">+</button>
        <button class="design" onclick="myreset()">Reset</button>
        <button class="design" onclick="mydecrement()">-</button>
        </div>
        <div class="footer">
            <h3 class="copy">Copyright ?? 2022. All rights reserved</h3>
            <h3 class="deve">Developed By: Mukesh Kumar</h3>
        </div>
</body>

</html>
