
<?php
//isset ktra biến đã khởi tạo chưa
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<header class="header">
   <meta charset="UTF-8">
   <div class="flex">
   <!--thuộc tính action trong form gán địa chỉ dlieu-->
   <a href="home.php" class="logo"><i class="fas fa-shopping-basket"></i>Healthyfood</a>
            <form action="" class="search-box-container">
                <input type="search" id="search-box" placeholder="search here...">
                <label for="search-box" class="fas fa-search"></label>
        </form>
        <!-- nav định nghĩa danh mục-->
      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="about.php">About</a>
         <a href="contact.php">Contact</a>
      </nav>
<!--href="#"không chỉ định tên id, nhưng có một vị trí tương ứng - trên cùng của trang. Nhấp vào một neo 
với href="#"sẽ di chuyển vị trí cuộn lên trên cùng-->
      <div class="icons">
         <a href="#" class="fas fa-heart"></a>
         <?php 
         if(!isset($_SESSION['UserId'])){?>
            <a href="login.php" id="user-btn" class="fas fa-user-circle"></a>  
         <?php } else {?>
            <a href="#"><?=$_SESSION['UserName'] ?></a>
            <a href="logout.php"><div  class="fas fa-sign-out" ></div></a>
         <?php } ?>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>
   </div>

</header>