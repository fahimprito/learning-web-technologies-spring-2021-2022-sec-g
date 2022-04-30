<?php
$search=$_REQUEST['username'];
$con = mysqli_connect('localhost','root','','midfahim');
$sql ="select * from teacherclasslist where classid like '%{$search}%'";
$result=mysqli_query($con, $sql);

$data="
      <center><table border=1>
          <tr>
             <td>Class ID</td>
              <td>Class</td>
              <td>Section</td>
              <td>Room</td>
	</tr> </center>";


  while($row=mysqli_fetch_assoc($result))
  {
   $data .="<tr>
     <td>{$row['classid']}</td>
     <td>{$row['class']}</td>
     <td>{$row['section']}</td>
     <td>{$row['room']}</td>
       
     </tr>";
  }
  $data .="</table>";
  echo $data;
?>