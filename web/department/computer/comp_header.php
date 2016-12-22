<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="svnit.png">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Computer Department</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="../../../css/newsTick.css">
<style type="text/css">
  html,body{
    height: 100%
}

  .boards{
    padding-top: 2%; 
  }

  <?php echo $style; ?>
</style>

</head>
<body>

<ul id="academics" class="dropdown-content black-text">
<li><a href="admissions.php">Admission</a></li>
<li><a href="btech.php">B.Tech Computer Engineering</a></li>
<li><a href="mtech.php">M.Tech Computer Engineering</a></li>
<li><a href="phdcourse.php">Phd Computer Engineering</a></li>
</ul>
<ul id="people" class="dropdown-content">
 <li><a href="faculty.php">Faculty</a></li>
  <li><a href="tas.php">Teaching Assistants</a></li>
<li><a href="phd_completed.php">PHD Student</a></li>
<li><a href="staff.php">Staff</a></li>
</ul>
<ul id="reasearch" class="dropdown-content">
<li><a href="project.php">Project</a></li>
<li><a href="publication.php">Publication</a></li>
<li><a href="consultancy.php">Consultancy Work</a></li>

</ul>
<ul id="facilities" class="dropdown-content">
<li><a href="under_construction.php">Equipment And Resources</a></li>
<li><a href="under_construction.php">Special Facilities</a></li>

</ul>
<ul id="activities" class="dropdown-content">
        <li><a href="student_chapters.php">Student Chapters</a></li>
        <li><a href="summer.php">STTP/Summer Schools</a></li>
        <li><a href="lecture.php">Distinguished Talks</a></li>
        <li><a href="workshops.php">Conferences/ Workshops/ Finishing schools</a></li>
        <li><a href="nptel.php">Courses through NPTEL</a></li>
        <li><a href="achievements.php">Special Distinctions</a></li>
</ul>


                          





<ul id="slide-out" class="side-nav">
  <li><a href="computer_dept.php">Home</a></li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Acadmices<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
                  <li><a href="admissions.php">Admission</a></li>
              <li><a href="btech.php">B.Tech Computer Engineering</a></li>
              <li><a href="mtech.php">M.Tech Computer Engineering</a></li>
              <li><a href="phdcourse.php">Phd Computer Engineering</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">People<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
              <li><a href="faculty.php">Faculty</a></li>
              <li><a href="tas.php">Teaching Assistants</a></li>
              <li><a href="phd_completed.php">PHD Student</a></li>
              <li><a href="staff.php">Staff</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Reasearch<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="project.php">Project</a></li>
            <li><a href="publication.php">Publication</a></li>
            <li><a href="consultancy.php">Consultancy Work</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Facilities<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
           <li><a href="under_construction.php">Equipment And Resources</a></li>
<li><a href="under_construction.php">Special Facilities</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Activities<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
             <li><a href="student_chapters.php">Student Chapters</a></li>
        <li><a href="summer.php">STTP/Summer Schools</a></li>
        <li><a href="lecture.php">Distinguished Talks</a></li>
        <li><a href="workshops.php">Conferences/ Workshops/ Finishing schools</a></li>
        <li><a href="nptel.php">Courses through NPTEL</a></li>
        <li><a href="achievements.php">Special Distinctions</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li><a href="alliance.php">Alliances</a></li>
  <li><a href="contact.php">Contact Us</a></li>
</ul>
<div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav-wrapper " style="padding-left: 5%; padding-right: 5%;">

      <a href="../../../index.php" class="brand-logo" style="padding-top:5px;  "><img class="responsive-img" src="svnit1.png"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="computer_dept.php">Home</a></li>
           <li><a class="dropdown-button" href="admissions.php" data-activates="academics"  data-beloworigin="true">Academics<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="faculty.php" data-activates="people"  data-beloworigin="true">People<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="project.php" data-activates="reasearch"  data-beloworigin="true">Reasearch<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="under_construction.php" data-activates="facilities"  data-beloworigin="true">Facilities<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="student_chapters.php" data-activates="activities"  data-beloworigin="true">Activities<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="alliance.php">Alliances</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="material-icons">menu</i></a>

    </div>
  </nav>
</div>