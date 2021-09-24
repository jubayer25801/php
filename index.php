<?php
include ("function.php") ;
$crud = new cuad() ;

if (isset($_POST['sd_btn'])){
 $crud_msg= $crud->add_db($_POST) ;
}
$students=$crud->display();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>practice</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
<style>
  
  .content{
    background: #778BEB;
    border-radius: 6px;
  }
  .content h3{
  
  }
  .form-control-file{
    border: 1px solid #ddd;
    border-radius: 5px;
    background: #fff;
  }
  .table{
    margin-top: 40px;
  }
  .w{
  width: 180px;;
}
  @media (max-width:740px) {
        .content {
            width: 90% !important;
           
        }
        .w{
  width: 100px;;
}
    
    }

</style>
<body>

<section class="main-section mt-4">
    <div class="container">
        <div class="row">


    <form action="" class="text-white w-75 m-auto content py-3" method="POST" enctype="multipart/form-data">
     <h3 class="text-center">Aafi Database</h3>

     <?php if(isset($crud_msg)){echo $crud_msg ;} ?>
 
<div class="form-group py-1">
  <label for="gg">Name</label>
  <input type="text" class="form-control form-control-sm" name="sd_name" id="gg"  placeholder="">
</div>
<div class="form-group py-1">
  <label for="ggg">Number:</label>
  <input type="number" class="form-control form-control-sm" name="sd_number" id="ggg"  placeholder="">
</div>

<div class="mb-3">
  <label for="pic" class="form-label">Photo :</label>
  <input type="file" class="form-control form-control-sm" name="sd_img" id="pic" placeholder="" aria-describedby="fileHelpId">
</div>

  <button type="submit" class="btn btn-sm btn-block btn-dark mt-2" name="sd_btn">Primary</button>
  
 




    </form>


        </div>
    </div>
</section>


<section class="table mt-5">
  <div class="container">
    <div class="row">

 <table class="table">
   <thead>
     <tr>
     <th scope="col">Id</th>
       <th scope="col">Name</th>
       <th scope="col">Number</th>
       <th scope="col">Image</th>
       <th scope="col">Action</th>
     </tr>
   </thead>
   <tbody>
     <?php while($student=mysqli_fetch_assoc($students)){ ?>
     <tr>
       <th scope="row"><?php echo $student['id'] ?></th>
       <td><?php echo $student['s_name'] ?></td>
       <td><?php echo $student['s_number'] ?></td>
       <td class="kl"><img class="w" src="upload/<?php echo $student['s_img'] ?>" ></td>
       <td>@mdo</td>
     </tr>
     <?php } ?>
     
   </tbody>
 </table>
 

    </div>
  </div>
</section>


</body>
</html>