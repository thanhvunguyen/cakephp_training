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
    <td>days_attended</td>
    <td>grade</td>
    <td></td>
 </tr>";
     foreach($data as $item){
         echo "<tr>";
         echo "<td>".$item['Student']['id']."</td>";
         echo "<td>".$item['Student']['student_name']."</td>";
         echo "<td>".$item['Course']['course_name']."</td>";
         echo "<td>".$item['CourseStudent']['days_attended']."</td>";
         echo "<td>".$item['CourseStudent']['grade']."</td>";
         echo "</tr>";

     }
}
