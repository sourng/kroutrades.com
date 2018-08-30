<div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="<?php echo base_url(); ?>public/assets/images/phone.png" />00-62-658-658</a>
                <a href="#"><img alt="email" src="<?php echo base_url(); ?>public/assets/images/email.png" />Contact us today!</a>
            </div>
            <div class="currency ">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">USD</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Dollar</a></li>
                        <li><a href="#">Euro</a></li>
                      </ul>
                </div>
            </div>
            <div class="language ">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                      <img alt="email" src="<?php echo base_url(); ?>public/assets/images/fr.jpg" />French
                      
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><img alt="email" src="<?php echo base_url(); ?>public/assets/images/en.jpg" />English</a></li>
                        <li><a href="#"><img alt="email" src="<?php echo base_url(); ?>public/assets/images/fr.jpg" />French</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="support-link">
                <a href="#">Services</a>
                <a href="#">Support</a>
            </div>

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                       
                    <?php
                        if (isset($this->session->userdata['logged_in'])) {
                        $username = ($this->session->userdata['logged_in']['username']);
                        $email = ($this->session->userdata['logged_in']['email']);
                       

                        echo '<li><a href="#">'.$username.'</a></li>';                        
                        ?>
                        <li><a href="#">Compare</a></li>
                        <li><a href="#">Wishlists</a></li>
                        <?php
                        echo '<li><a href="'.site_url().'front/logout">Logout</a></li>';
                        } else {
                            //header("location: login");
                            ?>
                            <li><a href="<?php echo site_url(); ?>front/login">Login</a></li>
                            <?php
                        }
                        ?> 
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
