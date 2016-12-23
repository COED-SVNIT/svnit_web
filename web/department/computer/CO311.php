
<?php $style=".tableheading{ text-align: center; text-transform: uppercase; font-weight:bold;}" ?>


<?php include 'comp_header.php';?>
<br><br><br>
<center>
<strong>

            <a href="btech_1.php">1st year</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="btech_2.php">2nd year</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="btech_3.php"><font color="#27ae60">3rd year</font></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="btech_4.php">4th year</a>&nbsp;&nbsp;&nbsp;&nbsp;
        </strong>
</center>
     
<br>
<br>
<br>
<div class="container">
      
                <table class="bordered striped"><!-- border="0" cellpadding="0" cellspacing="0" width="825" align="center">-->
  <tr>
		<td width="84%"><strong><font color="#E77048">B.Tech. III (CO)
		Semester - 5</font></strong></td>
		<td width="4%">
		<p align="center"><strong><font color="#E77048">L</font></strong></p>
		</td>
		<td width="4%">
		<p align="center"><strong><font color="#E77048">T</font></strong></p>
		</td>
		<td width="4%">
		<p align="center"><strong><font color="#E77048">P</font></strong></p>
		</td>
		<td width="4%">
		<p align="center"><strong><font color="#E77048">C</font></strong></p>
		</td>
	</tr>
	<tr>
		<td width="83%"><strong><font color="#5b9bc6">CO311 : DIGITAL SIGNAL
		PROCESSING (EIS - I) </font> </strong></td>
		<td width="4%">
		<p align="center"><strong><font color="#5b9bc6">3</font></strong></p>
		</td>
		<td width="4%">
		<p align="center"><strong><font color="#5b9bc6">0</font></strong></p>
		</td>
		<td width="4%">
		<p align="center"><strong><font color="#5b9bc6">0</font></strong></p>
		</td>
		<td width="4%">
		<p align="center"><strong><font color="#5b9bc6">3</font></strong></p>
		</td>
	</tr>
	 <tr>
 <td colspan="5"><strong><font color="#5b9bc6">COURSE OBJECTIVES</font> </strong></td>
 </tr>
 <tr>
 <td colspan="5">
<li>Introduce the concepts of digital signal processing and the basic analytical methods and show how they are applied to design filters for given applications.</li>
	<li>To develop skills for analyzing and synthesizing algorithms and systems that process discrete time signals, with emphasis on realization and implementation.</li>
	<li>To develop skills to design finite impulse response (FIR) filters to satisfy a desired frequency response.</li>
