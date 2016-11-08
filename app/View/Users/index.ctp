<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>
<?php
    if($data==NULL){
        echo "<h2>Users</h2>";
    } else {
?>
 <table>
    <tr>
        <td>id</td>
        <td>Name</td>
        <td>phone</td>
        <td>email</td>
        <td>Action</td>
        <td><?php
                echo $this->Html->link(
                    'Create User',
                    '/users/create',
                    ['class' => 'button']
                )
            ?>
        </td>
    </tr>
 <?php
    foreach($data as $item){
 ?>
     <tr>
         <td><?php echo $item['User']['id'];   ?> </td>
         <td><?php echo $item['User']['name']; ?> </td>
         <td><?php echo $item['User']['phone']; ?> </td>
         <td><?php echo $item['User']['email']; ?> </td>
         <td>
            <?php echo  $this->Html->link('Delete','/users/delete/'.$item['User']['id'],array('confirm' => 'Are you sure you wish to delete this user?'));
                   echo "---" ;
                   echo  $this->Html->link('Update','/users/update/'.$item['User']['id']);
            ?>
         </td>
     </tr>
 <?php
     }
 }
 ?>
    </body>
</html>