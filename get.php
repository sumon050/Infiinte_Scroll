<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'studentlist');
        if (isset($_POST['start'])) {
            $start = mysqli_real_escape_string($con, $_POST['start']);
            $sql = "select * from students limit $start,10";
            $res = mysqli_query($con, $sql);
            if (mysqli_num_rows($res) > 0) {
                $html = "";
                while ($row = mysqli_fetch_assoc($res)) {
                    $html .= '
                                        <div class="border border-dark text-center">
                                            <p>' . 'Roll: ' . $row['id'] . '</p>
                                            <p>' . 'Name: ' . $row['fullname'] . '</p>
                                            <p>' . 'Email: ' . $row['email'] . '</p>
                                        </div>
                                        ';
                }
                echo $html;
            }
        }

        ?>
    </div>
</body>

</html>