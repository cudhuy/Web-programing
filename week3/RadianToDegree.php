<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Convert</title>
    <script>
        function clearResult() {
            document.getElementById("result").innerHTML = "";
        }
    </script>
    <style>
        label {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <font size="6" , color="blue">Convert</font><br>
    <br>
    <form method="post" action="">
        <div>
            <label for="value">Value:</label>
            <input style="margin-left: 41px;" type="number" id="value" name="value">
        </div>
        <div>
            <label for="conversion_type">Conversion type:</label>
            <select id="conversion_type" name="conversion_type">
                <option value="radians_to_degrees">Radians to Degrees</option>
                <option value="degrees_to_radians">Degrees to Radians</option>
            </select>
        </div>
        <br>
        <button type="submit">Convert</button>
        <button type="reset" onclick="clearResult()">Reset</button>
        <?php
        function radians_to_degrees($radians)
        {
            return $radians * 180 / pi();
        }

        function degrees_to_radians($degrees)
        {
            return $degrees * pi() / 180;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $value = $_POST['value'];
            $conversion_type = $_POST['conversion_type'];
            $result = '';

            if ($conversion_type === 'radians_to_degrees') {
                $result = radians_to_degrees($value) . ' degrees';
            } elseif ($conversion_type === 'degrees_to_radians') {
                $result = degrees_to_radians($value) . ' radians';
            }
        }
        ?>
        <!-- result -->
        <?php if (isset($result)) { ?>
            <p id="result"> <?php echo "Result: $value radians is equal to $result." ?></p>
        <?php } ?>

    </form>
</body>

</html>