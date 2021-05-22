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
                $select_query = "SELECT * FROM data WHERE Id<=7 AND Type=2";
                $result = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div>
                            <div><?=$row['Id']?></div>
                            <div><?=$row['Title']?></div>
                            <div><?=$row['Date']?></div>
                            <div><?=$row['Type']?></div>
                            <div><?=$row['Photo']?></div>
                            <div><?=$row['Text']?></div>
                            <div><?=$row['Autor']?></div>
                            <div><?=$row['Description']?></div>
                            <div><?=$row['Meta_k']?></div>
                            <div><?=$row['Meta_d']?></div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
        <div class="min">
            <h3>N2</h3>
            <?php
                $select_query = "SELECT * FROM data WHERE Id >2";
                $result = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div>
                            <div><?=$row['Id']?></div>
                            <div><?=$row['Title']?></div>
                            <div><?=$row['Date']?></div>
                            <div><?=$row['Type']?></div>
                            <div><?=$row['Photo']?></div>
                            <div><?=$row['Text']?></div>
                            <div><?=$row['Autor']?></div>
                            <div><?=$row['Description']?></div>
                            <div><?=$row['Meta_k']?></div>
                            <div><?=$row['Meta_d']?></div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
        <div class="min">
            <h3>N3</h3>
            <?php
                $select_query = "SELECT * FROM data WHERE Id >2 ORDER BY Id DESC";
                $result = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div>
                            <div><?=$row['Id']?></div>
                            <div><?=$row['Title']?></div>
                            <div><?=$row['Date']?></div>
                            <div><?=$row['Type']?></div>
                            <div><?=$row['Photo']?></div>
                            <div><?=$row['Text']?></div>
                            <div><?=$row['Autor']?></div>
                            <div><?=$row['Description']?></div>
                            <div><?=$row['Meta_k']?></div>
                            <div><?=$row['Meta_d']?></div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
        <div class="min">
            <h3>N4</h3>
            <?php
                $select_query = "SELECT * FROM data WHERE Id%2=0";
                $result = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div>
                            <div><?=$row['Id']?></div>
                            <div><?=$row['Title']?></div>
                            <div><?=$row['Date']?></div>
                            <div><?=$row['Type']?></div>
                            <div><?=$row['Photo']?></div>
                            <div><?=$row['Text']?></div>
                            <div><?=$row['Autor']?></div>
                            <div><?=$row['Description']?></div>
                            <div><?=$row['Meta_k']?></div>
                            <div><?=$row['Meta_d']?></div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
    </div>
</body>
</html>