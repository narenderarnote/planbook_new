<?php
    //406 request mean field prob
    //200 ok report
    //406 get reqst
    //204 default no json
    //408 already exist
	/* 
		This is an example class script proceeding secured API
		To use this class you should keep same as query string and function name
		Ex: If the query string value rquest=delete_user Access modifiers doesn't matter but function should be
		     function delete_user(){
				 You code goes here
			 }
		Class will execute the function dynamically;
		
		usage :
		
		    $object->response(output_data, status_code);
			$object->_request	- to get santinized input 	
			
			output_data : JSON (I am using)
			status_code : Send status message for headers
			
		Add This extension for localhost checking :
			Chrome Extension : Advanced REST client Application
			URL : https://chrome.google.com/webstore/detail/hgmloofddffdnphfgcellkdfbfbjeloo
		
		I used the below table for demo purpose.

		CREATE TABLE IF NOT EXISTS `users` (
		  `user_id` int(11) NOT NULL AUTO_INCREMENT,
		  `user_fullname` varchar(25) NOT NULL,
		  `user_email` varchar(50) NOT NULL,
		  `user_password` varchar(50) NOT NULL,
		  `user_status` tinyint(1) NOT NULL DEFAULT '0',
		  PRIMARY KEY (`user_id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
 	*/ 
	
	require_once("Rest.inc.php");
	
	class API extends REST {
	
		public $data = "";
		
		const DB_SERVER = "localhost";
		const DB_USER = "c6tallentz";
		const DB_PASSWORD = "tallentz123*";
		const DB = "c6tallentz";
		
		private $db = NULL;
	
		public function __construct(){
			parent::__construct();				// Init parent contructor
			$this->dbConnect();					// Initiate Database connection
		}
		
		/*
		 *  Database connection 
		*/
		private function dbConnect(){
			$this->db = mysql_connect(self::DB_SERVER,self::DB_USER,self::DB_PASSWORD);
			if($this->db)
				mysql_select_db(self::DB,$this->db);
		}
		
		/*
		 * Public method for access api.
		 * This method dynmically call the method based on the query string
		 *
		 */
	 	public function processApi(){
			$func = strtolower(trim(str_replace("/","",$_REQUEST['rquest'])));
			if((int)method_exists($this,$func) > 0)
				$this->$func();
			else
				$this->response('',404);				// If the method not exist with in this class, response would be "Page not found".
		} 
		
		/* 
		 *	Simple login API
		 *  Login must be POST method
		 *  email : <USER EMAIL>
		 *  pwd : <USER PASSWORD>
		 */
		
		private function totalliveshows(){
			// Cross validation if the request method is POST else it will return "Not Acceptable" status
			 if($this->get_request_method() != "GET"){
				$this->response('',406);
			}
			
				 $username = $_REQUEST['username'];
			
			
				 $sql = mysql_query("SELECT * FROM video_post_master WHERE VStatus='1111' ORDER BY ID desc limit 1",$this->db);
					
						$result = array("", "BMW");
						;
						
						$yt=array
  (
   array("youtube"=>"VqjDvRsTXvA","title"=>"any Text","Desc"=>"Any desc"),
   array("youtube"=>"EP30gwf7_7I","title"=>"any Text","Desc"=>"Any desc")  );
						// If success everythig is good send header as "OK" and user details
						$this->response($this->json($yt), 200);
					
                   $error = array('status' => "Failed", "msg" => "Invalid Email address or Password");
			$this->response($this->json($error), 400);
					//$this->response('', 204);	// If no records "No Content" status
				
			
			// If invalid inputs "Bad Request" status message and reason
			$error = array('status' => "Failed", "msg" => "Invalid Email address or Password");
			$this->response($this->json($error), 400);
		}
		
		private function firstpage(){
			// Cross validation if the request method is POST else it will return "Not Acceptable" status
			 if($this->get_request_method() != "GET"){
				$this->response('',406);
			}
			
				 $username = $_REQUEST['username'];
			
			
				if($username){
//				 $sql = mysql_query("SELECT * FROM video_post_master WHERE VStatus='1111' ORDER BY ID desc limit 6");
				 $sql = mysql_query("SELECT * FROM video_post_master WHERE VStatus='1111' ORDER BY ID desc limit 1",$this->db);
					if(mysql_num_rows($sql) > 0){
						$result = mysql_fetch_array($sql,MYSQL_ASSOC);
						// If success everythig is good send header as "OK" and user details
						$this->response($this->json($result), 200);
					}
                   $error = array('status' => "Failed", "msg" => "Invalid Email address or Password");
			$this->response($this->json($error), 400);
					//$this->response('', 204);	// If no records "No Content" status
				}
			
			
			// If invalid inputs "Bad Request" status message and reason
			$error = array('status' => "Failed", "msg" => "Invalid Email address or Password");
			$this->response($this->json($error), 400);
		}
//dummy testing
		private function VideozDetail(){
			// Cross validation if the request method is POST else it will return "Not Acceptable" status
			 if($this->get_request_method() != "GET"){
				$this->response('',406);
			}
			
				$id = $_REQUEST['id'];
				
			if(!empty($id)){
					$sql = mysql_query("select * from video_post_master where ID ='$id'", $this->db);
					if(mysql_num_rows($sql) > 0){
						$result = mysql_fetch_array($sql,MYSQL_ASSOC);
						// If success everythig is good send header as "OK" and user details
						$this->response($this->json($result), 200);
					}
                   $error = array('status' => "Failed", "msg" => "Invalid ID");
			$this->response($this->json($error), 400);
					//$this->response('', 204);	// If no records "No Content" status
				
			}
			
			// If invalid inputs "Bad Request" status message and reason
			$error = array('status' => "Failed", "msg" => "Invalid Id");
			$this->response($this->json($error), 400);
		}
//

		private function json($data){
			if(is_array($data)){
				return json_encode($data);
			}
		}
	}
	
	// Initiiate Library
	
	$api = new API;
	$api->processApi();
?>