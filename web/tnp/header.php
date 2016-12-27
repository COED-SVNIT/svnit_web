<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="../../images/svnit.png">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>SVNIT</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="../../css/newsTick.css">
<style type="text/css">

  #crdtop{
    height: 140px;
    cursor: pointer;
  }
  #crdbottom{height: 60px;}

  .boards{
    padding-top: 2%;
  }
</style>

<script type="text/javascript">
  function confirmDel(){
  
    var r = confirm("Are You Sure You want to permanently delete this staff member ?");
    if(r == true){
      return true;
    } 
    else
      return false;
  }


</script>


</head>
<body>
  <div id="modalsearch" class="modal bottom-sheet">
<div class="modal-content">
  <script>
(function() {
var cx = '000464212614805462193:1r7sx1al0gk';
var gcse = document.createElement('script');
gcse.type = 'text/javascript';
gcse.async = true;
gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(gcse, s);
})();
</script>
<gcse:search></gcse:search>
</div>
<div class="modal-footer">
  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
</div>
</div>

<div id="modalmail" class="modal bottom-sheet">
<div class="modal-content">

</div>
<div class="modal-footer">
<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
</div>
</div>

<ul id="student" class="dropdown-content black-text">
<li><a href="#!">Admission</a></li>
<li><a href="#!">Current Student</a></li>
<li class="divider"></li>
<li><a href="#!">Anti-Ragging</a></li>
<li><a href="#!">Online Fees</a></li>
<li><a href="#!">Physical Education</a></li>
</ul>
<ul id="department" class="dropdown-content">
<li><a href="#!">Applied Mechanics</a></li>
<li><a href="#!">Applied Chemistry</a></li>
<li><a href="#!">Applied Math. & Human.</a></li>
<li><a href="#!">Applied Physics</a></li>
<li><a href="#!">Civil Engineering</a></li>
<li><a href="#!">Chemical Engineering</a></li>
<li><a href="#!">Computer Engineering</a></li>
<li><a href="#!">Electrical Engineering</a></li>
<li><a href="#!">Electronics Engineering</a></li>
<li><a href="#!">Mechanical Engineering</a></li>
</ul>
<ul id="campus" class="dropdown-content">
<li><a href="#!">About Campus</a></li>
<li><a href="#!">Campus Map</a></li>
<li><a href="#!">Canteen</a></li>
<li><a href="#!">Day Care Center</a></li>
<li><a href="#!">Guest House</a></li>
<li><a href="#!">Health Center</a></li>
<li><a href="#!">Banks</a></li>
<li><a href="#!">Post Office</a></li>
<li><a href="#!">Security</a></li>
<li><a href="#!">CCC</a></li>
<li><a href="#">TNP</a></li>
</ul>
<ul id="centralfacility" class="dropdown-content">
<li><a href="#!">Web Mail</a></li>
<li><a href="#!">MIS</a></li>
<li><a href="#!">Moodle</a></li>
<li><a href="#!">E-Library</a></li>
<li><a href="#!">Phonebook</a></li>
<li><a href="#!">NPTEL</a></li>
<li><a href="#!">QIP</a></li>
<li><a href="#!">Anchor Cell</a></li>
</ul>
<ul id="media" class="dropdown-content">
<li><a href="#!">News Hub</a></li>
<li><a href="#!">Photo Gallery</a></li>
<li><a href="#!">Magazines</a></li>
</ul>
<ul id="quicklinks" class="dropdown-content">
<li><a href="#!">academic calender</a></li>
<li><a href="#!">circular1</a></li>
<li><a href="#!">circular2</a></li>
</ul>
<ul id="slide-out" class="side-nav">
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Student<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="#!">Admission</a></li>
            <li><a href="#!">Current Student</a></li>
            <li class="divider"></li>
            <li><a href="#!">Anti-Ragging</a></li>
            <li><a href="#!">Online Fees</a></li>
            <li><a href="#!">Physical Education</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Campus<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="#!">About Campus</a></li>
            <li><a href="#!">Campus Map</a></li>
            <li><a href="#!">Canteen</a></li>
            <li><a href="#!">Day Care Center</a></li>
            <li><a href="#!">Guest House</a></li>
            <li><a href="#!">Health Center</a></li>
            <li><a href="#!">Banks</a></li>
            <li><a href="#!">Post Office</a></li>
            <li><a href="#!">Security</a></li>
            <li><a href="#!">CCC</a></li>
            <li><a href="#">TNP</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Department<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="#!">Applied Mechanics</a></li>
            <li><a href="#!">Applied Chemistry</a></li>
            <li><a href="#!">Applied Math. & Human.</a></li>
            <li><a href="#!">Applied Physics</a></li>
            <li><a href="#!">Civil Engineering</a></li>
            <li><a href="#!">Chemical Engineering</a></li>
            <li><a href="#!">Computer Engineering</a></li>
            <li><a href="#!">Electrical Engineering</a></li>
            <li><a href="#!">Electronics Engineering</a></li>
            <li><a href="#!">Mechanical Engineering</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Central Facility<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="#!">Web Mail</a></li>
            <li><a href="#!">MIS</a></li>
            <li><a href="#!">Moodle</a></li>
            <li><a href="#!">E-Library</a></li>
            <li><a href="#!">Phonebook</a></li>
            <li><a href="#!">NPTEL</a></li>
            <li><a href="#!">QIP</a></li>
            <li><a href="#!">Anchor Cell</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Media<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="#!">News Hub</a></li>
            <li><a href="#!">Photo Gallery</a></li>
            <li><a href="#!">Magazines</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Quick Links<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="#!">academic calender</a></li>
            <li><a href="#!">circular1</a></li>
            <li><a href="#!">circular2</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>

</ul>
<div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav-wrapper black-text" style="padding-left:5%;padding-right:5%">

      <a href="../../index.php" class="brand-logo" style="padding-top:5px;"><img class="responsive-img" src="../../images/svnit1.png"></a>
      <a href="#modalsearch" class="right button" style="padding:4px"><i class="material-icons">search</i>&nbsp</a>
      <a href="#modalmail" class="right button" style="padding:4px"><i class="material-icons">mail_outline</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="#!" data-activates="student" data-beloworigin="true">Student<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="campus" data-beloworigin="true">Campus<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="department" data-beloworigin="true">Department<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="centralfacility" data-beloworigin="true">Central Facility<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="media" data-beloworigin="true">Media<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="quicklinks" data-beloworigin="true">Quick Links<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

      <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="material-icons">menu</i></a>



    </div>
  </nav>
</div>
