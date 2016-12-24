<?php
include 'header.php';
require '../../database.php';

date_default_timezone_set('Asia/Kolkata');
$date= date('Y-m-d');

if (isset($_POST['submit1'])) {
  $rand = rand(0,9999);
  $title = $_POST['title'];
  $file_name = $_FILES['upload_file']['name'];
  $file_temp = $_FILES['upload_file']['tmp_name'];
  $new_name = $rand.$file_name;
  $up_dir = '../../Data/tnp/';

  if ( !is_dir($up_dir) &&  !mkdir($up_dir,0777,TRUE)) {
     die("Error in creteing folder for files ");
   }
$new_name = $up_dir.$new_name;
  if(move_uploaded_file($file_temp, $new_name)){
    $que = 'insert into placeRecord (title,path,insDate) values ("'.$title.'","'.$new_name.'","'.$date.'")';
    if($conn->query($que)){
      echo "<script>alert('record inserted !')</script>";
    }
  }else{
      /* error */
  }
  
    

}

if(isset($_POST['edit1'])){
  $id = $_POST['edPrid'];
  $title = $_POST['edTitle'];
  if(isset($_POST['edDis']))
  $dis = $_POST['edDis'];
  else
    $dis = '0';

  $que = 'update placeRecord set title = "'.$title.'",display="'.$dis.'" where prID="'.$id.'"';
    if($conn->query($que)){
    echo "<script>alert('successfully updated ');</script>";
  }

}


if(isset($_POST['Delbutton'])){
  $id = $_POST['pr_del_id'];
  $que = 'delete from placeRecord where prID="'.$id.'"';
  if($conn->query($que)){
   echo "<script>alert('successfully Deleted ');</script>"; 
  }
}


if(isset($_POST['toEdit']) && !empty($_POST['prID'])){
  $que= 'select * from placeRecord where prID = "'.$_POST['prID'].'"';
  $res = $conn->query($que);
  $row = $res->fetch_assoc();
?>


<div id="editModal" class="modal">
    <div class="modal-content">
              <form name="staff_edit" method="post" action="#" enctype="multipart/form-data" >
              <div class="row">
                <div class="input-field col l6 m6 s12">
                  <input type="hidden" name="edPrid" value="<?php echo $_POST['prID']; ?>"  required > 
                  <input type="text" name="edTitle" id="ed_title" class="validate" value="<?php echo $row['title']; ?>"  required>
                  <label for="ed_title">Title:</label>
                </div>
                <div class="input-field col l6 m6 s12">
                   <input type="checkbox" id="chk1" value="1" name="edDis">
                  <label for="chk1">Display</label>
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
}

?>


<div class="container">
  <div class="row ">
    <div class="col s12">
      <ul class="tabs" >
        <li class="tab col s3 "><a class="active black-text " href="#ins">insert</a></li>
        <li class="tab col s3"><a class="black-text" href="#edit">Edit/delete</a></li>
      </ul>
    </div>

    <div id="ins">
        <form name="place" method="post" action="#" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col l6 m6 s12">
            <input type="text" name="title" id="title" class="validate" required> 
          <label for="title">Title</label>
          </div>

          <div class="file-field input-field col l6 m6 s12">
            <div class="btn">
              <span>File</span>
              <input type="file" name="upload_file" accept=".PDF"  required>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

        </div>

        <div class="row">
      <button class="btn waves-effect waves-light" type="submit" name="submit1" >Submit
        <i class="material-icons right">send</i>
      </button>
          </div>
      </form>
    </div>
    <!-- *************************** -->
    <div id="edit">
        <?php
        $que = 'select * from placeRecord';
        $result = $conn->query($que);
        $flag = 0;
        while ($ss = $result->fetch_assoc()) {
         $flag++;
        }
        if($flag>0){
          echo '<table class="responsive-table bordered" >
        <thead>
          <tr>
            <th>Title</th>
            <th>Date of insert</th>
            <th>edit</th>
            <th>remove</th>
          </tr>
        </thead>
        <tbody>';
        $result = $conn->query($que);
                while ($row = $result->fetch_assoc()) {
                echo '<tr><td>';
                echo $row['title'];
                echo '</td><td>';
                echo $row['insDate'];
                echo '</td><td>';


                echo '  <form action="#"  method="post">
                          <input type="hidden" name="prID" value="'.$row['prID'].'">';
                  // echo ' <input type="hidden" name="display" value="'.$row['display'].'">';
                  echo '<button name="toEdit" value="1" type="submit"  class="btn-floating waves-effect waves-light grey">
                  <i class="material-icons">mode_edit</i></button></form>';

                echo '</td><td>';

                echo '  <form action="#" onsubmit="return confirmDel()" method="post">
                          <input type="hidden" name="pr_del_id" value="'.$row['prID'].'">';
                        
                  echo '<button name="Delbutton" value="1" type="submit"  class="btn-floating waves-effect waves-light blue-grey">
                  <i class="material-icons">delete_forever</i></button></form>';
              
                echo '</td></tr>';
              }

            echo "</tbody></table>";  

        }else{
          echo"<h5>No record exists!</h5>";
        }

        ?>      
    </div>

</div>
</div>

<?php include 'footer.php';  ?>