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
                $select_query = "SELECT Age, Date, Reg_Date, Gender from users WHERE Id <4";
                $result = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div>
                            <div><?=$row['Age']?></div>
                            <div><?=$row['Date']?></div>
                            <div><?=$row['Reg_Date']?></div>
                            <div><?=$row['Gender']?></div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
        <div class="min">
            <h3>N2</h3>
            <?php
                $select_query = "SELECT * FROM users WHERE Id <3";
                $result = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div>
                            <div><?=$row['Id']?></div>
                            <div><?=$row['Name']?></div>
                            <div><?=$row['Lastname']?></div>
                            <div><?=$row['Age']?></div>
                            <div><?=$row['Date']?></div>
                            <div><?=$row['Reg_Date']?></div>
                            <div><?=$row['Password']?></div>
                            <div><?=$row['Gender']?></div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
        <div class="min">
            <h3>N3</h3>
            <?php
                $select_query = "SELECT * FROM users WHERE Id >1 AND Id<4";
                $result = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div>
                            <div><?=$row['Id']?></div>
                            <div><?=$row['Name']?></div>
                            <div><?=$row['Lastname']?></div>
                            <div><?=$row['Age']?></div>
                            <div><?=$row['Date']?></div>
                            <div><?=$row['Reg_Date']?></div>
                            <div><?=$row['Password']?></div>
                            <div><?=$row['Gender']?></div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
        <div class="min">
            <h3>N4</h3>
            <?php
                $select_query = "SELECT * FROM users WHERE Id <2 OR Id>=4";
                $result = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div>
                            <div><?=$row['Id']?></div>
                            <div><?=$row['Name']?></div>
                            <div><?=$row['Lastname']?></div>
                            <div><?=$row['Age']?></div>
                            <div><?=$row['Date']?></div>
                            <div><?=$row['Reg_Date']?></div>
                            <div><?=$row['Password']?></div>
                            <div><?=$row['Gender']?></div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
        <div class="min">
            <h3>N5</h3>
            <?php
                $select_query = "SELECT * FROM users WHERE Date = '2014-07-04'";
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
                $select_query = "SELECT * FROM users WHERE Date > '2014-07-04'";
                $result = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div>
                            <div><?=$row['Id']?></div>
                            <div><?=$row['Name']?></div>
                            <div><?=$row['Lastname']?></div>
                            <div><?=$row['Age']?></div>
                            <div><?=$row['Date']?></div>
                            <div><?=$row['Reg_Date']?></div>
                            <div><?=$row['Password']?></div>
                            <div><?=$row['Gender']?></div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
        <div class="min">
            <h3>N7</h3>
            <?php
                $select_query = "SELECT * FROM users WHERE Date > '2014-06-04' and Date <'2014-07-04'";
                $result = mysqli_query($conn, $select_query);
                $row = mysqli_fetch_assoc($result);
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            ?>
        </div>
        <div class="min">
            <h3>N8</h3>
            <?php
                $select_query = "SELECT * FROM users WHERE Age>= 10 AND Age <=18";
                $result = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div>
                            <div><?=$row['Id']?></div>
                            <div><?=$row['Name']?></div>
                            <div><?=$row['Lastname']?></div>
                            <div><?=$row['Age']?></div>
                            <div><?=$row['Date']?></div>
                            <div><?=$row['Reg_Date']?></div>
                            <div><?=$row['Password']?></div>
                            <div><?=$row['Gender']?></div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
    </div>
</body>
</html>