 var displayarray = []
  $(document).ready(function(){

 $("#btn").click(function(){
    var pickup =  $("#inputGroupSelect01").val();
    var drop =    $("#inputGroupSelect02").val();
    var type =    $("#inputGroupSelect03").val();
    var luggage = $("#inputGroupSelect04").val();

     $.ajax({
	    	url:'index2.php',
	    	method:'POST',
	    	data:{
	    		pickup:pickup,
	    		 drop:drop,
	    		 type:type,
	    		 luggage:luggage
	    	},
	    	//dataType:"json",
	    	//contentType:"application/json; charset=utf-8",
	    	success:function(result) {
	    		$("#btn").text(result);
	        //alert(result);
        	},
          error:function() {
          alert("error");
		   }
	  });
	});
});