<?php 
/*
	COLOR
*/


// ANTHRACITE
//$color2 = "#2c3e50";
//$color1 = "#34495E";

//RED
//$color2 = "#c0392b";
//$color1 = "#e74c3c";

// GREEN
//$color2 = "#27ae60";
//$color1 = "#2ecc71";

// TURQUOISE
//$color1 = "#16a085";
//$color2 = "#1abc9c";

// ORANGE
//$color2 = "#f39c12";
//$color1 = "#e67e22";

// BLUE
$color1 = "#2980b9";
$color2 = "#3498db";

// NOIR AND Turquoise
//$color1 = "#393A3C";
//$color2 = "#1abc9c";

// ANTHRACITE 2
//$color2 = "#1E8BC3";
//$color1 = "#34495E";


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIP DIALER</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./assets/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,100,700' rel='stylesheet' type='text/css' />
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/webdialer.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./assets/js/jssip.js" ></script>
    <script src="./assets/js/vibrate.jquery.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>

input[placeholder], [placeholder], *[placeholder] {
                color:#ecf0f1 !important;
        }
        ::-webkit-input-placeholder { /* WebKit browsers */
            color:#ecf0f1 !important;
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color:#ecf0f1 !important;
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            color:#ecf0f1 !important;
        }
        :-ms-input-placeholder { /* Internet Explorer 10+ */
            color:#ecf0f1 !important;
        }

        input:focus, textarea:focus, button:active {
          box-shadow: 0 0 1px #ecf0f1 !important;
        }

        a:hover{
                text-decoration:none;
        }
        *:focus {
        outline: 0 !important;
        }

        .btn-noir {
          padding:10px;
          background-image:none !important;
          -webkit-box-shadow:none !important;
          background-color:<?php print $color1;?> !important;
          background-position:initial initial;
          background-repeat:initial initial;
          height:64px;
          width:64px;
          margin-right:10px;
          margin-left:10px;
          border: 1px solid <?php print $color2;?>;
          -webkit-box-shadow:0 0 13px <?php print $color2;?> !important;
          -moz-box-shadow:0 0 13px <?php print $color2;?> !important;
          box-shadow:0 0 13px <?php print $color2;?> !important;
          border-radius:35px;
        }
        .btn-noir span {
          color:#FFF;
          font-family:Roboto;
          text-shadow:#000000 1px 1px 0;
        }

</style>

 </head>





  <body style="background-color:<?php print $color1;?>;">
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">











	
          <div class="masthead clearfix">
            <div class="inner" style="padding: 30px 0">
              <h3 class="masthead-brand">SIP DIALER</h3>

              <ul class="nav masthead-nav" style="margin:0;">
                <li class="active"><a href="#"><i class="icon-phone"></i> Calls</a></li>
                <li><a href="#"><i class="icon-comments"></i> Messages</a></li>
              </ul>
            </div>
          </div>










          <div style="position:relative;" class="REGISTERVIEW VIEW" >
            <h3>Welcome</h3>
            <p>Please enter your desired number / name:<br /></p>
		<input style="color:#FFF;background-color:<?php print $color1;?>;box-shadow:none;-webkit-box-shadow:none;-webkit-transition:none;text-align:center;font-size:20px;height:30px;padding:10px;border-radius:3px;border:1px solid <?php print $color2;?>;"   
			type="text" name="login" id="login" placeholder="Login" value=""/><br />
            </p>
            <p>
              <button style="font-weight:700;font-size:18px;padding:10px 20px;" 
			class="register btn btn-lg">REGISTER</button>
            </p>
		<br />
          </div>




<div style="position:relative;display:none;" class="CALLOUTVIEW VIEW" >
            	<h3><span class="to">Calling </span></h3>
		<h4 style="font-size:80px;"><i class="icon-phone"></i></h4>
              <button style="font-weight:700;font-size:18px;padding:10px 20px;" class="hangup btn-danger btn btn-lg">HANGUP</button>
                <br />
                <br />
                <br />
          </div>


