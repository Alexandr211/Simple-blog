$( document ).ready(function() { 
   $.ajax({
        url: '../controllers/getblogtext.php', //url 
        type: "POST", //метод отправки
      //  dataType: "html", //формат данных
        data: { message: 1 },  // 
        success: function(response) { //Данные отправлены успешно
        	$('#title').val('');
            $('#name').val('');
            $('#text').val('');
            $('#idname').val('');
            result = $.parseJSON(response); 
          //  console.log(result);
           //   console.log(Object.keys(result.items).length);
          baserender(result);
        
    	},
    	error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});
    
});
