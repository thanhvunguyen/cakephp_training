<?php
if($data==NULL){
 echo "<h2>Dada Empty</h2>";
}
else{
 echo "<table>
 <tr>
   <td>id</td>
   <td>Name</td>
   <td>phone</td>
   <td>email</td>
    <td>Action</td>
 </tr>";
     foreach($data as $item){
         echo "<tr>";
         echo "<td>".$item['User']['id']."</td>";
         echo "<td>".$item['User']['name']."</td>";
         echo "<td>".$item['User']['phone']."</td>";
         echo "<td>".$item['User']['email']."</td>";
         echo "<td>".$this->Html->link('Delete','/users/delete/'.$item['User']['id'])."</td>";
         echo "<td>".$this->Html->link('Update','/users/update/'.$item['User']['id'])."</td>";
         echo "</tr>";

     }
}