<div style="position:relative;display:none;" class="CALLINVIEW VIEW" >
            <h3><span class="from"></span></h3>
		<h4 style="font-size:80px;" class="vibreur"><i class="icon-phone"></i></h4>
              <button style="font-weight:700;font-size:18px;padding:10px 20px;" class="answer btn-success btn btn-lg">ANSWER</button>
              <button style="font-weight:700;font-size:18px;padding:10px 20px;" class="refuse btn-danger btn btn-lg">REFUSE</button>
              <button style="display:none;font-weight:700;font-size:18px;padding:10px 20px;" class="hangup btn-danger btn btn-lg">HANGUP</button>
                <br />
                <br />
                <br />
          </div>












	  
	<div class="DIALVIEW" style="display:none;position:relative;">
		
                	<input id="number2dial" style="text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);font-size:24px;background-color:<?php print $color1;?>;box-shadow:none;-webkit-box-shadow:none;-webkit-transition:none;text-align:center;height:30px;padding:10px;border-radius:3px;border:1px solid <?php print $color2;?>;width:230px;margin-bottom:20px;color:#FFF;"   
                        type="text" name="dial" value=""/>
		<br />


		<button class="digit btn-inverse btn btn-noir">
			<span style="font-size: 20px; font-weight: 700;">1</span><br/>
		</button>
		<button class="digit btn-inverse btn btn-noir">
			<span style="font-size: 20px; font-weight: 700;">2</span><br/>
			<span style="color: #bdc3c7; font-size: 10px; font-weight: 700;">ABC</span>
		</button>
		<button class="digit btn-inverse btn btn-noir">
                        <span style="font-size: 20px; font-weight: 700;">3</span><br/>
                        <span style="color: #bdc3c7; font-size: 10px; font-weight: 700;">DEF</span>
                </button>
	
		<br>
		<br>
		<button class="digit btn-inverse btn btn-noir">
                        <span style="font-size: 20px; font-weight: 700;">4</span><br/>
                        <span style="color: #bdc3c7; font-size: 10px; font-weight: 700;">GHI</span>
                </button>
                <button class="digit btn-inverse btn btn-noir">
                        <span style="font-size: 20px; font-weight: 700;">5</span><br/>
                        <span style="color: #bdc3c7; font-size: 10px; font-weight: 700;">JKL</span>
                </button>
                <button class="digit btn-inverse btn btn-noir">
                        <span style="font-size: 20px; font-weight: 700;">6</span><br/>
                        <span style="color: #bdc3c7; font-size: 10px; font-weight: 700;">MNO</span>
                </button>
	
		<br>
                <br>
                <button class="digit btn-inverse btn btn-noir">
                        <span style="font-size: 20px; font-weight: 700;">7</span><br/>
                        <span style="color: #bdc3c7; font-size: 10px; font-weight: 700;">PQRS</span>
                </button>
                <button class="digit btn-inverse btn btn-noir">
                        <span style="font-size: 20px; font-weight: 700;">8</span><br/>
                        <span style="color: #bdc3c7; font-size: 10px; font-weight: 700;">TUV</span>
                </button>
                <button class="digit btn-inverse btn btn-noir">
                        <span style="font-size: 20px; font-weight: 700;">9</span><br/>
                        <span style="color: #bdc3c7; font-size: 10px; font-weight: 700;">WYYZ</span>
                </button>

		<br>
                <br>
                <button class="digit btn-inverse btn btn-noir">
                        <span style="font-size: 20px; font-weight: 700;">*</span><br/>
                </button>
                <button class="digit btn-inverse btn btn-noir">
                        <span style="font-size: 20px; font-weight: 700;">0</span><br/>
                </button>
                <button class="digit btn-inverse btn btn-noir">
                        <span style="font-size: 20px; font-weight: 700;">#</span><br/>
                </button>
		<br><br>
              <button style="font-weight:700;font-size:18px;padding:10px 20px;width:230px;" 
			class="call btn-success btn"><i class="icon-phone"></i> CALL</button>

          </div>







    <!-- Audios -->
    <audio id="audio_remote" autoplay="autoplay" />
    <audio id="ring" autoplay="autoplay" loop="true"/>






        </div>
      </div>
    </div>




<div style="position:absolute;left:0;margin:0;padding:2px 0;border-radius:0px;border:0px;top:0;width:100%;" class="alert alert-danger">
	<span class="inforegister" >Please Login...</span> <span class="infocall"></span>
</div>







<script>

$('#clickplay').click(function(){
});

