
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   
<div class="container">
   <h3>Add New User</h3>
   <form class="card-panel" action="handler.php" method="post" enctype="multipart/form-data">
       <div class="row">
           <div class="field">
               <label>Name: <input type="text" name="name"></label>
           </div>
       </div>
       <div class="row">
           <div class="field">
               <label>E-mail: <input type="email" name="email"><br></label>
           </div>
       </div>
       <div class="row">
           <div class="field">
               <label>
                   <input class="with-gap" type="radio" name="gender" value="female"/>
                   <span>Female</span>
               </label>
           </div>
           <div class="field">
               <label>
                   <input class="with-gap" type="radio" name="gender" value="male"/>
                   <span>Male</span>
               </label>
           </div>
       </div>
       <div class="row">
           <div class="file-field input-field">
               <div class="btn">
                   <span>Photo</span>
                   <input type="file" name="photo" accept="image/png, image/gif, image/jpeg">
               </div>
               <div class="file-path-wrapper">
                   <input class="file-path validate" type="text">
               </div>
           </div>
       </div>
       <input type="submit" class="btn" value="Add">
   </form>
</div>

<style>
       body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100%;
        }
        
       .container {
           width: 400px;
       }
</style>