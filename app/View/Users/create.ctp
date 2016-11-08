<!DOCTYPE html>
<html>
    <head>
        <title>Create User</title>
    </head>
    <body>
        <form id="UserAddForm" method='post' onsubmit="return confirm('Are you sure you wish to create this user?')" >

             <div class="input name">
               <label for="UserName">Name</label>
               <input type="text" name="data[User][name]" value="" id="UserName" />
             </div>

             <div class="input phone">
                    <label for="UserPhone">Phone</label>
                    <input type="text" name="data[User][phone]" value="" id="UserPhone" />
             </div>

             <div class="input email">
               <label for="UserEmail">Email</label>
               <input type="email" name="data[User][email]" value="" id="UserEmail" />
             </div>

             <div class="submit">
               <input type="submit" value="Create" />
             </div>
        </form>
    </body>
</html>