<!-- SIP -->
var SIP;
var rtcSession;
var CALLING = 0;
var REGISTERED = 0;

// VIBREUR 
$('.vibreur').jrumble({
        x: 0,
        y: 0,
        rotation: 5
});

// PRESS DIGITS
  $('.digit').click(function(){
        if ( CALLING == 1) {
       		DTMF( $(this).find('span').html() );
		//rtcSession.sendDTMF( $(this).find('span').html());      
        }else{
                $('#number2dial').val( $('#number2dial').val() + $(this).find('span').html() ) ;
        }
  });

// REGISTER
  $('.register').click(function(){
    
    var configuration = {
            'ws_servers': 'ws://sipi.fr:5066',
            'uri': 'sip:'+$('#login').val()+'@sipi.fr',
            'password': '*',
            'display_name': "'"+$('#login').val()+"'",
            'trace_sip': true
    };

    SIP = new JsSIP.UA(configuration);
    SIP.start();
    SIP.register(); 
    Event();
  });

// UNREGISTER
  $('.unregister').click(function(){
    SIP.unregister(); 
  });


// SEND MESSAGE 
  $('.sendbtn').click(function(){
    sendMessage( $('#call').val() );
  });

//HANGUP
$('.hangup').click(function(){
    if( rtcSession ){
	rtcSession.terminate();
	$('.VIEW').delay(500).fadeOut();
	$('.DIALVIEW').delay(500).fadeIn();
	$('.call').show();
    }
  }); 

//REFUSE
$('.refuse').click(function(){
    if( rtcSession ){
	rtcSession.terminate();
	$('#ring').attr('src' , '' );
	$('.VIEW').delay(500).fadeOut();
	$('.DIALVIEW').delay(500).fadeIn();
	$('.call').show();
    }
}); 

// ANSWER
$('.answer').click(function(){
    if( rtcSession ){
	 var options = { 'mediaConstraints': { audio: true, video: false } };
	rtcSession.answer( options );
	$('.vibreur').trigger('stopRumble');
	$('#ring').attr('src' , '' );
        if (rtcSession.getRemoteStreams().length > 0) {
                $('#audio_remote').attr('src' , window.URL.createObjectURL(rtcSession.getRemoteStreams()[0]) );
        }
	$('.answer').hide();
	$('.refuse').hide();
	$('.CALLINVIEW .hangup').fadeIn();
    }
}); 


// DIAL WITH ENTER
$(document).keypress(function(e) {
	if (REGISTERED==1 && e.which == 13 && CALLING == 0) {
		if( $('#number2dial').val() != "" ){
			CALLING = 1;
	  		$('.call').hide();
			Invite( $('#number2dial').val() );
		}
	}
});
$('.call').click(function(){
	if (REGISTERED==1 && CALLING == 0) {
                if( $('#number2dial').val() != "" ){
                        CALLING = 1;
	  		$('.call').hide();
                        Invite( $('#number2dial').val() );
                }
        }

});


