<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: "Scriptin";
            src: url("/assets/fonts/SCRIPTIN.ttf") format("truetype");
        }

    </style>
    <link rel="stylesheet" href="styles/css/styles.css">
</head>
    


<body>
    <button type="button" onclick="increaseFontSize('congrats', 5)" style="margin-top:20px;">Get Excited</button>
    <h1 id="congrats" style="margin-top:20px;">Congratulations! You're coming!!</h1>
    <p><a href="index.php">Home ></a></p>
    <script>
        function increaseFontSize(id, increaseFactor){
             txt = document.getElementById(id);
             style = window.getComputedStyle(txt, null).getPropertyValue('font-size');
             currentSize = parseFloat(style);
             txt.style.fontSize = (currentSize + increaseFactor) + 'px';
        }
    </script>
</body>


</html>
