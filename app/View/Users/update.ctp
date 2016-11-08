<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <form id="UserAddForm" method='post' onsubmit="return confirm('Are you sure you wish to update this user?')" >
             <div class="input name">
               <label for="name">Name</label>
               <input type="text" id="name" name="name" value="<?php echo $data['User']['name'];?>"  />
             </div>

             <div class="input phone">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" value="<?php echo $data['User']['phone'];?>" />
             </div>

             <div class="input email">
               <label for="email">Email</label>
               <input type="email" id="email" name="email" value="<?php echo $data['User']['email'];?>"  />
             </div>

             <div class="submit">
               <input type="submit" value="Create" />
             </div>
        </form>
    </body>
</html>

