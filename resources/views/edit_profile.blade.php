<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Profile</title>
   <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#3498db;
   --dark-blue:#2980b9;
   --red:#e74c3c;
   --dark-red:#c0392b;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 5px 10px rgba(0,0,0,.1);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}

*::-webkit-scrollbar{
   width: 10px;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

.btn,
.delete-btn{
   width: 100%;
   border-radius: 5px;
   padding:10px 30px;
   color:var(--white);
   display: block;
   text-align: center;
   cursor: pointer;
   font-size: 20px;
   margin-top: 10px;
}

.btn{
   background-color: #ECB53D;
}

.btn:hover{
   background-color: #20492F;
}

.delete-btn{
   background-color: grey;
}

.delete-btn:hover{
   background-color: black;
}

.message{
   margin:10px 0;
   width: 100%;
   border-radius: 5px;
   padding:10px;
   text-align: center;
   background-color: var(--red);
   color:var(--white);
   font-size: 20px;
}

.update-profile {
   display: flex;
   flex-wrap: wrap;
   gap: 20px;
   justify-content: center;
   align-items: flex-start;
   min-height: 100vh;
   background: #fcf5e5;
   padding: 20px;
}

.left-box {
   margin-top: 50px;
   width: 300px;
   height: 470px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   padding: 20px;
   border-radius: 5px;
   display: flex;
   align-items: center;
   justify-content: center;
}

.right-box {
   width: 500px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   padding: 20px;
   margin-top: 50px;
   border-radius: 5px;
}

.left-box img {
   height: 200px;
   width: 200px;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: 5px;
}

@media (max-width: 650px) {
   .left-box,
   .right-box {
      width: 100%;
   }
}

.right-box .flex {
   display: flex;
   justify-content: space-between;
   margin-bottom: 20px;
   gap: 15px;
}

.right-box .flex .inputBox {
   width: 49%;
}

.right-box .flex .inputBox span {
   text-align: left;
   display: block;
   margin-top: 15px;
   font-size: 17px;
   color: var(--black);
}

.right-box .flex .inputBox .box {
   width: 100%;
   border-radius: 5px;
   background-color: var(--light-bg);
   padding: 12px 14px;
   font-size: 17px;
   color: var(--black);
   margin-top: 10px;
}
   </style>
</head>
<body>

<div class="update-profile">
   <??>

   <div class="left-box">
      <form action="" method="post" enctype="multipart/form-data">
      <??>
   </div>

   <div class="right-box">
      <div class="flex">
         <div class="inputBox">
            <span>Nama:</span>
            <input type="text" name="update_name" value="<?php echo $fetch['nama']; ?>" class="box">
            <span>Username:</span>
            <input type="text" name="update_username" value="<?php echo $fetch['username']; ?>" class="box" disabled>
            <span>Email:</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
         </div>
         <div class="inputBox">
            <span>Nomor Telepon:</span>
            <input type="text" name="update_phone" value="<?php echo $fetch['phone']; ?>" class="box">
            <span>Alamat:</span>
            <input type="text" name="update_address" value="<?php echo $fetch['alamat']; ?>" class="box">
            <span>Update Gambar Profil:</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
      </div>
      <input type="submit" value="Perbarui Profil" name="update_profile" class="btn">
      <a href="profil.php" class="delete-btn">Kembali</a>
      </form>
   </div>
</div>

</body>
</html>
