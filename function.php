<?php 
 class cuad{
     private $jubayer ;

     public function __construct()
     {
         $affi_host = 'localhost';
         $affi_user = 'root';
         $affi_pass = "";
         $affi_data = 'aafi';

         $this->jubayer = mysqli_connect($affi_host,$affi_user,$affi_pass,$affi_data) ;

         if (!$this->jubayer){
         die ("Database conection Eror !!") ;
         }
        
     }

     public function add_db($data){
         $std_name =$data['sd_name'] ;
         $std_num =$data['sd_number'] ;
         $std_img_name=$_FILES['sd_img'] ['name'];
         $std_img_tmp=$_FILES['sd_img'] ['tmp_name'] ;
         
         $query= "INSERT INTO stud(s_name,s_number,s_img) VALUE ('$std_name',$std_num,'$std_img_name')";
         
         if(mysqli_query($this->jubayer, $query)){
             move_uploaded_file( $std_img_tmp, 'upload/' .$std_img_name) ;
             return "Information Added Sucsefully" ;
         }

     }
     public function display(){
         $query ="SELECT * FROM stud" ;
         if (mysqli_query($this->jubayer, $query)){
             $dis = mysqli_query($this->jubayer, $query) ;
             return $dis ;
         }

         
     }

 }


?>