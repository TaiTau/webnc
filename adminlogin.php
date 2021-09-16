<?php
    include 'session.php';
    Session::checkLogin();
    include 'database.php';
    include 'session.php';
    

?>

<?php
    class adminLogin
    {
        private $db;
        private $fm;

        public function __construct()
        {
            
        
            $this->db = new Database();
        }
        public function login_admin(){

        }
    }
?>