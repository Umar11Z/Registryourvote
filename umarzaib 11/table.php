 <?php
include_once('connection.php');
$query = "select * from vote";
$result = mysqli_query($connection, $query);
?>

<html>
    <head>
        <title>Data Table</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- <center> --> -->
        <!-- <table width="500" border="2px" cellpadding="5" cellspacing="5" bgcolor="lightblue">
            <tr>   
                <th>Name</th>
                <th>Address</th>
                <th>CNIC</th>
                <th>Image</th>
            </tr>

            <tr>
                <td>Muneer</td>
                <td>Swabi</td>
                <td>323223233</td>
                <td>ye main hoon</td>
            </tr>
        </table> -->
        <!-- </center> -->
    </body>
</html>
<center>
<table>

<?php

include_once'connection.php';

$query = ("select * from vote");
$result = mysqli_query($connection, $query);



?> 


<tr>   
    
                <td>Name</th>
                <th>Address</th>
                <th>CNIC</th>
                <th>Image</th>
            </tr>

            </center>


 <?php
$counter = 1;
 while ($row = mysqli_fetch_array($result)) {                    //returns array of string

    
         $image = $row['Image'];

    
?>

  <center>
    </tr>
  
     <tr bgcolor="skyblue">
         <b>

         
         <td><?php echo $row['Name']; ?></td>
         <td><?php echo $row['Address']; ?></td>
         <td><?php echo $row['CNIC']; ?></td>

         <td align="center"><img style="border-radius=30px" align="center" width="100" src="images/<?php echo $image;?>" alt="Image Not found"></td>

         <!-- <td><a href="./delete.php" id=<?php echo $row['id']; ?> input type="button" name="delete" value="Delete" style="width:100px;"></td> -->
         <td><input type="button" name="edit" value="Edit" style="width:100px;"></td> 
         <!-- <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td> -->
         <td> <a href = './delete.php?'name=$result[name]' onclick = 'return checkdelete()'> Delete </td>
	</tr>
        
         </b>
     </tr>
   
     <?php
    $counter++;
    }
    ?>
    </table>
    </center>