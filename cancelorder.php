<?php
include 'header.php';
?>
<div id="main-content">
    <h2>cancel Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Email</th>
        <th>Contact</th>
        </thead>
        <tbody>
        <?php 
       include 'config.php';
       
        $sql = "SELECT * FROM cancel_order";
        $res = mysqli_query($conn,$sql) or die ("query unsuccesfull");
        if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_assoc($res)){
        
        ?>
            <tr>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['contact'] ?></td>
                <td>
                <a href='mail2.php?id=<?php echo $row['email'] ?>'>Email</a>
                    <a href='delete-inline2.php?id=<?php echo $row['contact'] ?>'>Delete</a>
                </td>
            </tr>
           <?php 
        }
        } else {
            echo "<h2 style = 'color:red;'>no cancel order yet</h2>";
        }
        mysqli_close($conn);
           ?>
           
        </tbody>
    </table>
</div>
</div>
</body>
</html>