</td>
 </tr>
	<tr>
		<td colspan="5"><strong><font color="#5b9bc6">COURSE OUTCOMES</font> </strong></td>
	</tr>
	<tr>
		<td colspan="5">After successful completion of this course, student
		will be able to
		<ul class="ulpadding">

			<li>Understand the process of converting the continuous-time signal
			into digital signal, process it and convert back to continuous-time
			signal.</li>
			<li>Apply the tools like DFT and z-transform to analyze and design
			the digital LTI systems.</li>
			<li>Apply the digital filter structures and DSP processor knowledge
			to implement the actual digital LTI systems and evaluate the effect
			of finite word-length effects.</li>
		</ul>

		</td>
	</tr>
	<tr>
		<td colspan="5"><strong><font color="#5b9bc6">COURSE CONTENT</font> </strong></td>
	</tr>
	<tr>
		<td width="84%">
		<strong> INTRODUCTION TO SIGNAL </strong>
		</td>
		<td colspan="4">
		<p style="text-align:right;"><strong>(12 Hours)</strong></p>
		</td>
	</tr>
	<tr>
		<td width="84%"><p>Continuous-time signals and Discrete Signals and their
		properties, Linear-time-invariant systems, Convolution Laplace
		transform, Fourier series and Fourier transform, Digital Sequences,
		Linear difference equations with constant coefficients, Realizations,
		Frequency-domain representation of discrete-time signals and systems,
		Sampling of Continuous-time Signals: Periodic sampling,
		Frequency-domain representation of sampling, Reconstruction of a
		band-limited signal, Changing the sampling rate using discrete-time
		processing, Quantization</p></td>
		<td colspan="4">
		<p align="center"><strong></strong></p>
		</td>
	</tr>


	<tr>
		<td>
		<strong>Z-TRANSFORM </strong>
		</td>
		<td colspan="4">
		<p style="text-align:right;"><strong>(04 Hours)</strong></p>
		</td>
	</tr>
	<tr>
		<td width="84%"><p>Properties of the Z-transform, Transfer function
		representation, Inverse Z-transform, Z-transform applied to difference
		equations, The complex convolution theorem, Stability of discrete-time
		systems, Frequency response of discrete-time systems.</p></td>
		<td colspan="4">
		<p align="center"><strong></strong></p>
		</td>
	</tr>

	<tr>
		<td width="84%">
		<strong> DISCRETE FOURIER TRANSFORM </strong>
		</td>
		<td colspan="4">
		<p style="text-align:right;"><strong>(04 Hours)</strong></p>
		</td>
	</tr>
	<tr>
		<td width="84%"><p>Discrete-Time Fourier Transform (DTFT), The Discrete
		Fourier series, The Fourier transform of periodic signals, Discrete
		Fourier Transform (DFT), Properties of the DFT, System analysis via
		the DTFT and DFT, Circular convolution, Linear convolution using the
		DFT, Implementation of the DFT using convolution</p></td>
		<td colspan="4">
		<p align="center"><strong></strong></p>
		</td>
	</tr>


	<tr>
		<td width="84%">
		<strong> FAST FOURIER TRANSFORM (FFT) ALGORITHMS </strong>
		</td>
		<td colspan="4">
		<p style="text-align:right;"><strong>(04 Hours)</strong></p>
		</td>
	</tr>
	<tr>
		<td width="84%"><p>Decimation in time FFT, Introduction to radix-2 FFTs,
		Some properties of radix-2 decimation in time FFT, Decimation in
		frequency algorithm, Computing the inverse DFT by doing a direct DFT</p></td>
		<td colspan="4">
		<p align="center"><strong></strong></p>
		</td>
	</tr>


	<tr>
		<td width="84%">
		<strong> FILTERS AND ADVANCED SIGNAL PROCESSING </strong>
		</td>
		<td colspan="4">
		<p style="text-align:right;"><strong>(08 Hours)</strong></p>
		</td>
	</tr>
	<tr>
		<td width="84%"><p>Multirate Signal Processing, Finite Impulse Response
		(FIR) and Infinite Impulse Response (IIR) Filter Design, Power
		Spectral Density, Applications of Digital Signal Processing.</p></td>
		<td colspan="4">
		<p align="center"><strong></strong></p>
		</td>
	</tr>


	<tr>
		<td width="84%">
		<strong> CONTEMPORARY RESEARCH TOPICS </strong>
		</td>
		<td colspan="4">
		<p style="text-align:right;"><strong>(10 Hours)</strong></p>
		</td>
	</tr>




	<tr>
		<td colspan="5" align="justify">
		<strong>(Total Contact Time: 42 Hours)</strong>
		</td>
	</tr>

	<tr>
		<td colspan="5"><strong><font color="#5b9bc6">BOOKS RECOMMENDED</font>
		</strong></td>
	</tr>
	<tr>
		<td colspan="5">
		<ol class="ulpadding">
			<li>Alan W. Oppenheim & Ronald W. Schafer, "Discrete-time Signal Processing", PHI, New Delhi, 1992</li>
			<li>John G. Proakis & Dimitris G. Manolakis: "Digital Signal Processing: Principles, Algorithms, and Applications" 3/E, PHI,1996 </li>
			<li>Andreas Antoniou, "Digital Filters Analysis and Design", TMH , New Delhi, 1997</li>
			<li>Johnny Johnson, "Introduction to Digital Signal Processing", PHI, New Delhi, 1997</li>
			<li>Vinay K. Ingle and John G. Proakis BookWare, "Digital Signal Processing using MATLAB", Companion Series 2000</li>
		</ol>
	
	</tr>


          
            </table>

    
        
    
    

                </div>
  
 
  


<?php include 'comp_footer.php';?>










 






