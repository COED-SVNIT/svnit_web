<?php
include 'header.php';
session_start();
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");
require '../../database.php';
$id = $_GET['id'];
$_SESSION['id'] = $id;
$edit = 'select * from notice_events where notice_event_id = '.$id;
 $edit = mysqli_query($conn,$edit);
 $edit = mysqli_fetch_array($edit,MYSQLI_ASSOC);

?>



<div class="container" style="margin-top:2%;">
  <form name="notice_event" method="post" action="edit_notice.php" enctype="multipart/form-data">
      <div class="row">
      <input  type="radio" class="with-gap" id="r1" name="notice_event" value="1" <?php if($edit['notice_event'] == '1') echo 'checked'; ?> required />
      <label for="r1">Notice</label>

      <input  type="radio" class="with-gap" id="r2" name="notice_event" value="0" <?php if($edit['notice_event'] == '0') echo 'checked'; ?> required />
      <label for="r2">Event</label>

      <input  type="radio" class="with-gap" id="r3" name="notice_event" value="2" <?php if($edit['notice_event'] == '2') echo 'checked'; ?> required />
      <label for="r3">Tender</label>

      </div>

      
        <div class="row  ">
          <div class=" input-field col l6 m6 s12">
          <input  id="title" name="title" type="text" class="validate" value="<?php echo $edit['title']; ?>" required>
          <label for="title">Title</label>
       </div>
        </div>

         <div class="row">
        <div class="input-field col l8 m8 s12 ">
          <textarea id="textarea1" class="materialize-textarea" name="desc" required ><?php echo $edit['description']; ?></textarea>
          <label for="textarea1">Description</label>
        </div>
 
      </div>
  

       <div class="row">
      <input  type="radio" onclick="document.getElementById('url').disabled = true; document.getElementById('file').disabled = false" class="with-gap" name="link_se" id="link_se1" value="1" />
      <label for="link_se1">Upload File</label>

      <input  type="radio" onclick="document.getElementById('url').disabled = false; document.getElementById('file').disabled = true;" class="with-gap" name="link_se" id="link_se2" value="0" />
      <label for="link_se2">URL</label>
      </div>

      
      <div class="row">
       
        <div class="file-field input-field col l6 m6 s12">
      <div class="btn">
        <span>File</span>
        <input type="file" name="upload_file" id="file" accept=".PDF" >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate"  type="text">
      </div>
       <div class="row  ">
          <div class=" input-field col l9 m6 s12">
          <input  name="url" type="text" id="url" value="<?php echo $edit['link']?>" placeholder="If and only if you want to change!" class="validate" />
          <label for="title">Enter URL For Redirect on another page</label>
       </div>
        </div>

    </div>
      </div>

      <div class="row">
      <div class="col l6 m6 s12">
         <label for="date">Deadline : </label>
         <input type="date" class="datepicker" id="date" value="<?php echo $edit['end_date']; ?>" name="last_date" onfocus=" mdate()"  required>
         
         </div>

        <div class="col l6 m6 s12">            
       <input type="checkbox" id="chk1" value="1" name="priority" <?php if($edit['important'] == '1') echo 'checked'; ?> />
      <label for="chk1">Set Priority</label>
        </div> <br /><br />

           <div class="col l6 m6 s12">            
       <input type="checkbox" id="disp" value="1" name="display" checked />
      <label for="disp">Display</label>
        </div> 


      </div>

      <div class="row">
  <button class="btn waves-effect waves-light" type="submit" name="post" value="<?php echo $link; ?>" >Submit
    <i class="material-icons right">send</i>
  </button>

      </div>

   


  </form>
  
</div>


<?php include 'footer.php';  ?>