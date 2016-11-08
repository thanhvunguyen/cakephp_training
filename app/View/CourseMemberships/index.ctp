<?php
if($data==NULL){
 echo "<h2>Books</h2>";
}
else{
 echo "<table>
 <tr>
    <td>id</td>
    <td>student_name</td>
    <td>course_name</td>
    <td></td>
 </tr>";
     foreach($data as $item){
         echo "<tr>";
         echo "<td>".$item['Student']['id']."</td>";
         echo "<td>".$item['Student']['student_name']."</td>";
         echo "<td>".$item['Course']['course_name']."</td>";
         echo "</tr>";

     }
}
