<link href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.0/lity.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.0/lity.min.css" rel="stylesheet"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.0/lity.js"></script>

<style>
@import url('https://fonts.googleapis.com/css?family=Raleway');
.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 0px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 50%;
	height: 50%;
}
</style>

<script>
jQuery(document).ready(function($){
 
	if (sessionStorage.getItem('advertOnce') !== 'false') {
	$('body').append('')
		sessionStorage.setItem('advertOnce','true');
		
		// add image here
		lity('https://cdn.getmyparcel.com/img/offers/GetMyParcel-Christmas-Offers.jpg');
	}
	 
	$('#advert-once .advert-button').on('click',function(){
		$('#advert-once').hide();
	});
	  
	$('#reset-session').on('click',function(){
		sessionStorage.setItem('advertOnce','');
	});
 
});
</script>
