<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        // how to read mysql date to php date start
        $mysqldate = strtotime($row2['message_time']);
        $phpdate = date('h:m', $mysqldate);
                // how to read mysql date to php date end

        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

        // $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
        //             <div class="content">
        //             <img src="php/images/'. $row['img'] .'" alt="">
        //             <div class="details">
        //                 <span>'. $row['fname']. " " . $row['lname'] .'</span>
        //                 <p>'. $you . $msg .'</p>
        //             </div>
        //             </div>
        //             <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                // </a>';|'. $row['unique_id'] .'



                $output .= '<li style="list-style-type: none;
                padding-top: 10px;
                margin: 1px;
               ">
                <a href="chat.php?user_id='. $row['unique_id'] .'" data-conversation="#conversation-1" style=" text-decoration: none;">
                    <img class="content-message-image" src="php/images/'. $row['img'] .'" alt="">
                    
                    <span class="content-message-info">
                        <span class="content-message-name">'. $row['fname']. " " . $row['lname'] .'</span>
                        <span class="content-message-text">'. $you . $msg .'</span>
                    </span>
                    <span class="content-message-more">
                        <span class="content-message-unread">5</span>
                        <span class="content-message-time">'. $phpdate .'</span>
                    </span>
                </a>
            </li>
            </div>
            </div>
            
            
            
            
            ';
            
    }
?>



