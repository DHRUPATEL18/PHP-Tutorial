<?php 
    class DB {
        private $name, $age, $pay;
        protected $cn;
        
        public function __construct(){
            $this->cn = mysqli_connect("localhost", "root", "", "empdb");
        }

        public function Insert($x, $y, $z){
            $this->name = $x;
            $this->age = $y;
            $this->pay = $z;

            
            $sql_qr = "INSERT INTO `emp_info`(`ID`, `NAME`, `AGE`, `PAYROLL`) VALUES (null, ?, ?, ?)";

            $stmt = mysqli_prepare($this->cn , $sql_qr);
            mysqli_stmt_bind_param($stmt, "sid", $this->name, $this->age, $this->pay);

            if(mysqli_stmt_execute($stmt)){
                echo $this->name."<br>" , $this->age."<br>", $this->pay."<br>";
                echo "Data Inserted Into empdb Database";
            }else{
                echo "Error occur while inserting!!";
            } 
        }

        public function Update($x, $y, $z){
            $this->name = $x;
            $this->age = $y;
            $this->pay = $z;

            
            $sql_qr = "UPDATE `emp_info` SET `AGE`=?, `PAYROLL`=? WHERE `NAME`=?";

            $stmt = mysqli_prepare($this->cn, $sql_qr);
            mysqli_stmt_bind_param($stmt, "ids", $this->age, $this->pay, $this->name);
            mysqli_stmt_execute($stmt);
            
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo $this->name."<br>" , $this->age."<br>", $this->pay."<br>";
                echo "Data Updated Into empdb Database";
            } else {
                echo "No record found with that name.";
            }
        }
    }

    
    $obj = new DB();

    if(isset($_REQUEST['insert'])){
        $nm = $_REQUEST['name'];
        $ag = $_REQUEST['age'];
        $py = $_REQUEST['payroll'];

        echo $obj->Insert($nm, $ag, $py);
    }
    elseif(isset($_REQUEST['update'])){
        $nm = $_REQUEST['name'];
        $ag = $_REQUEST['age'];
        $py = $_REQUEST['payroll'];

        echo $obj->Update($nm, $ag, $py);
    }
?>