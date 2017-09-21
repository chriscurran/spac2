@extends('layouts.app')

@section("header")
	<link href="//cdn.datatables.net/1.10.3/css/jquery.dataTables.min.css" rel="stylesheet">

	<style type="text/css">
		.admin-canvas {
			margin-left: 15px;
		}

		#members_dt_wrapper {
			padding-top:15px;
		}

	</style>
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Admin Place Holder Heading</div>


        <div class="panel-body">

			<nav class="navbar">
			  <div class="container-fluid" style="padding-left:0;">
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="#">Members</a></li>
			      <li><a href="#">Page 1</a></li>
			      <li><a href="#">News</a></li>
			    </ul>
			  </div>
			</nav>        

			<div class="admin-canvas">

				<!-- members page layout -->
				<div style='display:none;' id='page_members'>
					<!-- tab descriptors -->
					<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
						<li><a href="#members_tab_all"		data-toggle="tab">All Members</a></li>
						<li><a href="#members_tab_renew"		data-toggle="tab">Renewals</a></li>
						<li><a href="#members_tab_officers"	data-toggle="tab">Officers</a></li>				
					</ul>

					<!-- tab content -->
					<div id="tab-content" class="tab-content">

						<!-- tab 1 - all members -->
						<div class="tab-pane active" id="members_tab_all">
							<!-- tab 1 - all members content -->
							<div class='' id='members_all'>
							<!-- ---------- -->
								<table id='members_dt' class='table table-striped table-hover'>
								<thead>
									<tr>
									<th>Name</th>
									<th>Spouse</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Joined</th>
									<th>Type</th>
									<!-- <th>Mobile</th> -->
									</tr>
								</thead>
								</table>
								<button id='member_edit_new' class='btn' style='margin-top:4px;'>Add New</button>
								<button id='member_generate_email_list' class='btn' style='margin-left:20px; margin-top:4px;' >Email all</button>
								<button id='member_generate_nl_list' class='btn' style='margin-top:4px;' >Newsletter mailing lists</button>
								<button id='member_generate_member_list' class='btn' style='margin-top:4px;' >Member list</button>
							<!-- ---------- -->
							</div>
							<!-- tab 1 - all members content end -->
						</div>
						<!-- tab 1 - all members end-->

						<!-- tab 2 - renewal members -->
						<div class="tab-pane active" id="members_tab_renew">
							<!-- tab 2 - renew members content -->
							<div class='' id='members_renew'>

								<table id='members_renew_dt' class='table table-striped table-hover'>
								<thead>
									<tr>
									<th>Name</th>
									<th>Renew Date</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Type</th>
									</tr>
								</thead>
								</table>
								<button id='member_renew_generate_email_list' class='btn' style='margin-top:4px;' >Email all</button>
								<button id='member_renew_generate_csv' class='btn' style='margin-top:4px;' >Export CSV</button>
							</div>
							<!-- tab 2 - renew members content end -->
						</div>
						<!-- tab 2 - renewal members end -->

						<!-- tab 3 - officers -->
						<div class="tab-pane active" id="members_tab_officers">
							<!-- tab 3 - officers content -->
							<div class='' id='members_officers'>
								<table id='members_officers_dt' class='table table-striped table-hover'>
								<thead>
									<tr>
									<th>Name</th>
									<th>Office</th>
									<th>Email</th>
									<th>Phone</th>
									</tr>
								</thead>
								</table>
								<button id='member_officers_generate_email_list' class='btn' style='margin-top:4px;' >Email all</button>
							</div>
							<!-- tab 3 - officers content end -->
						</div>
						<!-- tab 3 - officers end -->
					</div id="tab-content" class="tab-content">
					<!-- end of tabs -->
				</div>

        	</div>
        </div>
    </div>
@endsection

@section("footer")

<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.1.0/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>	

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.0/backbone-min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script>

<script>

	var globals = {};

	$().ready(function(){

		var key = "<?php echo env('API_KEY',''); ?>";

		$.ajax({
            url    : "/api/getMembers",
            type   : 'POST',
            data   : { "key": key },
            success: function (data) {
                globals.members = data;
                createTables();
            }
        });

		init();

		// $("#page_members").show();		
		globals.appEvents.trigger('set_page', {id:'members'});

		activaTab("members_tab_renew");
		activaTab("members_tab_all");
	});

	/**
	 *
	 *
	 */
	function activaTab(tab){
	    $('.nav-tabs a[href="#' + tab + '"]').tab('show');
	};		

	/**
	 *
	 *
	 */
	function init() {

		globals.appEvents = _.extend({}, Backbone.Events);
		Backbone.Router.prototype.appEvents = globals.appEvents;


		globals.appEvents.on('set_page', function(data) {
			$("#page_home").hide();
			$("#page_obs").hide();
			$("#page_members").hide();
			$("#page_member_edit").hide();
			$("#page_news").hide();
			$("#page_files").hide();
			$("#page_settings").hide();


			switch (data.id) {
				case 'members':
					$("#page_members").show();				
					break;

				case 'obs':
					$("#page_obs").show();
					break;

				case 'news':
					$("#page_news").show();
					break;

				case 'home':
				default:
					// bldCharts();
					$("#page_home").show();
					break;
			}

		});

	}	// init()


	function createTables() {

		try {
			globals.members_dt = $('#members_dt').dataTable({
				"lengthMenu": [ [10, 15, 25, 50, -1], [10, 15, 25, 50, "All"] ],
				"pageLength": 10,

				"aaData": globals.members,
				"aoColumns": [
					{ "mDataProp": "name" },
					{ "mDataProp": "spouse" },
					{ "mDataProp": "email",
					  "mRender": function ( data, type, full ) {
						return '<a href="mailto:'+data+'">'+data+'</a>';
						}
					},
					{ "mDataProp": "phone1" },
					{ "mDataProp": "joined" },
					// { "mDataProp": "cell" }										
					{ "mDataProp": "membership_type",
					  "mRender": function ( data, type, full ) {
						return membershipType2Str(data);
					   }
					}
				],
				"fnRowCallback": function( nRow, member ) {
					var $nRow = $(nRow); // cache the row wrapped up in jQuery

					//var xdate = new Date(LIB.datestr_server2client(member.renew));
					var xdate = new Date(member.renew);
					var diff = globals.now - xdate;
					var days = Math.round(diff / (1000 * 60 * 60 * 24) - 1);
					if (days > 30)
						$nRow.addClass("needs_renew_bg");
					else if (days >= -30)
						$nRow.addClass("caution_renew_bg");

					return nRow
				}
				
			});
		}
		catch(e) {
			alert(e.message)
		}


	}	//createTables


	function membershipType2Str(membership_type) {
		switch(membership_type) {
			case "s":	return "Single";		
			case "f":	return "Family";		
			case "p":	return "Patron";		
			case "b":	return "Benefactor";	
			case "t":	return "Student";		
			case "u":	return "Subscriber";			
		}
		return "Unknown";
	}


</script>

@endsection
