function readdata(link) {
var val = $(link).val();
$.ajax({
        url: '../controllers/getreadtext.php', //url 
        type: "POST", //
      //  dataType: "html", //
        data: { message: val },  // 
        success: function(response) { //
        	//delete old data
        	$( '#result_form' ).children().remove();
            result = $.parseJSON(response); 
          //  console.log(result);
           //   console.log(Object.keys(result.items).length);
          backrender(result);
        
    	},
    	error: function(response) { // 
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});    

}