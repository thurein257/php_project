<?php
session_start();
if($_SESSION['id']==1){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="nov-style.css">
    <title>View Product</title>
</head>
<body>
<div class="container">
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="insert.php">Insert</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav><br><br><br><br>
<table>
            <tr>
                <th>Product</th>
                <th>Category</th>
                <th>Prices</th>

            </tr>
            <?php
                error_reporting(1);
                include("connection.php");
                $sel=mysql_query("select * from product");
                echo"<tr>";
                $n=0;
                while($arr=mysql_fetch_array($sel))
                {
                echo"<td>" .$arr['pname']. "</td>";
                echo"<td>" .$arr['cname']. "</td>";
                echo"<td>" .$arr['prn']. "</td>";
                echo"</tr>";
                }
            ?>
        </table>
</body>
</html>
<?php
    }
    else
    {
        header("location:index.php");
    }
?>