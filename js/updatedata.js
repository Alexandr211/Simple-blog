function updatedata(link) {
var val = $(link).val();
$.ajax({
        url: '../controllers/getreadtext.php', //url 
        type: "POST", //метод отправки
      //  dataType: "html", //формат данных
        data: { message: val },  // 
        success: function(response) { //Данные отправлены успешно
        	//delete old data
        	$( '#result_form' ).children().remove();
            result = $.parseJSON(response); 
          //  console.log(result);
           //   console.log(Object.keys(result.items).length);
          updaterender(result);
        
    	},
    	error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});    

}


