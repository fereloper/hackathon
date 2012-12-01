measurement_added=0;
jQuery(document).ready(function(){
	 $('.accordion-toggle').click(function(){
		 
		 
	        
	       var city_id = $(this).attr("id");
	       
	        
	       if (city_id == "-1")
	           return false;
	       $.ajax({
	            url:"http://localhost/hackathon/index.php/report/getReportGenerate",
	            type: "post",
	            data: "city_id=" + city_id,
	            success: function(data){
	                $('#all-list').hide("slow");
	                $('#viewReport').html(data);
	            }
	       }); 
	    });
    $('#city-list').change(function(){
        
       var city_id = $(this).val();
       
        $.ajax({
            url:"http://localhost/hackathon/index.php/report/getThanas",
            type: "post",
            data: "city_id=" + city_id,
            success: function(data){
                $('#modelWrapper').html(data);
                $('#modelWrapper select').removeAttr("disabled");
                
            }
        }); 
    });
    
    $('#filterButton').click(function(){
        $('#all-list').hide("slow");
        var city_id = $("#city-list1").val();
       if (city_id == "-1")
           return false;
       $.ajax({
            url:"http://localhost/hackathon/index.php/report/getReportGenerate",
            type: "post",
            data: "city_id=" + city_id,
            success: function(data){
                
                $('#viewReport').html(data);
                
            }
        });  
    });
    $('.add-measurement').click(function(){
    	
    		$('#measurement-set').append('<select><option >Ph</option><option>Nitrates</option><option>Phosphosal</option></select><input type="text"></input>');
    		measurement_added++;
    		if(measurement_added==3){
    	  		$('.add-measurement').hide();
    	   	}
    	
    	
    });
    
    
});