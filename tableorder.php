<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>date</th>
        <th>person</th>
        <th>time</th>
        </thead>
        <tbody>
        <?php 
       include 'config.php';
 
       
        $sql = "SELECT * FROM booking";
        $res = mysqli_query($conn,$sql) or die ("query unsuccesfull");
        if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_assoc($res)){
        
        ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['contact'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <td><?php echo $row['person'] ?></td>
                <td><?php echo $row['time'] ?></td>
                <td>
                    <a href='delete-inline.php?id=<?php echo $row['contact'] ?>'>Delete</a>
                </td>
            </tr>
           <?php 
        }
        } else {
            echo "<h2 style = 'color:red;'>no order yet</h2>";
        }
        mysqli_close($conn);
           ?>
           
        </tbody>
    </table>
</div>
</div>
</body>
</html>
