<?php
include 'header.php';

if(isset($_POST['post'])){
session_start();

require '../../database.php';
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");
if(isset($_POST['post'])){
$rand = rand(0,9999);
$title = $_POST['title'];
$desc = $_POST['desc'];
$Deadline = $_POST['last_date'];
if(isset($_POST['display']))
$disp = '1';
else
$disp = '0';
//echo "dead".$Deadline."<br>";
//echo "start".$date."<br>";

if( isset($_POST['priority']))
$prio = $_POST['priority'];
else
$prio = '0';


$notice_event = $_POST['notice_event'];
if(isset($_POST['link_se'])){
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
}
else
$link = $_POST['url'];
$query = 'update notice_events set notice_event = "'.$notice_event.'" , title = "'.$title.'" , description = "'.$desc.'" , link = "'.$link.'" , end_date = "'.$Deadline.'" , important = "'.$prio.'" , display = "'.$disp.'" where notice_event_id = '.$_SESSION['id'];
//$query = 'insert into notice_events (notice_event,title,description,link,start_date,end_date,important,display) values ("'.$notice_event.'","'.$title.'","'.$desc.'","'.$link.'","'.$date.'","'.$Deadline.'","'.$prio.'",1)';
if(mysqli_query($conn,$query)){
  echo '<script>alert("Notice updated Successfully!");</script>';
}
else{
echo '<script>alert("Sorry try again after some time!");</script>';}

}

}
?>



 



<div >
  <div class="row boards ">
    
    <div class="col l4 m12 s16 center-align">
    <div class="card-panel black">
      <span class=" white-text "><B> Student Notice</B></span>
    </div>
    <div id="nt-1-container" class="nt-container">
      <ul class="newsticker" id="nt-1">
      <?php
require '../../database.php';

//get current date
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");

//select record for notice bord before deadline
$query = 'SELECT * FROM notice_events where notice_event = "1" order by notice_event_id DESC';
$result = mysqli_query($conn,$query);

  //clear temporary table 
              $sql = 'delete from temp';
              mysqli_query($conn,$sql);

          
                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){

                      //take first record from table
                      date_default_timezone_set('Asia/Kolkata');
                        $date = date("Y-m-d");
                        $title = $row['title'];
                        $ev_no = $row['notice_event'];
                        //check that record exist in temporary table or not
                        $tmp = 'select * from temp where title = "'.$title.'"';
                        $tmp = mysqli_query($conn,$tmp);
                        $tmp = mysqli_fetch_array($tmp,MYSQLI_ASSOC);
                        if($tmp['id'] != '1'){

                        //if not then insert in temporary table and display all record that group
                        $check = 'insert into temp (id,title) values ("1","'.$title.'")';
                        mysqli_query($conn,$check);
                        $group = 'select * from notice_events where title = "'.$title.'" order by notice_event_id desc';  
                        $res = mysqli_query($conn,$group);
                        echo '<li>'.$title;
                      
                        

                      while($grp=mysqli_fetch_array($res,MYSQLI_ASSOC)){
                        $notice_event = $grp['notice_event'];
                        $end_date = $grp['end_date'];
                        $desc = $grp['description'];
                        $link = $grp['link'];
                        // echo '<script>alert("'.$link.'"); </script>';
                        $imp = $grp['important'];
                        $id = $grp['notice_event_id'];
                        if($end_date < $date)
                        echo ' | '.'<a href="edit_notice_next.php?id='.$id.'"><font color = "red"><b>'.$desc.'</b></font></a>';
                        else if($grp['display'] == "0")
                         echo ' | '.'<a href="edit_notice_next.php?id='.$id.'"><font color = "blue"><b>'.$desc.'</b></font></a>';
                       else
                         echo ' | '.'<a href="edit_notice_next.php?id='.$id.'"><font color = "green"><b>'.$desc.'</b></font></a>';

                      
                      }
                      echo '</li>';
                    }
                        }
              


