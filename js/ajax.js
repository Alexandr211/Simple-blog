function sendAjaxForm(result_form, ajax_form, URL) {
    $.ajax({
        url: URL, //url 
        type: "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сериализуем объект
        success: function(response) { //Данные отправлены успешно
            $('#title').val('');
            $('#name').val('');
            $('#text').val('');
            $('#idname').val('');
            $('#update_btn').hide();
            $('#btn').show();
            //delete old data
        	$( '#result_form' ).children().remove();
            //get actual data
            result = $.parseJSON(response); 
           // console.log(result);
           // console.log(Object.keys(result.items).length);
          baserender(result);
    
    	},
    	error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});
}