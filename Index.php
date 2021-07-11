<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>First Task</title>
</head>
<body>


    <div class="container">
    
        <form action="connection.php" method="post">

            <div class="card">
                <input type="range" name="m1" id="m1" min="0" max="180" value="0" oninput="ChangeValue()">
                <label id="l1"></label>
            </div>
            <div class="card">
                <input type="range" name="m2" id="m2" min="0" max="180" value="0" oninput="ChangeValue()">
                <label id="l2"></label>
            </div>
            <div class="card">
                <input type="range" name="m3" id="m3" min="0" max="180" value="0" oninput="ChangeValue()">
                <label id="l3"></label>
            </div>
            <div class="card">
                <input type="range" name="m4" id="m4" min="0" max="180" value="0" oninput="ChangeValue()">
                <label id="l4"></label>
            </div>
            <div class="card">
                <input type="range" name="m5" id="m5" min="0" max="180" value="0" oninput="ChangeValue()">
                <label id="l5"></label>
            </div>
            <button type="submit">Save</button>
            
        </form>
    </div>

    

    <script>
        var servo1 = document.getElementById("m1");
        var label1 = document.getElementById("l1");
        label1.innerHTML = servo1.value;
        
        var servo2 = document.getElementById("m2");
        var label2 = document.getElementById("l2");
        label2.innerHTML = servo2.value;
        
        var servo3 = document.getElementById("m3");
        var label3 = document.getElementById("l3");
        label3.innerHTML = servo3.value;
        
        var servo4 = document.getElementById("m4");
        var label4 = document.getElementById("l4");
        label4.innerHTML = servo4.value;
        
        var servo5 = document.getElementById("m5");
        var label5 = document.getElementById("l5");
        label5.innerHTML = servo5.value;

        function ChangeValue(){
        label1.innerHTML = servo1.value;
        label2.innerHTML = servo2.value;
        label3.innerHTML = servo3.value;
        label4.innerHTML = servo4.value;
        label5.innerHTML = servo5.value;

        }

    </script>
</body>
</html>