// EVENTS
function Event(){
        SIP.on('registered', function(e){ 
		$('.inforegister').html("Registered as <b>"+$('#login').val()+"</b>" ).parent().removeClass('alert-danger').addClass('alert-info'); 
		$(".VIEW").fadeOut(); 
		REGISTERED = 1;
		$(".DIALVIEW").delay(500).fadeIn();
	});

        SIP.on('unregistered', function(e){  
		$('.inforegister').html("Unregistered").parent().addClass('alert-danger').removeClass('alert-info'); 
		$(".DIALVIEW").hide();
	  	$('.VIEW').fadeOut();
		REGISTERED = 0;
	  	$('.REGISTERVIEW').delay(500).fadeIn();
	});

        SIP.on('registrationFailed', function(e){  
		$('.inforegister').html("Fail to Register").parent().removeClass('alert-info').addClass('alert-danger'); 
		REGISTERED = 0;
	  	$('.VIEW').fadeOut();
	  	$('.REGISTERVIEW').delay(500).fadeIn();
	});

        SIP.on('newMessage', function(e){  
		alert('Nouveau message recu'); 
	});

        SIP.on('connected', function(e){});

        SIP.on('disconnected', function(e){
		$('.inforegister').html("Server Unavailable").parent().removeClass('alert-info').addClass('alert-danger'); 
	});
	
	SIP.on('newRTCSession', function(e){
		console.log(e);
		if(rtcSession){
			e.data.session.terminate();
			return false;
		}else{
			if( e.data.originator == "remote" ){
				
				$('#ring').attr('src' , 'assets/sounds/ring.wav' );

				rtcSession = e.data.session;
	  			$('.VIEW').fadeOut();
				
				// DISPLAY CORRECTS BUTTONS
				$('.answer').show();
        			$('.refuse').show();
        			$('.CALLINVIEW .hangup').hide();
				$('.from').html("Incoming Call from "+rtcSession.remote_identity.display_name);
				$('.vibreur').trigger('startRumble');
	
		  		$('.CALLINVIEW').delay(500).fadeIn();
	
		  		CALLING = 1;
				
				rtcSession.on('failed', function(e) {
          				$('.infocall').html('- Call ended ');
	  				$('.to').html("Call Ended");
	  				$('.VIEW').fadeOut();
	  				$('.DIALVIEW').delay(500).fadeIn();
					$('.call').show();
	  				CALLING = 0;
	  				rtcSession = null;
				});
				rtcSession.on('ended', function(e) {
          				$('.infocall').html('- Call ended ');
	  				$('.to').html("Call Ended");
	  				$('.VIEW').fadeOut();
	  				$('.DIALVIEW').delay(500).fadeIn();
					$('.call').show();
	  				CALLING = 0;
	  				rtcSession = null;
				});


			}else if( e.data.originator == "local" ){
		  		$('.VIEW').fadeOut();
		  		$('.CALLOUTVIEW').delay(500).fadeIn();
			}
		}
	});
}


/*
******************************
 SEND DTMF
******************************
*/
function DTMF( tone ){

var options = {
  'duration': 160,
  'extraHeaders': [ 'X-Foo: foo' ],
  'eventHandlers': {
    'succeeded': function(e){},
    'failed': function(e){}
  }
};

	//var dtmf = new JsSIP.RTCSession.DTMF( SIP );
	rtcSession.sendDTMF(tone, options);

}


/*
******************************
 SEND INVITE
******************************
*/
function Invite( ext ){
      $('.to').html("Calling "+ext+"...");
      var eventHandlers = {
        'progress': function(e){
	  CALLING = 1;
          $('.infocall').html('- Call is in progress');
	  $('.to').html("Ringing... ("+ext+")");
        },
        'failed': function(e){
          $('.infocall').html('- Call failed '+ e.data.cause);
	  $('.VIEW').delay(2000).fadeOut();
	  $('.DIALVIEW').delay(500).fadeIn();
	  $('.call').show();
	  $('.to').html('Not Found');
	  CALLING = 0;
	  rtcSession = null;
        },
        'ended': function(e){
	  if( e.data.cause != "undefined" ){
	  	e.data.cause = "";
	  }
          $('.infocall').html('- Call ended '+ e.data.cause);
	  $('.to').html("Call Ended");
	  $('.VIEW').fadeOut();
	  $('.DIALVIEW').fadeIn();
	  $('.call').show();

	  CALLING = 0;
	  rtcSession = null;
        },
        'started': function(e){
          rtcSession = e.sender;
	  CALLING = 1;
	  $('.to').html("Call with "+ext);
          $('.infocall').html('- Calling '+ext+'...');
        
        if (rtcSession.getRemoteStreams().length > 0) {
                $('#audio_remote').attr('src' , window.URL.createObjectURL(rtcSession.getRemoteStreams()[0]) );
        }

        }
      };

      var options = {
        'eventHandlers': eventHandlers,
        'extraHeaders': [ 'X-FROM: WEB' ],
        'mediaConstraints': {'audio': true, 'video': false}
      };

      // SIP CALL
      SIP.call('sip:'+ext+'@sipi.fr', options);
}






/*
******************************
// SIP MESSAGE
******************************
*/
function sendMessage( text , uri){
        var eventHandlers = {
          'succeeded': function(e){ /* Your code here */ },
          'failed':    function(e){ /* Your code here */ }
        };

        var options = {
          'eventHandlers': eventHandlers
        };

        SIP.sendMessage(uri, text, options);
}
</script>

 
 </body>
</html>
