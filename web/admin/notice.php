<?php
session_start();
include 'header.php';
require '../../database.php';
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");
if(isset($_POST['post'])){
$rand = rand(0,9999);
$title = $_POST['title'];
$desc = $_POST['desc'];
$Deadline = $_POST['last_date'];
//echo "dead".$Deadline."<br>";
//echo "start".$date."<br>";

if( isset($_POST['priority']))
$prio = $_POST['priority'];
else
$prio = '0';


$notice_event = $_POST['notice_event'];
if($_POST['link_se'] == '1'){
$file_name = $_FILES['upload_file']['name'];
$file_temp = $_FILES['upload_file']['tmp_name'];
$path = $rand.$file_name;
  $up_dir = '../../Data/Notice/';
  if ( !is_dir($up_dir) &&  !mkdir($up_dir,0777,TRUE)) {
     die("Error in creteing folder for files ");
   }

move_uploaded_file($file_temp,'../../Data/Notice/'.$path);
$link = 'Data/Notice/'.$path;
}
else
$link = $_POST['url'];
$query = 'insert into notice_events (notice_event,title,description,link,start_date,end_date,important,display) values ("'.$notice_event.'","'.$title.'","'.$desc.'","'.$link.'","'.$date.'","'.$Deadline.'","'.$prio.'",1)';
if(mysqli_query($conn,$query)){
  echo '<script>alert("Notice posted Successfully!");</script>';
}
else{
echo '<script>alert("Sorry try again after some time!");</script>';}

}
?>



<div class="container" style="margin-top:2%;">
  <form name="notice_event" method="post" action="notice.php" enctype="multipart/form-data">
      <div class="row">
      <input  type="radio" class="with-gap" id="r1" name="notice_event" value="1" required />
      <label for="r1">Notice</label>

      <input  type="radio" class="with-gap" id="r2" name="notice_event" value="0" required />
      <label for="r2">Event</label>

      <input  type="radio" class="with-gap" id="r3" name="notice_event" value="2" required />
      <label for="r3">Tender</label>

      <input  type="radio" onclick="window.location.assign('edit_notice.php')" class="with-gap" id="r4" name="notice_event" value="5" required />
      <label for="r4">Edit Record</label>
      </div>

      
        <div class="row  ">
          <div class=" input-field col l6 m6 s12">
          <input  id="title" name="title" type="text" class="validate" required>
          <label for="title">Title</label>
       </div>
        </div>

         <div class="row">
        <div class="input-field col l8 m8 s12 ">
          <textarea id="textarea1" class="materialize-textarea" name="desc" required ></textarea>
          <label for="textarea1">Description</label>
        </div>
 
      </div>
  

       <div class="row">
      <input  type="radio" onclick="document.getElementById('url').disabled = true; document.getElementById('file').disabled = false" class="with-gap" name="link_se" id="link_se1" value="1" required />
      <label for="link_se1">Upload File</label>

      <input  type="radio" onclick="document.getElementById('url').disabled = false; document.getElementById('file').disabled = true;" class="with-gap" name="link_se" id="link_se2" value="0" required />
      <label for="link_se2">URL</label>
      </div>

      
      <div class="row">
       
        <div class="file-field input-field col l6 m6 s12">
      <div class="btn">
        <span>File</span>
        <input type="file" name="upload_file" id="file" accept=".PDF" required>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
       <div class="row  ">
          <div class=" input-field col l9 m6 s12">
          <input  name="url" type="text" id="url" class="validate" />
          <label for="title">Enter URL For Redirect on another page</label>
       </div>
        </div>

    </div>
      </div>

      <div class="row">
      <div class="col l6 m6 s12">
         <label for="date">Deadline : </label>
         <input type="date" class="datepicker" id="date" name="last_date" onfocus=" mdate()"  required>
         
         </div>

        <div class="col l6 m6 s12">            
       <input type="checkbox" id="chk1" value="1" name="priority">
      <label for="chk1">Set Priority</label>
        </div> 

      </div>

      <div class="row">
  <button class="btn waves-effect waves-light" type="submit" name="post" >Submit
    <i class="material-icons right">send</i>
  </button>

      </div>

   


  </form>
  
</div>







<?php  include'footer.php'; ?>



<script type="text/javascript">
  
 var today = "<?php echo $date; ?>";

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
    min : today,
     formatSubmit: 'yyyy-mm-dd',
  hiddenName: true
  });
</script>




