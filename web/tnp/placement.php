<?php
include 'header.php' ;
require '../../database.php';

?>

<div class="container">
  <div class="row ">
    <div class="col s12">
      <ul class="tabs" >
        <li class="tab col s3 "><a class="active black-text " href="#about">about</a></li>
        <li class="tab col s3"><a class="black-text" href="#stat">Statistics</a></li>
        <li class="tab col s3"><a class="black-text" href="#company">Companies</a></li>
        <li class="tab col s3"><a class="black-text" href="#exp">Experience</a></li>
      </ul>
    </div>

<div id="about">
  <h4>For Placement & internship</h4>
  <hr>
  <p class="hoverable">
    The placement starts in the beginning of the final year and continues up to end of the academic year. Hence, an invitation is sent to all the companies who visited earlier and to new companies in June-July. A requisition form along with the invitation is provided to seek the company’s profile and information. Once the willingness of the companies is received, they are prioritized and a schedule is prepared along with the merit list of students who are interested. Based on the prepared schedule, a company is intimated to visit the campus on an allotted day and makes pre-placement talk, conducts tests and interviews, and selects the candidates.
  </p>
  <p class="hoverable">
    Further, to strengthen the Industry-Institute interaction, T & P section encourages the companies for internship to B. Tech. students (maximum 8 weeks in summer vacation) and to M. Tech. students (maximum 1 year) in their 2nd year as a dissertation work.
  </p>
  <div class="row"> 
      
      <div class="col l4 m4 s6 ">
        <a href="../../Data/tnp/CommitteeMembers2016-17.pdf" target="_blank">
          <div class="card-panel black hoverable">
            <span class=" white-text ">T&P Committee Members </span>
          </div>
        </a>
    </div>
    
    
    <div class=" col l4 m4 s6 ">
      <a href="../../Data/tnp/SVNIT_Placement 2015-16.pdf" target="_blank">
        <div class="card-panel black hoverable">
          <span class=" white-text ">SVNIT- Placement 2015-26 </span>
        </div>
      </a>
    </div>    
    
  </div>
</div>
  
<!--                         ********                          -->

<div id="stat">
<h4>Statistics - Placement</h4>
<hr>
<?php
  $que = 'SELECT * from placeRecord where display = "1" order by prID DESC ';
  $result = $conn->query($que);
  while ($row = $result->fetch_assoc()) {
?>  

  <div class="col l4 m4 s12 ">
    <a href="<?php echo $row['path']; ?>"  target="_blank">
    <div class="card-panel hoverable">
      <span class="black-text"><?php echo $row['title']; ?></span>
    </div>
    </a>
  </div>


<?php
  }
?>

  
</div>


<!--                         ********                          -->

<div id="company">
<h4>Companies</h4>
<embed type="application/pdf" src="../../Data/tnp/companies.pdf" width="100%" height="100%">  
</embed>
<hr>
<h4>Expert Lectures</h4>
<embed type="application/pdf" src="../../Data/tnp/exp_lectures.pdf" width="100%" height="100%">  
</embed>
<hr>
  
</div>
<!--  +++++++++++++++++++++    -->

<div id="exp">
<h4>Experience</h4>
<hr>
<p class="hoverable">
  It has been absolute pleasure and privilege for us to be in a core group of students, as T&P Committee, and be the first hand witnesses to a breathtaking year in terms of campus placement in the Institute. What began with a little bit of anxiety and apprehension and a lot of hope, has turned out be a celebration, with companies falling over each other to recruit the students and most students acquiring their “Dream Jobs”.
</p>
<p class="hoverable">
The instructions we received from our Professor, Training & Placement (T&P), Dr. D. B. Naik were immaculate and it was on his directions and guidance were we able to effectively work with the students. The magnitude of work put into the placement activities by Dr. D. B. Naik, Sir has been immense. His dedication, work ethos and commitment toward every minute detail of things were a source of inspiration for us and were a huge learning experience. With the constant support of Mr. Pradip Patel, whose dedication to the work is commendable in true terms, he has effectively taken our placement records over the years to new heights. And he still announces the results of every company at the end of the day, with the same chirp and enthusiasm.
</p>
<p class="hoverable">
  We cannot also forget the endless sessions of discussions we had in the confines of Training & Placement Section (T&P), sipping the Chai (Tea) served by Mr. Shailesh Patel, and mulling over action plans towards every visiting company. Neither can we forget the 8-10 hours of non-stop work we had to put in a day, when the mass recruiting companies used to visit. Or the day when one of us spent three hours to bring the dignitaries from the station to college, only to be notified that he has been selected for interview that begins in 15 minutes ! Or the days when two companies used to visit the campus on a day stretching us to the limit, or when one of us had to simultaneously appear in and coordinate the Group Discussion (GD) with remarkable efficiency ! We also remember the gentle raps we got for our little goof ups !

</p>
<p class="hoverable">
  All of it has been more than worth its salt, for the sheer joy we shared with our friends and peers when they got placed, there was a priceless sense of satisfaction in playing a minor role in it all. From night-outs of preparation (so to say!) of written exams, to the struggle with life’s first tie-knot, the Group Discussions (GDs) and Personal Interviews (PIs), to the sweet success at the end of it and the night’s treat at the. Sugar n Spice Restaurant, it has been a journey of a lifetime.</p>

<p class="hoverable">

For all this, we cannot provide enough thanks to the college authorities, our Director Dr. P. D. Porey and all our faculties for being a constant source of guidance and support. We are confident that the placement record for this year and the coming years will be even more staggering. It will just affirm the fact that SVNIT, Surat (Gujarat) is one of the best engineering Institutes of the country and the global companies are waking up to it.
We are extremely happy with the kind of support and encouragement received from our respected Director, Dr. P. D. Porey, Sir and Registrar, Shri H.A. Parmar, Sir.
</p>
  
</div>

    
  </div>
</div>        

<?php include 'footer.php';  ?>