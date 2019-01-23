function baserender(data) {
    $('#title').val('');
  	$('#name').val('');
    $('#text').val(''); 
    $('#update_btn').hide();
    $('#home_btn').hide();
    $('#btn').show();
    
    for(i=Object.keys(result.items).length-1; i>=0; i--) {
    $('#result_form').append('<div class="card-body"><br><h2 class="card-title">Title: '+result.items[i].title+'</h2>                                <br><h3 class="card-title">Name: '+result.items[i].name+'</h3><br><p class="card-text">'+result.items[i].text+'</p><br><p><button type="button" class="btn btn-info" onclick=readdata(this) value="'+result.items[i].id+'">Read</button> <button type="button" class="btn btn-info" onclick=deldata(this) value="'+result.items[i].id+'">Delete</button> <button type="button" class="btn btn-info" onclick=updatedata(this) value="'+result.items[i].id+'">Update</button></p><div class="card-footer text-muted">                                       Updated on: '+result.items[i].updated+'<br></div></div>');
            }
}

function backrender(data) {
    for(i=Object.keys(result.items).length-1; i>=0; i--) {
    $('#result_form').append('<div class="card-body"><br><h2 class="card-title">Title: '+result.items[i].title+'</h2>                                <br><h3 class="card-title">Name: '+result.items[i].name+'</h3><br><p class="card-text">'+result.items[i].text+'</p><br><p><button type="button" class="btn btn-info" onclick=readalldata(this) value="'+result.items[i].id+'">To Home</button> <button type="button" class="btn btn-info" onclick=deldata(this) value="'+result.items[i].id+'">Delete</button> <button type="button" class="btn btn-info" onclick=updatedata(this) value="'+result.items[i].id+'">Update</button></p><div class="card-footer text-muted">                                       Updated on: '+result.items[i].updated+'<br></div></div>');
            }
}

function updaterender(data) {
    for(i=Object.keys(result.items).length-1; i>=0; i--) {
    title = result.items[i].title; 
    name = result.items[i].name;
    text = result.items[i].text;
    id = result.items[i].id;
    $('#title').val(title);
  	$('#name').val(name);
    $('#text').val(text); 
    $('#idname').val(id);
  	$('#btn').hide();
  	$('#update_btn').show();
    $('#home_btn').show();
        
}
                                         }

