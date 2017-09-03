@extends('layouts.app')


@section('content')

	<div class="panel panel-default">
		<!-- <div class="panel-heading">Home</div> -->


		@php
			$ttl = "Title";

			//$apod = $DB->query_obj("SELECT data FROM settings WHERE id='apod'");
 			$apod = DB::select('SELECT data FROM settings WHERE id=?', ['apod']);
 			$apod = $apod[0];

			//$apod_img = str_replace("width='400'", "width='500'", $apod->data);
			$apod_img = $apod->data;

			$news = DB::select('SELECT * FROM news WHERE id=?', [1]);
			$news = $news[0];
			$news->body = str_replace("h2", "h4", $news->body);

		@endphp
			<TABLE align=center VALIGN='top' BORDER=0 CELLSPACING=0 CELLPADDING=0>
			<TR>
				<TD class='headerText' align=center valign=center>
					<!-- <A href='./index.php'><IMG src=http://spac-assets.s3-us-west-2.amazonaws.com/images/LOGO2.jpg></A> -->
				</TD>
			</TR>
			</TABLE>
		

		<div class="panel-body">
			@if (Auth::guest())
				<!-- You are a guest -->
			@else
				<!-- You are logged in! -->
			@endif

			
			<div class="col-md-8">
				<DIV class='who-we-are'>
				    <H3>Who are we?</H3>
				    The St. Petersburg Astronomy Club, Inc. (SPAC), has been meeting
			    	continuously since 1927. It was incorporated in 1979 as a nonprofit,
			        tax deductible organization. For almost 50 years SPAC has provided
			        free educational programs for its members and the public. For
			        additional information send your emails to: <a href="mailto:spacexaminer@gmail.com?Subject=Info%20request">spacexaminer@gmail.com</a> or
			        check out the links to the left.
				</DIV>

			    <div class='meetings'>
			    <H3>Meetings</H3>
				    Meetings are normally
				    held on the fourth Friday of each month (except November and December
				    when it is on the third Friday) at the Science Center of Pinellas
				    County, 7701 22nd Avenue North, St. Petersburg, FL., at 8:00 P.M.
				    Meetings are open to the public.
			    </div>

				<div class='apodDiv'>
				    <a target="_nasaApod" href='http://apod.nasa.gov/apod/astropix.html'>
				    	<?php echo $apod_img; ?>
		    			<br>
		    			Astronomy Picture of the Day
		    		</a>
				</div>
			</div>

			<div class="col-md-4">
				<div id='newsFeed'>
					<?php echo $news->body; ?>
					<h4 id="fb_feed_h2">
						Facebook Group 
						<span style="font-size:12px;">
							(<a href="https://www.facebook.com/groups/stpeteastronomyclub" target=_blank>link</a>)
						</span>
					</h4>
				</div>
			</div>

		</div>
	</div>

@endsection
