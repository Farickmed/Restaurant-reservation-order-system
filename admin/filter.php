<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "208901_thenmejia");  
      $output = '';  
      $query = "  
           SELECT * FROM reservation WHERE date_res BETWEEN 
           '".$_POST["from_date"]."' AND '".$_POST["to_date"]."' ORDER BY TIME(date_res), date_res";  
       
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                   
                     <th width="5%">reserve_id</th>  
                               <th width="30%">no_of_guest</th>  
                               <th width="43%">email</th>  
                               <th width="10%">phone</th>  
                               <th width="12%">date_res</th>
                               <th width="10%">time</th>  
                               <th width="12%">reservering is gebruikt</th>
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["reserve_id"] .'</td>  
                          <td>'. $row["no_of_guest"] .'</td>  
                          <td>'. $row["email"] .'</td>  
                          <td>$ '. $row["phone"] .'</td>  
                          <td>'. $row["date_res"] .'</td>  
                          <td> '. $row["time"] .'</td>  
                          <td>'. $row["suggestions"] .'</td>  
                     </tr>  
                     
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>
