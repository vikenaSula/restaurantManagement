
<body class="harta">
  <section>
	<div id='map'></div>
 
<script>
	function initMap(){

		var options ={
			zoom: 15,
			center: {lat :41.1102, lng:20.0867}
		}

  var map = new  google.maps.Map(document.getElementById('map'),options);
  //marker1
   var marker = new google.maps.Marker({
 	position:{lat :41.1146 ,lng:20.0882},
 	map:map
 });

   var infoWindow = new google.maps.InfoWindow({
   	content: '<a href="<?php echo base_url(); ?>/infoLokal/BarLiving"><h2>Bar Living</h2></a>'
   });

   marker.addListener('click',function(){
   	infoWindow.open(map,marker);
   });

   //mark2
     var marker2 = new google.maps.Marker({
 	position:{lat : 41.1073 ,lng:20.0673},
 	map:map
 });

   var infoWindow2 = new google.maps.InfoWindow({
   	content: '<a href="<?php echo base_url(); ?>/infoLokal/RestorantVilaBenvenuto"><h2>Restorant Vila Benvenuto</h2></a>'
   });

   marker2.addListener('click',function(){
   	infoWindow2.open(map,marker2);
   });


   //mark3 
  
     var marker3 = new google.maps.Marker({
 	position:{lat : 41.1122 ,lng: 20.0783},
 	map:map
 });

   var infoWindow3 = new google.maps.InfoWindow({
   	content: '<a  href="<?php echo base_url(); ?>/infoLokal/FastFoodOpa"><h2>Fast Food Opa</h2></a>'
   });

   marker3.addListener('click',function(){
   	infoWindow3.open(map,marker3);
   });


   //mark4
     var marker4 = new google.maps.Marker({
 	position:{lat : 41.119910 ,lng: 20.076660},
 	map:map
 });

   var infoWindow4 = new google.maps.InfoWindow({
   	content: '<a href="<?php echo base_url(); ?>/infoLokal/RealScampis"><h2>Real Scampis</h2></a>'
   });

   marker4.addListener('click',function(){
   	infoWindow4.open(map,marker4);
   });

   //mark5
     var marker5 = new google.maps.Marker({
 	position:{lat : 41.112560,lng: 20.080760},
 	map:map
 });

   var infoWindow5 = new google.maps.InfoWindow({
   	content: '<a href="<?php echo base_url(); ?>/infoLokal/BarFriends"><h2>Bar Friends</h2></a>'
   });

   marker5.addListener('click',function(){
   	infoWindow5.open(map,marker5);
   });



   //mark6
     var marker6 = new google.maps.Marker({
 	position:{lat : 41.112560 ,lng:20.080760},
 	map:map
 });

   var infoWindow6 = new google.maps.InfoWindow({
   	content: '<a href=""<?php echo base_url(); ?>/infoLokal/CoffeHouse"><h2>Coffe House</h2></a>'
   });

   marker6.addListener('click',function(){
   	infoWindow6.open(map,marker6);
   });

   //mark7
     var marker7 = new google.maps.Marker({
 	position:{lat : 41.112280 ,lng:20.079890},
 	map:map
 });

   var infoWindow7 = new google.maps.InfoWindow({
   	content: '<a href="<?php echo base_url(); ?>/infoLokal/PrestoPasta"><h2>Presto Pasta</h2></a>'
   });

   marker7.addListener('click',function(){
   	infoWindow7.open(map,marker7);
   });
 //mark8
     var marker8 = new google.maps.Marker({
 	position:{lat : 41.112560 ,lng:20.080760},
 	map:map
 });

   var infoWindow8 = new google.maps.InfoWindow({
   	content: '<a href="<?php echo base_url(); ?>/infoLokal/TruthLoungueBar"><h2>Truth Loungue Bar</h2></a>'
   });

   marker8.addListener('click',function(){
   	infoWindow8.open(map,marker8);
   });

   //mark9
     var marker9 = new google.maps.Marker({
 	position:{lat :41.1154371 ,lng:20.0715379},
 	map:map
 });

   var infoWindow9 = new google.maps.InfoWindow({
   	content: '<a href="<?php echo base_url(); ?>/infoLokal/PiceriBasilico"><h2>Piceri Jurevi</h2></a>'
   });

   marker9.addListener('click',function(){
   	infoWindow9.open(map,marker9);
   });


   //mark10
     var marker10 = new google.maps.Marker({
 	position:{lat : 41.117998 ,lng:20.093199},
 	map:map
 });

   var infoWindow10 = new google.maps.InfoWindow({
   	content: '<a href="<?php echo base_url(); ?>/infoLokal/TavernaAttika"><h2>Taverna Attika</h2></a>'
   });

   marker10.addListener('click',function(){
   	infoWindow10.open(map,marker10);
   });      
}

</script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_Gjdm_0nJk17UVBPoV5Im40uQeguoRAo&callback=initMap"></script>
  </section>
</body>