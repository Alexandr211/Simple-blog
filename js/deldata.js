function deldata(link) {
var val = $(link).val();
$.ajax({
        url: '../controllers/getdeldata.php', //url 
        type: "POST", //
      //  dataType: "html", //
        data: { message: val },  // 
        success: function(response) { //
        	//delete old data
        	$( '#result_form' ).children().remove();
            //get actual data
            result = $.parseJSON(response); 
          //  console.log(result);
           //   console.log(Object.keys(result.items).length);
          baserender(result);
        
    	},
    	error: function(response) { // 
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});    

}