@extends('layouts.app')

@section('content')
	<?php
		$closed = false;

		function mkLinkBox($name, $lnk) {
			$html = "<div class='linkBox'>".
					"<a href='$lnk' target='blank'>$name</a>".
					"</div>";
			return $html;
		}


	?>
	
    <div class="panel panel-default">
        <div class="panel-heading">Orange Blossom Special</div>

        <div class="panel-body">

			<TABLE width=100%>
			<TR>
				<TD valign=top align=center width=10></TD>
				<TD valign=top>
				  <p style='text-align: center;'>
					<img width=350 src="2017_obsLogo.png">
				  </p>
					<!--
					<img class='obs-logo' width=568 src="http://spac-assets.s3.amazonaws.com/obs2015/2016_OBS_Logo.png">
					-->
					<!--
					<img class='obs-logo' src="http://static.stpeteastronomyclub.org/obs2015/2016_OBS_Logo.png">
					-->

				    <h4>
						February 7th through 11th 2018
				    </h4>

				    <DIV style="text-align:left; margin-top:20px; padding-left:10px; padding-right:10px;">

		            Please, please consider this your personal invitation to our annual international star party. For twenty-
		            three years the St. Petersburg Astronomy Club has hosted The Orange Blossom Star Party for all those who enjoy
		            getting together to socialize and learn about the night sky, new astronomical equipment, and techniques. 
					<p>

		            This year, the annual event will again take advantage of the many amenities of Withlacoochee River Park in Dade
		            City, Florida. The park offers a 30+ acre activity field for camping and viewing with limited electric and water
		            hookups. An RV Camping area is located just off the field, with full bath rooms. There is plenty of room to
		            roam on a 1.7 mile paved multi-purpose trail, 13 miles of hiking trails, a 40 foot observation tower, 3 wooden
		            boardwalks, 2 playground areas for the kids, and river access for canoeing. Fishing is permitted by boat or along
		            the riverbank.
					<p>

		          <p>
		            <a href="http://www.pascocountyfl.net/index.aspx?NID=303" target=blank>Click here to visit their website</a>
		          </p>
		          <p>
		            The agenda for the star party, along with deep sky and solar system observing, includes: lectures,
		            mirror grinding demonstrations, our ever popular telescope tour, a group nature hike, a guided bike ride, two
		            Hee Haw Hayrides, great door prizes and much more. We will have an on-site food vendor for breakfast, lunch and
		            dinner each day. Astronomy equipment vendors will be there, and don't forget to bring your astronomy stuff to
		            sell and your wallets to buy at the Swap Meet on Saturday.
		          </p>
		          <p style="float: left; margin-top:0px; margin-bottom: 0px; margin-right: 10px">
		            <img src=photo2.jpg height = "175">
		          </p>
		          <p>
		            Our star party is pet friendly so your best friend is welcome. Of course, pets must display their current rabies
		            tag/license and have direct adult supervision at all times.
		          </p>
		          <p>
		            The star party will begin on Wednesday, January 25<sup>th</sup> at 9:00<font size="1">AM</font> and will end Sunday,
		            January 29<sup>th</sup>, at noon.
		          </p>
		          <p>
		            You must register on-line. Registration begins on October 1<sup>st</sup> and will remain open until December 28<sup>th</sup>. Late
		            registration (with a late fee, $20/Adult) will be available from December 29<sup>th</sup> until January 11<sup>th</sup>. Sorry, we will
		            not be able to accept any registration after that date.
		          </p>

					<!--
					<span class="important">IMPORTANT</span>: Please plan to arrive before 6:00 PM. Arrivals after
					6:00 PM will be parked in the designated parking area until
					morning. For safety reasons, driving onto or off the observing
					field is <span class="important">NOT</span> allowed after 6:00 PM. After set-up, you should move
					your cars or trucks to the parking area as they will not be
					allowed to be moved off of the observing field after 6:00 PM.
					There will be no exception to this rule, not even in an emergency,
					so please plan accordingly.
					<p>
					-->

				    <h2>Directions</h2>
				    <a href="./viewing" target=_blank>Directions to Withlacoochee River Park</a>
					<br>
					<br>

					<!--
					-->
					<?php if (!$closed) { ?>
						<h2>Registration</h2>
						The registration fees this year are as follows:
						<div class="registration-details">
						<h5>2 or More Nights/Days</h5>
							Single adult - $60.00 Adult with Spouse - $100.00<br>
							Youth (7-17) - $10.00 Children under 7 - Free<br>

						<h5>One Night/Day</h5>
							Single adult - $30.00 Adult with Spouse - $50.00<br>
							Youth (7-17) - $ 5.00 Children under 7 - Free<br>

						<p>
						<h5>Refund Policy</h5>
							<p style='margin-top: 0px; color:#990000;'>
							  Cancellations received prior to December 28<sup>th</sup> will receive a full
							  refund less $10 processing fee. <u>No refund can be issued after that
							  date</u>.
							</p>
						</div>


						<br>
						<center><h2>Registration is Now Open.</h2></center>
					<?php } else {?>
						<center><h2>Registration is Now Closed.</h2></center>
					<?php } ?>

				    </DIV>

				    <DIV class="button-box">
				    	<?php if (!$closed) { ?>
				    	<label>To register, click here:
				    		<a href='#' onclick="loadPDF('./obs-form'); return false;">OBS Registration</a>
				    	</label>
				    	<br>
				    	<br>
				    	<?php } ?>
						<p style="text-align:center">
						  <button class="btnMedDkBlu" type="button" onclick="loadPDF('./obsp2017/2017_Information_Sheet.pdf');">
							More Information
						  </button>
						  <button class="btnMedDkBlu" type="button" onclick="loadPDF('./obsp2017/2017_Rules.pdf');">
							Rules
						  </button>
						  <button class="btnMedDkBlu" type="button" onclick="loadPDF('./obsp2017/2017_OBS_Activities_Schedule.pdf');">
							Activity Schedule
						  </button>
						</p>
				    <!--
				    	<button type="button" onclick="loadPDF('http://spac-assets.s3-us-west-2.amazonaws.com/obs2015/2015_Activity_Schedule.pdf');">Activity Schedule</button>
				    	<button type="button" onclick="loadPDF('http://spac-assets.s3-us-west-2.amazonaws.com/obs2015/2015_OBS_Menu.pdf');">Menu</button>
				    -->
				    </DIV>

					<center>
					    <a href="./viewing">Directions to Withlacoochee River Park</a>

						<img style="margin-top:0px;" src='http://spac-assets.s3-us-west-2.amazonaws.com/images/withlacoochee_map.jpg'>
					</center>
				    <!--
					-->
				</TD>


				<TD valign=top align=center width=20></TD>

				<TD valign=top align=center width=200>
					<!--
					<a href="http://spac-assets.s3.amazonaws.com/obs2015/2015_OBS_Logo_web.jpg" target=_blank>
					<img class='obs-logo' src="http://static.stpeteastronomyclub.org/obs2015/2015_OBS_Logo_web-200w.jpg">
					</a>
					<br>
					-->
					<b>OBS Sponsors</b><br>
					<span style='font-size:12px;'>Please support our sponsors</span>
					<?php
					echo mkLinkBox("Agena AstroProducts", 'http://www.agenaastro.com');
					//echo mkLinkBox("Astrogizmos", 'http://www.astrogizmos.com/');
					echo mkLinkBox("Astronomy Magazine", 'http://www.astronomy.com/');
					echo mkLinkBox("Bob's Knobs", 'http://www.bobsknobs.com');
					echo mkLinkBox("Camera Concepts", 'https://www.cameraconcepts.com');
					echo mkLinkBox("David Chandler Company", 'http://www.davidchandler.com/');
					echo mkLinkBox("Deep-Sky Planner", 'http://www.knightware.biz');
					echo mkLinkBox("Howie Glatter", 'http://www.collimator.com');
					echo mkLinkBox("Knightware", 'https://knightware.biz/');
					echo mkLinkBox("Meade Instruments", 'http://www.meade.com/');
					echo mkLinkBox("Mr. StarGuy", 'http://www.mrstarguy.com/');
					echo mkLinkBox("NASA", 'http://www.nasa.gov/');
					echo mkLinkBox("OPTEC", 'http://www.optecinc.com/');
					echo mkLinkBox("Lowell Observatory", 'http://www.lowell.edu/');
					echo mkLinkBox("Sky & Telescope<br>Magazine", 'http://www.skyandtelescope.com');
					echo mkLinkBox("Teeter's Telescopes", 'http://www.teeterstelescopes.com');
					?>
				</TD>

			</TR>
			</TABLE>


        </div>
    </div>
@endsection

@section('footer')
<script type="text/javascript">

</script>
@endsection