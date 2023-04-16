<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Date Time Processing</title>
</head>

<body>
    <font size="6" , color="blue">Date Time Processing</font><br>
    <br>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
        <?php
        if (array_key_exists("name", $_GET)) {
            $day = $_GET["day"];
            $month = $_GET["month"];
            $year = $_GET["year"];
            $hour = $_GET["hour"];
            $min = $_GET["min"];
            $sec = $_GET["sec"];
            $name = $_GET["name"];
        } else {
            $name = 0;
            $day = 0;
            $month = 0;
            $year = 0;
            $hour = 0;
            $min = 0;
            $sec = 0;
        }
        ?>
        <table>
            <tr>
                <td>Your name:</td>
                <td colspan="3">
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>Date: </td>
                <td><select name="day">
                        <?php
                        for ($i = 0; $i <= 31; $i++) {
                            if ($day == $i) {
                                echo "<option selected>$i</option>";
                            } else {
                                echo "<option>$i</option>";
                            }
                        }
                        ?>
                    </select>
                </td>
                <td><select name="month">
                        <?php
                        for ($i = 0; $i <= 12; $i++) {
                            if ($month == $i) {
                                echo "<option selected>$i</option>";
                            } else {
                                echo "<option>$i</option>";
                            }
                        }
                        ?>
                    </select>
                </td>
                <td><select name="year">
                        <?php
                        for ($i = 1995; $i <= 2030; $i++) {
                            if ($year == $i) {
                                echo "<option selected>$i</option>";
                            } else {
                                echo "<option>$i</option>";
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Time: </td>
                <td><select name="hour">
                        <?php
                        for ($i = 0; $i <= 23; $i++) {
                            if ($hour == $i) {
                                echo "<option selected>$i</option>";
                            } else {
                                echo "<option>$i</option>";
                            }
                        }
                        ?>
                    </select>
                </td>
                <td><select name="min">
                        <?php
                        for ($i = 0; $i <= 59; $i++) {
                            if ($min == $i) {
                                echo "<option selected>$i</option>";
                            } else {
                                echo "<option>$i</option>";
                            }
                        }
                        ?>
                    </select>
                </td>
                <td><select name="sec">
                        <?php
                        for ($i = 0; $i <= 59; $i++) {
                            if ($sec == $i) {
                                echo "<option selected>$i</option>";
                            } else {
                                echo "<option>$i</option>";
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><input type="submit" value="Submit"></td>
                <td align="left"><input type="reset" value="Reset"></td>
            </tr>
        </table>
        <!-- result -->
        <table>
            <?php
            if (array_key_exists("name", $_GET)) {
                echo "<br> Hi $name";
                echo "<br> You have choose to have an appointment on $hour:$min:$sec, $day/$month/$year";
                echo "<br><br>More information<br><br>In 12 hours, the time and date is ";
                if ($hour <= 12) echo "$hour:$min:$sec AM, $day/$month/$year";
                else {
                    $hour -= 12;
                    echo "$hour:$min:$sec PM, $day/$month/$year";
                }
                $check = 0;
                if ($year % 4 == 0) {
                    $check = 1;
                    if (($year % 100 == 0) && ($year % 400 != 0)) $check = 0;
                }
                if ($month == 2) {
                    if ($check == 0) echo "This month has 28 days!";
                    else echo "This month has 29 days!";
                } else if (($month < 8) && ($month % 2 == 1) || (($month > 7) && ($month % 2 == 0))) echo "This month has 31 days!";
                else echo "This month has 30 days!";
            }
            ?>
        </table>
    </form>
</body>

</html>