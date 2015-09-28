<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/animate-custom.css" />
        <!-- MAIN POSTS -->
        <div class="main-posts">
            <div class="container">
                <div class="row">
                    <section>				
                        <div id="container_demo" >
                            <a class="hiddenanchor" id="toregister"></a>
                            <a class="hiddenanchor" id="tologin"></a>
                            <div id="wrapper">
                                <div id="login" class="animate form">
                                    <form id="frmlogin" name="frmlogin" action="login/user_Login_Process" method="post" autocomplete="on"> 
                                        <h1>Log in</h1>
                                        <?php
                                            $display = 'display:none';
                                            $message = '';
                                            
                                            if(isset($error_message) && !empty($error_message)){
                                                $message = $error_message;
                                                $display = 'display:block';    
                                            }
                                        ?>
                                        <p style="<?php echo $display?>"> 
                                            <label for="lbldiplay_message" class="diplay_message" id="diplay_message" name="diplay_message">
                                                <?php echo $message;?>
                                            </label>
                                            
                                        </p>
                                        <p> 
                                            <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                            <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                        </p>
                                        <p> 
                                            <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                        </p>
                                        
                                        <p class="keeplogin"> 
                                            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                                            <label for="loginkeeping">Keep me logged in</label>
                                        </p>
                                        <p class="login button"> 
                                            <input type="submit" value="Login" /> 
                                        </p>
                                        <p class="change_link">Not a member yet ?
                                           <a href="#toregister" class="to_register">Lost Password</a>
                                           <a href="#toregister" class="to_register">Sign Up</a>
                                        </p>
                                    </form>
                                </div>

                                <div id="register" class="animate form">
                                    <form  id="frmregister" name="frmregister" action="login/new_User_Registration#toregister" method="post" autocomplete="on"> 
                                        <h1> Sign up </h1>
                                        <?php
                                            $display = 'display:none';
                                            $message = '';
                                            
                                            if(isset($error_message) && !empty($error_message)) {
                                                $message = $error_message;
                                                $display = 'display:block';
                                            }
                                            
                                            if(isset($success_message) && !empty($success_message)) {
                                                $message = $success_message;
                                                $display = 'display:block;color:blue';    
                                            }
                                        ?>
                                        <p style="<?php echo $display?>"> 
                                            <label for="lbldiplay_message" class="diplay_message" id="diplay_message" name="diplay_message">
                                                <?php echo $message;?>
                                            </label>
                                            
                                        </p>
                                        <p> 
                                            <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                            <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                        </p>
                                        <p> 
                                            <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                            <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                        </p>
                                        <p> 
                                            <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                            <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                        </p>
                                        <p> 
                                            <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                            <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                        </p>
                                        <p> 
                                            <label for="role">User Type</label>
                                            <select class="youtype" id="user_role" name="user_role" placeholder="Select User Type">
                                                <option value="">Select User Type</option>
                                                <option value="moderator">Moderator</option>
                                                <option value="creator">Creator</option>
                                                <option value="subscriber">Subscriber</option>
                                            </select>
                                        </p>
                                        <p class="signin button"> 
                                            <span class="terms">By signing up,you agree to our&nbsp;<a href="#">Terms Of Use</a></span>
                                            <input type="submit" value="Sign up"/> 
                                        </p>
                                        <p class="change_link">  
                                            Already a member ?
                                            <a href="#tologin" class="to_register"> Go and log in </a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>  
                    </section><!--End Login Section-->
                </div>
            </div>
        </div>
        
        