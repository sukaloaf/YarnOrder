<?php  
$servername = "162.241.226.202"; 
$username = "dtyarnor_user"; 
$password = "4!RQm-XEsnT$:ka";  
$dbname = "dtyarnor_lists";
$conn = new mysqli($servername, $username, $password, $dbname);


 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM wweight WHERE weightName LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($conn, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["weightName"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li></li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>