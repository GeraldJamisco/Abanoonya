  <?php
  session_start();
  if (!isset($_SESSION['AbanoonyaUniqueId'])) {
    header("Location: index.php");
  }
include_once "header.php";
include "php/config.php";

$AbanoonyaUserDetails = mysqli_query($conn, "SELECT * FROM abanoonyausers WHERE AbanoonyaUniqueId = '{$_SESSION['AbanoonyaUniqueId']}'");
if (mysqli_num_rows($AbanoonyaUserDetails) > 0) {
  $AbanoonyaUserDetailsRow = mysqli_fetch_assoc($AbanoonyaUserDetails);
}

?>
  <body>
    <!-- start: Chat -->
    <section class="chat-section">
      <div class="chat-container">
        <!-- start: Sidebar -->
        <aside class="chat-sidebar">
          <a href="#" class="chat-sidebar-logo">
            <i class="fa fa-heart"></i>
          </a>
          <ul class="chat-sidebar-menu">
            <li class="active">
              <a href="#" data-title="Chats"><i class="fa fa-comment"></i></a>
            </li>
            <li>
              <a href="#" data-title="Contacts"><i class="fa fa-users"></i></a>
            </li>
            <li>
              <a href="#" data-title="Documents"
                ><i class="fa fa-folder"></i
              ></a>
            </li>
            <li>
              <a href="#" data-title="Settings"><i class="fa fa-cog"></i></a>
            </li>
            <li class="chat-sidebar-profile">
              <button type="button" class="chat-sidebar-profile-toggle">
                <img src="images/<?php echo $AbanoonyaUserDetailsRow['AbanoonyaImg']; ?>" alt="" title="<?php echo $AbanoonyaUserDetailsRow['AbanoonyaFname']. ' '. $AbanoonyaUserDetailsRow['AbanoonyaLname']; ?>" />
              </button>
              <ul class="chat-sidebar-profile-dropdown">
                <li>
                  <a href="#"><i class="fa fa-user-edit"></i> Profile</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-sign-out-alt"></i> Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
        <!-- end: Sidebar -->
        <!-- start: Content -->
        <div class="chat-content">
          <!-- start: Content side -->
          <div class="content-sidebar">
            <div class="content-sidebar-title">Bónyumya Nabo</div>
            <!--search chats start-->
            <div action="" class="content-sidebar-form">
              <input
                type="text"
                class="content-sidebar-input"
                placeholder="Search Chats..."
              />
              <button type="submit" class="content-sidebar-submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
            <!--search chats end-->
            <!-- users list start -->
            <div class="users">
              <ul class="users-list">
                <li class="content-message-title"><span>Recently</span></li>
                <li>
                  <a href="#" data-conversation="#conversation-1888">
                    <img
                      class="content-message-image"
                      src="images/jamisco_full_copy.jpg"
                      alt=""
                    />
                    <span class="content-message-info">
                      <span class="content-message-name">Ssegawa Anoonya</span>
                      <span class="content-message-text"
                        >Naawe onoonya nga nze? Oba</span
                      >
                    </span>
                    <span class="content-message-more">
                      <span class="content-message-unread">5</span>
                      <span class="content-message-time">12:30</span>
                    </span>
                    <!-- <div class="status-dot"><i class="fas fa-circle"></i></div> -->
                  </a>
                </li>
              </ul>
            </div>
            <!-- users list end -->
          </div>
          <!-- end: Content side -->

          <!-- start: Conversation -->
          <!-- if no chat is selected? then view this below -->
          <div class="conversation conversation-default active">
            <i class="ri-chat-3-line"></i>
            <p>Select chat and view conversation!</p>
          </div>
          <!-- if a chat is selected please view this conversation below -->
          <div class="conversation" id="conversation-1888">
            <div class="conversation-top">
              <button type="button" class="conversation-back">
                <i class="fa fa-arrow-left"></i>
              </button>
              <div class="conversation-user">
                <img
                  class="conversation-user-image"
                  src="images/jamisco_full_copy.jpg"
                  alt=""
                />
                <div>
                  <div class="conversation-user-name">Ssegawa Anoonya</div>
                  <div class="conversation-user-status online">online</div>
                </div>
              </div>
              <div class="conversation-buttons">
                <button type="button"><i class="fa fa-phone"></i></button>
                <button type="button"><i class="fa fa-video"></i></button>
                <button type="button"><i class="fa fa-info-circle"></i></button>
              </div>
            </div>
            <div class="chat-box">
              <div class="chat outgoing">
                <div class="details">
                  <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Suscipit quam saepe alias explicabo eos cum magnam quas
                    necessitatibus repellat molestias?
                  </p>
                </div>
              </div>
              <div class="chat incoming">
                <div class="details">
                  <img src="images/jamisco_full_copy.jpg" alt="userNames" />
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  </p>
                </div>
              </div>
              <div class="chat outgoing">
                <div class="details">
                  <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Suscipit quam saepe alias explicabo eos cum magnam quas
                    necessitatibus repellat molestias?
                  </p>
                </div>
              </div>
              <div class="chat incoming">
                <div class="details">
                  <img src="images/jamisco_full_copy.jpg" alt="userNames" />
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  </p>
                </div>
              </div>
              <div class="chat outgoing">
                <div class="details">
                  <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Suscipit quam saepe alias explicabo eos cum magnam quas
                    necessitatibus repellat molestias?
                  </p>
                </div>
              </div>
              <div class="chat incoming">
                <div class="details">
                  <img src="images/jamisco_full_copy.jpg" alt="userNames" />
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  </p>
                </div>
              </div>
              <div class="chat outgoing">
                <div class="details">
                  <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Suscipit quam saepe alias explicabo eos cum magnam quas
                    necessitatibus repellat molestias?
                  </p>
                </div>
              </div>
              <div class="chat incoming">
                <div class="details">
                  <img src="images/jamisco_full_copy.jpg" alt="userNames" />
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  </p>
                </div>
              </div>
              <div class="chat outgoing">
                <div class="details">
                  <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Suscipit quam saepe alias explicabo eos cum magnam quas
                    necessitatibus repellat molestias?
                  </p>
                </div>
              </div>
              <div class="chat incoming">
                <div class="details">
                  <img src="images/jamisco_full_copy.jpg" alt="userNames" />
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  </p>
                </div>
              </div>
              <div class="chat outgoing">
                <div class="details">
                  <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Suscipit quam saepe alias explicabo eos cum magnam quas
                    necessitatibus repellat molestias?
                  </p>
                </div>
              </div>
              <div class="chat incoming">
                <div class="details">
                  <img src="images/jamisco_full_copy.jpg" alt="userNames" />
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  </p>
                </div>
              </div>
              <div class="chat outgoing">
                <div class="details">
                  <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Suscipit quam saepe alias explicabo eos cum magnam quas
                    necessitatibus repellat molestias?
                  </p>
                </div>
              </div>
              <div class="chat incoming">
                <div class="details">
                  <img src="images/jamisco_full_copy.jpg" alt="userNames" />
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  </p>
                </div>
              </div>
            </div>
            <!-- type text here starting chat -->
            <form action="">
            <div class="conversation-form">
              
                        <button type="button" class="conversation-form-button"><i class="ri-emotion-line"></i></button>
                        <div class="conversation-form-group">
                            <textarea class="conversation-form-input" rows="1" placeholder="Type here..."></textarea>
                            <button type="button" class="conversation-form-record"><i class="fa fa-microphone"></i></button>
                        </div>
                        <button type="button" class="conversation-form-button conversation-form-submit"><i class="fa fa-paper-plane"></i></button>
                    </div>
                  
          <!-- end: Conversation -->
        </div></form>
        <!-- end: Content -->
      </div>
    </section>
    <!-- end: Chat -->

    <script src="JavaScript/script.js"></script>
  </body>
</html>
