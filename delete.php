<?php include 'header.php'; 
include "config.php";

if(isset($_POST['deletebtn'])){

        $contact = $_POST['contact'];
    $sql = " DELETE FROM booking WHERE contact = $contact ";
$res = mysqli_query($conn,$sql) or die ("query unsuccesfull");

header("location: delete.php");
mysqli_close($conn);
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Contact</label>
            <input type="text" name="contact" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
