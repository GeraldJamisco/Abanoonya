<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <div class="chat-container">

    
   <!-- start: Sidebar -->
   <aside class="chat-sidebar">
                <a href="#" class="chat-sidebar-logo">
                    <i class="fa fa-heart"></i>
                </a>
                <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
                <ul class="chat-sidebar-menu">
                     <li><a href="#" data-title="Contacts"><i class="fa fa-users"></i></a></li>
                    <li class="active"><a href="#" data-title="Chats"><i class="fa fa-comment"></i></a></li>
                    <li><a href="#" data-title="Documents"><i class="fa fa-folder"></i></a></li>
                    <li><a href="#" data-title="Settings"><i class="fa fa-cog"></i></a></li>
                    <li class="chat-sidebar-profile">
                        <button type="button" class="chat-sidebar-profile-toggle">
                          <img src="php/images/<?php echo $row['img']; ?>" alt="">
                        </button>
                        <ul class="chat-sidebar-profile-dropdown">
                            <li><a href="#"><i class="fa fa-user-edit"></i> Profile</a></li>
                            <li><a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- end: Sidebar -->
            <!-- start: Content -->
            <div class="chat-content">
            
                <!-- start: Content side -->
                <div class="content-sidebar">
                    <div class="content-sidebar-title">Bónyumya Nabo</div> <!--chats--> 
                    <!-- Searching for an individual Start-->
                    <!-- <form action="" class="content-sidebar-form">
                        <input type="search" class="content-sidebar-input" placeholder="Search Chats...">
                        <button type="submit" class="content-sidebar-submit"><i class="fa fa-search"></i></button>
                    </form> -->
                  <div class="content-sidebar-form">
                                    <div class="search">
                            <!-- <span class="text">Select an user to start chat</span> -->
                            <input type="text" class="content-sidebar-input" placeholder="Enter name to search..." style="padding-bottom: 14px;">
                        <button type="submit" class="content-sidebar-submit"><i class="fas fa-search"></i></button>
                      </div>
                  </div>
                    
                    <!-- Searching for an individual end -->
                    <!-- view all users/messegers start -->
                    <div class="users-list">
                      

          </div>
                    <!-- view all users/messegers end -->
                </div>
                <!-- end: Content side -->
                                    <!-- start: Conversation -->
<div class="conversation conversation-default active">
                                     <i class="ri-chat-3-line"></i>
                                     
                                     <!--  -->
                                     <?php 
                                     if (!isset($conn, $_GET['user_id'])) {
                                      echo '<p>Select chat and view conversation!</p>';
                                     }elseif (isset($conn, $_GET['user_id'])) {
                                      include_once "chat.php";
                                     }
                                     ?>
                                     
                                 </div>        
                              <!-- end: Conversation -->
    </div>
  </div>
  <script src="javascript/users.js"></script>
  <script src="designs/javascript/script.js"></script>

</body>
</html>
