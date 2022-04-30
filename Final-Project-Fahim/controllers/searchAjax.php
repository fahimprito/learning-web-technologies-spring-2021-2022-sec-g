

<?php
$search=$_REQUEST['username'];
$con = mysqli_connect('localhost','root','','midfahim');
$sql ="select * from tstudentlist where username like '%{$search}%'";
$result=mysqli_query($con, $sql);

$data="
      <center><table border=1>
          <tr>
             <td>Username</td>
              <td>Name</td>
              <td>Email</td>
              <td>Phone</td>
              <td>Date of Birth</td>
              <td>Gender</td>
              <td>Address</td>
	</tr> </center>";


  while($row=mysqli_fetch_assoc($result))
  {
   $data .="<tr>
     <td>{$row['username']}</td>
     <td>{$row['name']}</td>
     <td>{$row['email']}</td>
     <td>{$row['phone']}</td>
     <td>{$row['dob']}</td>
     <td>{$row['gender']}</td>
     <td>{$row['address']}</td>
       
     </tr>";
  }
  $data .="</table>";
  echo $data;
?>