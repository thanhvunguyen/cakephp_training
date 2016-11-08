<?php
if($data==NULL){
 echo "<h2>Books</h2>";
}
else{
 echo "<table>
 <tr>
    <td>id</td>
    <td>Book_Name</td>
    <td>UserName</td>
    <td>Userphone</td>
    <td></td>
 </tr>";
     foreach($data as $item){
         echo "<tr>";
         echo "<td>".$item['Book']['id']."</td>";
         echo "<td>".$item['Book']['book_name']."</td>";
         echo "<td>".$item['User']['name']."</td>";
         echo "<td>".$item['User']['phone']."</td>";
         echo "</tr>";

     }
}
