@extends('layouts.app')

<?php define("USE_SANDBOX", true); ?>

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Join/Renew Membership</div>

		<div class="panel-body">

			<h4>Membership in the St. Petersburg Astronomy Club is open to anyone interested in astronomy.</h4>

			<ul>
				<li>If you only wanted to update your profile click <a href="/member/edit">here</a></li>
				<li>All submitted dues and funds to SPAC, Inc. are considered donations and are non-refundable.</li>
			</ul>

			<form id="membershipForm" class="form-horizontal" action="#" method="post">
				{{ csrf_field() }}
				
				<!-- identification info -->
 				<div class="membershipJoinRenewForm">
					
					@include("partials.user.basic");

				</div>

			<table align=center width=100%>

				<!-- misc info -->
				<tr height=15><td></td></tr>
				<tr><td colspan=3 style='border-top:1px solid grey;'>
				<table style='margin-left:30px; margin-top:10px;'>

				<tr><td class='col1x right'><label for="cnewsletter">Newsletter Preference</label>
				</td><td colspan=2>
						<input type="radio" id="cnewsletter_0" name="cnewsletter" value="Email" />Email
						&nbsp;
						<input type="radio" id="cnewsletter_1" name="cnewsletter" value="US Mail" />US Mail
				</td></tr>


				<tr height=15><td></td></tr>

				<tr><td class='col1x right'><label for="cmembertype_0">Single Membership</label>
				</td><td class='col2x'>
						<input type="radio" id="cmembertype_0" name="cmembertype" value="single" />$20/year
				</td></tr>
				<tr><td></td><td colspan=3 class='membership_desc'>
						Includes email subscription to the Examiner for one adult member and any number of minor children.
				</td></tr>


				<tr height=10><td></td></tr>

				<tr><td class='col1x right'><label for="cmembertype">Family Membership</label>
				</td><td valign=top colspan=2>
						<input type="radio" id="cmembertype_1" name="cmembertype" value="family" />$25/year
				</td></tr>

				<tr><td></td><td colspan=3 class='membership_desc'>
						Includes email subscription to the Examiner for two adult members and any number of minor children.
				</td></tr>


				<tr height=10><td></td></tr>

				<tr><td class='col1x right'><label for="cmembertype_2">Patron Membership</label>
				</td><td>
						<input type="radio" id="cmembertype_2" name="cmembertype" value="patron" />$50/year
				</td></tr>
				<tr><td></td><td colspan=3 class='membership_desc'>
						Includes email or snail mail subscription to the Examiner for one or two adult members and any number of minor children.
				</td></tr>

				<tr height=10><td></td></tr>

				<tr><td class='col1x right'><label for="cmembertype_3">Benefactor Membership</label>
				</td><td>
						<input type="radio" id="cmembertype_3" name="cmembertype" value="benefactor" />$100/year
				</td></tr>
				<tr><td></td><td colspan=3 class='membership_desc'>
						Includes email or snail mail subscription to the Examiner for one or two adult members and any number of minor children.
				</td></tr>

				</table>


				</td></tr>


				<!--
						submit
				-->
				<tr><td colspan=4 class="submit_row">
						<div id='totalCost'>Total:<span id='totalCostVal'>$0.00</span></div>
						<!--
						<input class="submit" type="submit" value="Submit"/>
						-->
						<input id='paypalButton' type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

				</td></tr>

			</table>

			</form>

			@if (USE_SANDBOX)

			<form id="membershipPaypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_cart">
			<input type="hidden" name="upload" value="1">
			<input type="hidden" name="business" value="curran.chris-facilitator@gmail.com">
			<input type="hidden" name="item_name_1" id="item_name_1" value="Membership Fees">
			<input type="hidden" name="amount_1" id="amount_1">
			<input type="hidden" name="custom" id="custom" value="">
			<input type="hidden" name="currency_code" value="USD">
			<input type="hidden" name="return" value="http://www.stpeteastronomyclub.org/resources.php">
			</form>

			@else

			<form id="membershipPaypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_cart">
			<input type="hidden" name="upload" value="1">
			<input type="hidden" name="business" value="SPACExaminer@gmail.com">
			<input type="hidden" name="item_name_1" id="item_name_1" value="Membership Fees">
			<input type="hidden" name="amount_1" id="amount_1">
			<input type="hidden" name="custom" id="custom" value="">
			<input type="hidden" name="currency_code" value="USD">
			<input type="hidden" name="return" value="http://www.stpeteastronomyclub.org/resources.php">
			</form>

			@endif



		</div>
	</div>


@endsection

@section('footer')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.1.0/moment.min.js"></script>

<script>
	$().ready(function(){

		$("#membershipForm").on("change", function(event){
			updateCosts();
		});

		$("#membershipForm").submit(function(event){
			//
			// prevent default posting of form
			//
			event.preventDefault();

			alert("submit");
		});

		$('.minor-age').blur(function () {
			$(this).removeClass('error-border');
			var val = $(this).val();
			
			if (val !== '') {
				var dateReg = /^\d{2}\-\d{2}\-\d{4}$/;
				if(!dateReg.test(val)){
					$(this).addClass('error-border');
					$(this).focus();
					return false;
				}
			}
		}); 


		$("#email").focus();
	});


	function isValid(val, domId, errMsg) {
			if (val === '') {
					alert(errMsg);
					$(domId).focus();
					return false;
			}
			return true;
	}

	function isValidEmail(email, domId, errMsg) {
			if (email === '') {
					alert(errMsg);
					$(domId).focus();
					return false;
			}

			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!filter.test(email)) {
					alert(errMsg);
					$(domId).focus();
					return false;
			}

			return true;
	}

	function updateCosts() {
			var val = 0;
			var checked = $("input:checked");

			_.each(checked, function(el) {
					switch(el.id) {
							case 'cmembertype_0':   val += 20;  break;
							case 'cmembertype_1':   val += 25;  break;
							case 'cmembertype_2':   val += 50;  break;
							case 'cmembertype_3':   val += 100; break;

							// case 'cmagazine_1':     val += 32.95;   break;
							// case 'cmagazine_2':     val += 34;      break;
					}
			});
			currentTotal = val;
			$("#totalCostVal").text(val);
			$("#totalCostVal").formatCurrency();
	}


</script>
@endsection