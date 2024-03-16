<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }

          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <div class="conversation" id="conversation-1">
            <div class="conversation-top">
                <button type="button" class="conversation-back"><i class="fa fa-arrow-left"></i></button>
                <div class="conversation-user">
                    <img class="conversation-user-image" src="images/jamisco_full_copy.jpg" alt="">
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
            <div class="conversation-main">
                <ul class="conversation-wrapper">
                    <div class="coversation-divider"><span>Today</span></div>
                    <li class="conversation-item me">
                        <div class="conversation-item-side">
                            <img class="conversation-item-image" src="images/jamisco_full_copy.jpg" alt="">
                        </div>
                        <div class="conversation-item-content">
                            <div class="conversation-item-wrapper">
                                <div class="conversation-item-box">
                                    <div class="conversation-item-text">
                                        <p>Hello Baby Girl?</p>
                                        <div class="conversation-item-time">12:30</div>
                                    </div>
                                    <div class="conversation-item-dropdown">
                                        <button type="button" class="conversation-item-dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <ul class="conversation-item-dropdown-list">
                                            <li><a href="#"><i class="fa fa-share"></i> Forward</a></li>
                                            <li><a href="#"><i class="fa fa-trash-alt"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="conversation-item-wrapper">
                                <div class="conversation-item-box">
                                    <div class="conversation-item-text">
                                        <p>am happy to find you oin this plat form can we share whatsapp contacts?</p>
                                        <div class="conversation-item-time">12:30</div>
                                    </div>
                                    <div class="conversation-item-dropdown">
                                        <button type="button" class="conversation-item-dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <ul class="conversation-item-dropdown-list">
                                           <li><a href="#"><i class="fa fa-share"></i> Forward</a></li>
                                            <li><a href="#"><i class="fa fa-trash-alt"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="conversation-item">
                        <div class="conversation-item-side">
                            <img class="conversation-item-image" src="images/jamisco_full_copy.jpg" alt="">
                        </div>
                        <div class="conversation-item-content">
                            <div class="conversation-item-wrapper">
                                <div class="conversation-item-box">
                                    <div class="conversation-item-text">
                                        <p>why are you that fast to share contact?</p>
                                        <div class="conversation-item-time">12:30</div>
                                    </div>
                                    <div class="conversation-item-dropdown">
                                        <button type="button" class="conversation-item-dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <ul class="conversation-item-dropdown-list">
                                           <li><a href="#"><i class="fa fa-share"></i> Forward</a></li>
                                            <li><a href="#"><i class="fa fa-trash-alt"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="conversation-item-wrapper">
                                <div class="conversation-item-box">
                                    <div class="conversation-item-text">
                                        <p>Lets first talk about each other then we will go to that later</p>
                                        <div class="conversation-item-time">12:30</div>
                                    </div>
                                    <div class="conversation-item-dropdown">
                                        <button type="button" class="conversation-item-dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <ul class="conversation-item-dropdown-list">
                                           <li><a href="#"><i class="fa fa-share"></i> Forward</a></li>
                                            <li><a href="#"><i class="fa fa-trash-alt"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="conversation-item-wrapper">
                                <div class="conversation-item-box">
                                    <div class="conversation-item-text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, debitis. Iste natus est aliquam ipsum doloremque fugiat, quidem eos autem? Dolor quisquam laboriosam enim cum laborum suscipit perferendis adipisci praesentium.</p>
                                        <div class="conversation-item-time">12:30</div>
                                    </div>
                                    <div class="conversation-item-dropdown">
                                        <button type="button" class="conversation-item-dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <ul class="conversation-item-dropdown-list">
                                           <li><a href="#"><i class="fa fa-share"></i> Forward</a></li>
                                            <li><a href="#"><i class="fa fa-trash-alt"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="conversation-item me">
                        <div class="conversation-item-side">
                            <img class="conversation-item-image" src="images/jamisco_full_copy.jpg" alt="">
                        </div>
                        <div class="conversation-item-content">
                            <div class="conversation-item-wrapper">
                                <div class="conversation-item-box">
                                    <div class="conversation-item-text">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, eos, magni temporibus, placeat consectetur nobis incidunt dicta a culpa vel esse. Facilis fugiat possimus eveniet accusamus dignissimos pariatur inventore animi rem vero, eligendi obcaecati fugit quaerat? Officia ex quod eaque maxime ipsam, tempore error laboriosam laborum, magnam ipsum doloremque quas.</p>
                                        <div class="conversation-item-time">12:30</div>
                                    </div>
                                    <div class="conversation-item-dropdown">
                                        <button type="button" class="conversation-item-dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <ul class="conversation-item-dropdown-list">
                                           <li><a href="#"><i class="fa fa-share"></i> Forward</a></li>
                                            <li><a href="#"><i class="fa fa-trash-alt"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="conversation-item-wrapper">
                                <div class="conversation-item-box">
                                    <div class="conversation-item-text">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus debitis odio maiores perferendis ipsa repudiandae amet blanditiis quod. Ullam, dolorum.</p>
                                        <div class="conversation-item-time">12:30</div>
                                    </div>
                                    <div class="conversation-item-dropdown">
                                        <button type="button" class="conversation-item-dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <ul class="conversation-item-dropdown-list">
                                           <li><a href="#"><i class="fa fa-share"></i> Forward</a></li>
                                            <li><a href="#"><i class="fa fa-trash-alt"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="conversation-item-wrapper">
                                <div class="conversation-item-box">
                                    <div class="conversation-item-text">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium blanditiis ea, voluptatum, eveniet at harum minima maxime enim aut non, iure expedita excepturi tempore nostrum quasi natus voluptas dolore ducimus!</p>
                                        <div class="conversation-item-time">12:30</div>
                                    </div>
                                    <div class="conversation-item-dropdown">
                                        <button type="button" class="conversation-item-dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <ul class="conversation-item-dropdown-list">
                                           <li><a href="#"><i class="fa fa-share"></i> Forward</a></li>
                                            <li><a href="#"><i class="fa fa-trash-alt"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- type text here starting chat -->
            <div class="conversation-form">
                <button type="button" class="conversation-form-button"><i class="ri-emotion-line"></i></button>
                <div class="conversation-form-group">
                    <textarea class="conversation-form-input" rows="1" placeholder="Type here..."></textarea>
                    <button type="button" class="conversation-form-record"><i class="fa fa-microphone"></i></button>
                </div>
                <button type="button" class="conversation-form-button conversation-form-submit"><i class="fa fa-send-plane"></i></button>
            </div>
        </div>

  <script src="javascript/chat.js"></script>

</body>
</html>