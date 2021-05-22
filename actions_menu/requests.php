<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="menu_requests">
        <div class="min">
            <h3>N1</h3>
            <?php
                $select_query = "SELECT Title, Text FROM menu WHERE Id=1";
                $result = mysqli_query($conn, $select_query);
                $row = mysqli_fetch_assoc($result);
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            ?>
        </div>
        <div class="min">
            <h3>N2</h3>
            <?php
                $select_query = "SELECT Title, Text FROM menu";
                $result = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div>
                            <div><?=$row['Title']?></div>
                            <div><?=$row['Text']?></div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
        <div class="min">
            <h3>N3</h3>
            <?php
                $select_query = "SELECT * FROM menu WHERE Id=5";
                $result = mysqli_query($conn, $select_query);
                $row = mysqli_fetch_assoc($result);
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            ?>
        </div>
        <div class="min">
            <h3>N4</h3>
            <?php
                $select_query = "SELECT * FROM menu WHERE Id=5 OR Id>5";
                $result = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div>
                            <div><?=$row['Title']?></div>
                            <div><?=$row['Meta_k']?></div>
                            <div><?=$row['Meta_d']?></div>
                            <div><?=$row['Text']?></div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
        <div class="min">
            <h3>N5</h3>
            <?php
                $select_query = "SELECT * FROM menu WHERE Id <=4";
                $result = mysqli_query($conn, $select_query);
                $row = mysqli_fetch_assoc($result);
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            ?>
        </div>
        <div class="min">
            <h3>N6</h3>
            <?php
                $select_query = "SELECT * FROM menu WHERE Title='ფილმები' OR Title='თამაშები'";
                $result = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div>
                            <div><?=$row['Id']?></div>
                            <div><?=$row['Title']?></div>
                            <div><?=$row['Meta_k']?></div>
                            <div><?=$row['Meta_d']?></div>
                            <div><?=$row['Text']?></div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
        <div class="min">
            <h3>N7</h3>
            <?php
                $select_query = "SELECT * FROM menu WHERE Title='მუსიკები' AND Id>3";
                $result = mysqli_query($conn, $select_query);
                $row = mysqli_fetch_assoc($result);
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            ?>
        </div>
    </div>
</body>
</html>