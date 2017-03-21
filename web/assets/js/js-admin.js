jQuery(document).ready(function(){ 


	/*
	$.ajax({
       url: baseUrl+ '/kiraliceesma/estates',
       type: 'post',
       data: {
                 _csrf : _csrf
             },
       success: function (data) {
          $("#estates").html(data);
		  
       }
	});
	$.ajax({
       url: baseUrl+ '/kiraliceesma/estates',
       type: 'post',
       data: {
                 _csrf : _csrf
             },
       success: function (data) {
          $("#estates").html(data);
       }
	});

    $('form').bind('submit', function(){
    var data = objectifyForm($("form").serializeArray());
    data.
    //Do ajax call here
    $.ajax({
       url: "/kiraliceesma/savevilla",
       type: 'post',
       data: data,
       success: function(){
          //On success do what you want to do 
          //and then ubind the submit event handler and submit the form

          $('form').unbind('submit').submit();
       }
    });

    //Prevent default form submit
    return false;

    });

*/
});

function objectifyForm(formArray) {//serialize data function
  var returnArray = {};
  for (var i = 0; i < formArray.length; i++){
    returnArray[formArray[i]['name']] = formArray[i]['value'];
  }
  return returnArray;
}