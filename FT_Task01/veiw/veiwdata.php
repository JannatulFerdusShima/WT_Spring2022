<?php include ("../control/veiwdatacheck.php")?>
<html>
    <body>
        <form action=""method="post">
            <input type="submit" name="veiwdata" value="Veiw Data">
</form>  
<form action=""method="post">
            <input type="text" name="searchdata" >
            <input type="submit" name="search" value="Search">
</from> 

<form action=""method="post">
<input type="text" name="fname" value="<?php echo $fname;?>">
<input type="text" name="lname" value="<?php echo $lname;?>">
<input type="text" name="age" value="<?php echo $age;?>">
<input type="text" name="salary" value="<?php echo $salary;?>">
<input type="text" name="address" value="<?php echo $address;?>">
<input type="submit" name="update" value="Update">
</form> 
</body>
</html>
