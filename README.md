facebook_with_codeigniter
=========================
codeigniter facebook library

1. Copy and paste facebook directory from library folder.
2. Copy and paste facebook.php page from config folder.
3. Set AppId and Secret in facebook.php page from config folder.
4. Create controller called as "facebook_login.php".

5. Load library : 

		 //CONSTRUCTOR 
                  public function __construct(){
              		parent::__construct();
              	  	$this->load->library('facebook/fb','fb');
                  }

6.Create Links And Get Profile Data:

		// INDEX
                public function index(){
                  	$data['login_url'] = $this->fb->createLoginLink();
  		        $data['user_profile'] = $this->fb->initialize();
                }
                
                
7.Create view called as facebook_login.php

8.Copy and paste below code. 

                  
                // CREATE LINK
                <a href="#" onclick="popup('<?php echo $login_url; ?>')" title="Login with Facebook"><img src="<?=IMAGES?>log_with_fb.png" /></a>
                <script language="javascript">              
                	function popup(url) {
                	newwindow=window.open(url,'name','height=200,width=150');
                	if (window.focus) {newwindow.focus()}
                	return false;
                	}
              			
                	window.onload = function(){
                	window.opener.location.reload(true);
                	window.close();
                	}();
                </script>

                // GET PROFILE DATA
                $user = $this->facebook->getUser();
                if($user <> "")
						    {
						        echo "<pre>";
						        print_r($user_profile);
						        echo "</pre>";
						    }

