 
<?php
include 'header.php';

require '../../database.php';
if (isset($_POST['post1'])) {
  $name = $_POST['Name'];
  $des = $_POST['Desi'];
  $num = $_POST['Num'];
  $email = $_POST['Email'];

  $que = 'insert into ccc_staff (name ,designation,officeNo,email) values("'.$name.'","'.$des.'","'.$num.'","'.$email.'")';
  if($conn->query($que)){
    echo "<script> alert('successfully inserted'); </script>";
      //echo "success";
  }
}


if(isset($_POST['Delbutton'])){
  $id = $_POST['stid'];
  $que = 'delete from ccc_staff where stID="'.$id.'"';
  if($conn->query($que)){
   echo "<script>alert('successfully Deleted ');</script>"; 
  }
}


if(isset($_POST['edit1'])){
  $id = $_POST['edStid'];
  $name = $_POST['edName'];
  $des = $_POST['edDesi'];
  $num = $_POST['edNum'];
  $email = $_POST['edEmail'];

$que = 'update ccc_staff set name = "'.$name.'",designation ="'.$des. '",officeNo="'.$num. '",email="'.$email.'" where stID="'.$id.'"';
  if($conn->query($que)){
    echo "<script>alert('successfully updated ');</script>";
  } 
}



$ED_name =  null;
  $ED_des = null;
  $ED_num = null;
  $ED_mail = null;


?>

<!-- <button id="toast" onmouseover="clickToast();" onclick="myToast('success',3000)">jj</button>

<script type="text/javascript">

function clickToast(){
   document.getElementById("toast").click();
}

  function myToast(msg,time) {
    Materialize.toast(msg, time, 'rounded');
  }

</script>
 -->




<?php




if(!empty($_POST['edSTID'])  && isset($_POST['toEdit'])){
  $que = 'select * from ccc_staff where stID = "' .$_POST['edSTID'].'"';
  $result = $conn->query($que);
  $row = $result->fetch_assoc();
  $ED_name =  $row['name'];
  $ED_des = $row['designation'];
  $ED_num = $row['officeNo'];
  $ED_mail = $row['email'];


?>




<div id="editModal" class="modal">
    <div class="modal-content">
              <form name="staff_edit" method="post" action="#" enctype="multipart/form-data" >
              <div class="row">
                <div class="input-field col l6 m6 s12">
                  <input type="hidden" name="edStid" value="<?php echo $_POST['edSTID']; ?>"  required > 
                  <input type="text" name="edName" id="ed_name" class="validate" value="<?php echo $ED_name; ?>"  required>
                  <label for="ed_name">Name:</label>
                </div>
                <div class="input-field col l6 m6 s12">
                  <input type="text" name="edDesi" id="ed_desi" class="validate" value="<?php echo $ED_des; ?>" required>
                  <label for="ed_desi">Designation:</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col l6 m6 s12">
                  <input type="number" name="edNum" id="ed_num" class="validate" value="<?php echo $ED_num; ?>" required>
                  <label for="ed_num">Office Number:</label>
                </div>
                <div class="input-field col l6 m6 s12">
                  <input type="email" name="edEmail" id="ed_email" class="validate" value="<?php echo $ED_mail; ?>" required>
                  <label for="ed_email">Email:</label>
                </div>
              </div>

              <div class="row">
                 <button class="btn waves-effect waves-light" type="submit" name="edit1"  value="1" >Submit
                  
                </button>
              </div>

        </form>
    </div>
    <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">close</a>

    </div>
</div>


<?php
}      // end of if 

?>


<div class="container">
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active black-text" href="#edit">Edit/Remove</a></li>
        <li class="tab col s3"><a class="black-text" href="#ins">Insert</a></li>
      </ul>
    </div>

    <div id="edit" >

      <?php
      $que= 'select * from ccc_staff';
      $result = $conn->query($que);
      $flag = 0;
      while ($ss = $result->fetch_assoc()) {
        $flag++;
      }
      if($flag>0){
        
        echo '<table class="responsive-table bordered" >
        <thead>
          <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Office No.</th>
            <th>Email Address</th>
            <th>edit</th>
            <th>remove</th>
          </tr>
        </thead>
        <tbody>';
        $result = $conn->query($que);
          while ($row = $result->fetch_assoc()) {
                echo '<tr><td>';
                echo $row['name'];
                echo '</td><td>';
                echo $row['designation'];
                echo '</td><td>';
                echo $row['officeNo'];
                echo '</td><td>';
                echo $row['email'];
                echo '</td><td>';



                echo '  <form action="#"  method="post">
                          <input type="hidden" name="edSTID" value="'.$row['stID'].'">';
                        
                  echo '<button name="toEdit" value="1" type="submit"  class="btn-floating waves-effect waves-light grey">
                  <i class="material-icons">mode_edit</i></button></form>';

                echo '</td><td>';

                echo '  <form action="#" onsubmit="return confirmDel()" method="post">
                          <input type="hidden" name="stid" value="'.$row['stID'].'">';
                        
                  echo '<button name="Delbutton" value="1" type="submit"  class="btn-floating waves-effect waves-light blue-grey">
                  <i class="material-icons">delete_forever</i></button></form>';
              
                echo '</td></tr>';
              }

            echo "</tbody></table>";  



      }else{
        echo "<h4>Table is empty</h4>";
      }

      ?>

    </div>



    <div class="" id="ins">

        <form name="staff_ins" method="post" action="#" enctype="multipart/form-data" >
              <div class="row">
                <div class="input-field col l6 m6 s12">
                  <input type="text" name="Name" id="_name" class="validate" required>
                  <label for="_name">Name:</label>
                </div>
                <div class="input-field col l6 m6 s12">
                  <input type="text" name="Desi" id="_desi" class="validate" required>
                  <label for="_desi">Designation:</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col l6 m6 s12">
                  <input type="number" name="Num" id="_num" class="validate" required>
                  <label for="_num">Office Number:</label>
                </div>
                <div class="input-field col l6 m6 s12">
                  <input type="email" name="Email" id="_email" class="validate" required="">
                  <label for="_email">Email:</label>
                </div>
              </div>

              <div class="row">
                 <button class="btn waves-effect waves-light" type="submit" name="post1" >Submit
                  <i class="material-icons right">send</i>
                </button>
              </div>

        </form>
    </div>




  </div>
</div>


<?php  include 'footer.php';  ?>
