<?php
if($data==NULL){
 echo "<h2>Dada Empty</h2>";
}
else{
 echo "<table>
 <tr>
   <td>id</td>
   <td>Name</td>

 </tr>";
 foreach($data as $item){
   echo "<tr>";
   echo "<td>".$item['User']['id']."</td>";
   echo "<td>".$item['User']['name']."</td>";
   echo "</tr>";
 }
}
?>