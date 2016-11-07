<?php
if($data==NULL){
 echo "<h2>Update</h2>";
}
else{
 echo "<table>
 <tr>
    <td>id</td>
    <td>Name</td>
    <td>phone</td>
    <td>email</td>
    <td>Action</td>
    <td></td>
    <td>".$this->Html->link(
            'Create User',
            '/users/create',
            ['class' => 'button']
            )."
    </td>
 </tr>";
     foreach($data as $item){
         echo "<tr>";
         echo "<td>".$item['User']['id']."</td>";
         echo "<td>".$item['User']['name']."</td>";
         echo "<td>".$item['User']['phone']."</td>";
         echo "<td>".$item['User']['email']."</td>";
         echo "<td>".$this->Html->link('Delete','/users/delete/'.$item['User']['id'],array('confirm' => 'Are you sure you wish to delete this user?'))."</td>";
         echo "<td>".$this->Html->link('Update','/users/update/'.$item['User']['id'])."</td>";
         echo "</tr>";

     }
}
