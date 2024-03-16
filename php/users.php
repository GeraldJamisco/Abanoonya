<div class="content-messages">
                        <ul class="content-messages-list">
                        <li class="content-message-title"><span>Your messages</span></li>

                          <?php
                              include_once "config.php";
                              session_start();

                                $outgoing_id = $_SESSION['unique_id'];
                                $sql = "SELECT * FROM USERS WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC";
                                $query = mysqli_query($conn, $sql);
                                $output = "";

                                if(mysqli_num_rows($query) == 0){
                                $output .= "No users are available to chat";
                                }elseif (mysqli_num_rows($query) > 0) {
                                  include_once "data.php";
                                }

                                echo $output;
                          ?>
                           
                            
                          
                        </ul>
                
                    </div>
                    </div>

                    
                    
<?php
    // 
    // $outgoing_id = $_SESSION['unique_id'];
    // $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC";
    // $query = mysqli_query($conn, $sql);
    // $output = "";
    // if(mysqli_num_rows($query) == 0){
    //     $output .= "No users are available to chat";
    // }elseif(mysqli_num_rows($query) > 0){
    //     include_once "data.php";
    // }
    // echo $output;
?>