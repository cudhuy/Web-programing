<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .row {
            display: flex;
            justify-content: center;
            /* align-items: center; */
        }

        .column {
            float: left;
            width: 40%;
            padding: 10px;

        }
        .result{
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0px 20px;
        }
    </style>
</head>

<body>
    <?php
    function user_sort($a, $b)
    {
        // smarts is all-important, so sort it first
        if ($b == 'smarts') {
            return 1;
        } else if ($a == 'smarts') {
            return -1;
        }
        return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
    }

    $values = [
        'name' => 'Buzz Lightyear',
        'email_address' => 'buzz@starcommand.gal',
        'age' => 32,
        'smarts' => 'some'
    ];
    ?>
    <form action="UserSorting.php" method="post">
        <!-- <label><input type="radio" name="sort_type" value="uasort" <?= @$_POST['sort_type'] == 'uasort' ? 'checked' : '' ?> /> User-defined value sort</label><br> -->
        <p>
        <div class="row">
            <div class="column">
                <div class="column">
                    <label><input type="radio" name="sort_type" value="sort" <?= @$_POST['sort_type'] == 'sort' ? 'checked' : '' ?> />Standard sort</label><br>
                    <label><input type="radio" name="sort_type" value="rsort" <?= @$_POST['sort_type'] == 'rsort' ? 'checked' : '' ?> /> Reverse sort</label><br>
                </div>
                <div class="column">
                    <label><input type="radio" name="sort_type" value="usort" <?= @$_POST['sort_type'] == 'usort' ? 'checked' : '' ?> /> User-defined sort</label><br>
                    <label><input type="radio" name="sort_type" value="ksort" <?= @$_POST['sort_type'] == 'ksort' ? 'checked' : '' ?> /> Key sort</label><br>
                </div>
            </div>

            <div class="column">
                <div class="column">
                    <label><input type="radio" name="sort_type" value="krsort" <?= @$_POST['sort_type'] == 'krsort' ? 'checked' : '' ?> /> Reverse key sort</label><br>
                    <label><input type="radio" name="sort_type" value="uksort" <?= @$_POST['sort_type'] == 'uksort' ? 'checked' : '' ?> /> User-defined key sort</label><br>
                </div>

                <div class="column">
                    <label><input type="radio" name="sort_type" value="asort" <?= @$_POST['sort_type'] == 'asort' ? 'checked' : '' ?> /> Value sort</label><br>
                    <label><input type="radio" name="sort_type" value="arsort" <?= @$_POST['sort_type'] == 'arsort' ? 'checked' : '' ?> /> Reverse value sort</label><br>
                    <label><input type="radio" name="sort_type" value="uasort" <?= @$_POST['sort_type'] == 'uasort' ? 'checked' : '' ?> /> User-defined value sort</label><br>
                </div>
            </div>
        </div>
        </p>
        <p align="center">
            <input type="submit" value="Sort" name="submitted" align="right" />
        </p>
        <div class="row">
            <table>
                <tr>
                    <td>
                        <div class="result">
                            <p>Values unsorted (before sort):</p>
                            <ul>
                                <?php
                                foreach ($values as $key => $value) {
                                    echo "<li><b>$key</b>: $value</li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="result">
                            <?php
                            if (!isset($_POST["sort_type"])) {
                            } else {
                                $sort_type = $_POST["sort_type"];
                                if ($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
                                    $sort_type($values, 'user_sort');
                                } else $sort_type($values);
                                echo "<p>Values sorted by $sort_type:</p>";
                                echo "<ul>";
                                foreach ($values as $key => $value) {
                                    echo "<li><b>$key</b>: $value</li>";
                                }
                                echo "</ul>";
                            }
                            ?>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>