?>

      
    
      </ul>
      </div>
    </div>

   
     <div class="col l4 m4 s12  center-align">
    <div class="card-panel black">
      <span class="white-text"><b>Events & Seminars</b></span>
    </div>
    <div id="nt-2-container" class="nt-container">
      <ul class="newsticker" id="nt-2">

              <?php
              //get data for event bord before deadline
              $query = 'SELECT * FROM notice_events where notice_event = "0" order by notice_event_id DESC';
              $result = mysqli_query($conn,$query);
                
                //clear temp record
              $sql = 'delete from temp';
              mysqli_query($conn,$sql);

          
                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                      date_default_timezone_set('Asia/Kolkata');
                        $date = date("Y-m-d");
                        $title = $row['title'];
                        $ev_no = $row['notice_event'];
                        //take first record from table
                        //check already exist or not

                        $tmp = 'select * from temp where title = "'.$title.'"';
                        $tmp = mysqli_query($conn,$tmp);
                        $tmp = mysqli_fetch_array($tmp,MYSQLI_ASSOC);
                        
                        //if not then display and add in temp table
                        if($tmp['id'] != '1'){
                        $check = 'insert into temp (id,title) values ("1","'.$title.'")';
                        mysqli_query($conn,$check);
                        $group = 'select * from notice_events where title = "'.$title.'" order by notice_event_id desc';  
                        $res = mysqli_query($conn,$group);
                        echo '<li>'.$title;
                      

                      while($grp=mysqli_fetch_array($res,MYSQLI_ASSOC)){
                        $notice_event = $grp['notice_event'];
                        $end_date = $grp['end_date'];
                        $desc = $grp['description'];
                        $link = $grp['link'];
                        // echo '<script>alert("'.$link.'"); </script>';
                        $imp = $grp['important'];
                       $id = $grp['notice_event_id'];
                      if($end_date < $date)
                        echo ' | '.'<a href="edit_notice_next.php?id='.$id.'"><font color = "red"><b>'.$desc.'</b></font></a>';
                        else if($grp['display'] == "0")
                         echo ' | '.'<a href="edit_notice_next.php?id='.$id.'"><font color = "blue"><b>'.$desc.'</b></font></a>';
                       else
                         echo ' | '.'<a href="edit_notice_next.php?id='.$id.'"><font color = "green"><b>'.$desc.'</b></font></a>';
                      
                      }
                      echo '</li>';
                    }
                        }
              

              ?>

     
      
      </ul>
 
      </div>
    </div>




    <div class="col l4 m4 s12  center-align">
    <div class="card-panel black">
      <span class="white-text "><b>Tenders & Enquiries</b></span>
    </div>
    <div id="nt-3-container" class="nt-container">
      <ul class="newsticker" id="nt-3">


              <?php
              //get data for event bord before deadline
              $query = 'SELECT * FROM notice_events where notice_event = "2" order by notice_event_id DESC';
              $result = mysqli_query($conn,$query);
                
                //clear temp record
              $sql = 'delete from temp';
              mysqli_query($conn,$sql);

          
                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                      date_default_timezone_set('Asia/Kolkata');
                        $date = date("Y-m-d");
                        $title = $row['title'];
                        $ev_no = $row['notice_event'];
                        //take first record from table
                        //check already exist or not

                        $tmp = 'select * from temp where title = "'.$title.'"';
                        $tmp = mysqli_query($conn,$tmp);
                        $tmp = mysqli_fetch_array($tmp,MYSQLI_ASSOC);
                        
                        //if not then display and add in temp table
                        if($tmp['id'] != '1'){
                        $check = 'insert into temp (id,title) values ("1","'.$title.'")';
                        mysqli_query($conn,$check);
                        $group = 'select * from notice_events where title = "'.$title.'" order by notice_event_id desc';  
                        $res = mysqli_query($conn,$group);
                        echo '<li>'.$title;
                      

                      while($grp=mysqli_fetch_array($res,MYSQLI_ASSOC)){
                        $notice_event = $grp['notice_event'];
                        $end_date = $grp['end_date'];
                        $desc = $grp['description'];
                        $link = $grp['link'];
                        // echo '<script>alert("'.$link.'"); </script>';
                        $imp = $grp['important'];
                        $id = $grp['notice_event_id'];
                        if($end_date < $date)
                        echo ' | '.'<a href="edit_notice_next.php?id='.$id.'"><font color = "red"><b>'.$desc.'</b></font></a>';
                        else if($grp['display'] == "0")
                         echo ' | '.'<a href="edit_notice_next.php?id='.$id.'"><font color = "blue"><b>'.$desc.'</b></font></a>';
                       else
                         echo ' | '.'<a href="edit_notice_next.php?id='.$id.'"><font color = "green"><b>'.$desc.'</b></font></a>';
                      }
                      echo '</li>';
                    }
                        }
              

              ?>

   
      </ul>
      </div>
    </div>
  

  </div>
</div>

<?php  include 'footer.php';  ?>