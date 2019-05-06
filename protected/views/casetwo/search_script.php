<script>
	function loadDoc() {
$('.call_logs').load("/geep/marketmoni/assets/sech.php?q=" + $('#Casetwo_cust_phone_number').val().trim())
if ($('#Casetwo_cust_phone_number').val().trim().length==11){
     $(".call_logs").stop().slideToggle('600');
	 }
  // var xhttp = new XMLHttpRequest();
	// //console.log("current state is " + this.readyState);
	// xhttp.onreadystatechange = function() {
  // if (this.readyState == 4 && this.status == 200) {
	// 		$(".call_logs").html(this.responseText);
	// 		if ($('#Casetwo_cust_phone_number').val().trim().length==11){
	//      $(".call_logs").stop().slideToggle('600');
	// 	 }
	// 			    }
	//   };
	//   xhttp.open("GET", "/geep/marketmoni/assets/sech.php?q=" + $('#Casetwo_cust_phone_number').val().trim(),true);
	//   xhttp.send();
    //console.log("current status is " + this.status+);
	}

</script>
