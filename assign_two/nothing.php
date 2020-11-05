<html>
<head>
<title> Welcom To my Browse</title>
</head>
<body>
    <h1>User Class </h1>
    <form action = "nothing.php" method = "get" > 
            <input type="text" placeholder="Name" name="name" ><br>
            <input type="text" placeholder="Username" name="username" ><br>
            <input type="text" placeholder="Emai" name="email" ><br>
            <input type="text" placeholder="AddFriend" name="Aname" ><br>
            <input type="text" placeholder="PostStatus" name="status" ><br>
                 <input type="submit" name="try">
        </form> 

        <h3>

<?php
    class UserClass{
        public $name; 
        public $username;
        public $Email;
        public $Aname;
        public $status;
    
        function set_name($sname)
        {
            $this->name = $sname;
        }
        function set_username($susername){
            $this->username = $susername;
        }
        function set_email($semail){
            $this->Email = $semail;
        }

        function AddFriend($Aname)
        {
            $this->Aname=$sAname;   
        }

        function PostaStatus($status){
            $this->status = $sstatus;
        }

        function get_name()
        {
            return $this ->name;
            return $this ->username;
            return $this ->Email;
            return $this ->Aname;
            return $this ->status;
        }
        

    }
    
    if (isset($_GET["try"]))
    {
        $name = new UserClass($_GET["name"]);
        $username = new UserClass($_GET["username"]);
        $Email = new UserClass($_GET["email"]);
        $Aname = new UserClass($_GET["Aname"]);
        $sstatus = new UserClass($_GET["status"]);
    
        $name->set_name($_GET["name"]);
        $username->set_name($_GET["username"]);
        $Email->set_name($_GET["email"]);
        $Aname ->set_name($_GET["Aname"]);
        $sstatus ->set_name($_GET["status"]);
        
        echo "Your Name is: ".$_GET["name"] ;
        echo "<br>";
        echo "Your Username is: ".$_GET["username"];
        echo "<br>"; 
        echo "Your Email is: ".$_GET["email"];
        echo "<br>"; 
        echo "Your Added Friend is: ".$_GET["Aname"];
        echo "<br>"; 
        echo "Your Added status is: ".$_GET["status"];        
    }
    
    
?>


</html>
