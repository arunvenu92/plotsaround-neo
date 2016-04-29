$( document ).ready(function() {
			$('#search_price').val("0");
			$('#search_locality').val("0");
		});
		 $(function(){

			$("#dropdown-menu1").on('click', 'li a', function(){
			  $("#price_button:first-child").text($(this).text());
			  $("#price_button:first-child").val($(this).text());
		   });
            
			$("#dropdown-menu2").on('click', 'li a', function(){
			  $("#locality_button:first-child").text($(this).text());
			  $("#locality_button:first-child").val($(this).text());
		   });
		});
		
	   function checkValue()
	   {
		   var searchForm = document.forms["searchForm"];
		   
		   var word = searchForm.elements["searchDb"].value;
		   var locality =searchForm.elements["search_locality"].value;
		   var price = searchForm.elements["search_price"].value;
		   
		   if(word=="" && locality == 0 && price == 0)
		   {
			 alert("Please give anyone of the search criteria"); 
             return false; 			 
		   }
		   else
		   {
			   return true;
		   }
		
		}