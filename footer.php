<style type="text/css">
	#map{
		float: right;
		height: 150px;
		width: 300px;
	}
</style>
<div class="row">
	<div class="col-sm-3">
		<br><center>
		<img src="asset/image/unila.png" width="72px" height="73px">
		<p>Fakultas Matematika dan Ilmu Pengetahuan Alam</p>
		</center>
	</div>
	<div class="col-sm-5">
		<br>
		Gedung Dekanat Lt.4<br>
		Jl. Soemantri Brojonegoro No.1 Rajabasa Bandarlampung<br>
		Email : office@fmipa.unila.ac.id<br>
		<a href="http://fmipa.unila.ac.id/">Web : http://fmipa.unila.ac.id/</a>
	</div>
	<div class="col-sm-4">
		<div id='map'></div>
	</div>
</div>
	<hr>
	<center>
		<a href="#">Copyright © 2018 FMIPA University of Lampung</a>
	</center>


<script>
      var map;
      function initMap() {
      var myLatLng ={lat: -5.367225, lng: 105.243414};
        map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 17
        });
      var marker = new google.maps.Marker({
		    position: myLatLng,
		    map: map,
		    info : "Dekanat FMIPA Universitas Lampung"
		});
  	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4noGQHoz7ZoG7DYMbxaYbofksVSAXJJI&callback=initMap">
</script>