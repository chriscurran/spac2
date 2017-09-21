//-----------------------------------------------------------------------------
//-----------------------------------------------------------------------------
var LIB = LIB || {};

LIB.post = function(_cmd,_parms,_callback) {

	LIB._post("./_form.php",_cmd,_parms,_callback);
}

LIB._post = function(_script,_cmd,_parms,_callback) {

	_callback = _callback || null;

	//
	// json'ize the parms
	//
	_parms = _parms || {};
	var parms = encodeURIComponent(JSON.stringify(_parms));

	//
	// fire off the request to script handler
	//
	var request = $.ajax({
		url: _script,
		type: "post",
		data: "cmd="+_cmd+"&parms="+parms
	});

	//
	// callback handler that will be called on success
	//
	request.done(function (response, textStatus, jqXHR){
		try {
			if (_callback !== null) {
				var result = JSON.parse(response);
				var arg = (typeof _callback.arg === "undefined") ? null:_callback.arg;

				_callback.success(result,arg);
			}
		}
		catch (e) {
			$("#error").html(response.replace("\n","<br>"));
			alert("Fatal error:" + e.message);
			return;
		}
	});

	//
	// callback handler that will be called on failure
	//
	request.fail(function (jqXHR, textStatus, errorThrown){
		if (_callback !== null) {
			if (typeof _callback.failure !== "undefined")
				_callback.failure(jqXHR);
		}
	});

	//
	// callback handler that will be called regardless
	// if the request failed or succeeded
	//
	request.always(function () {
		if (_callback !== null) {
			if (typeof _callback.always !== "undefined")
				_callback.always();
		}
	});

}
