function successNotify(){
    new PNotify({
            title: 'Regular Success',
            text: 'That thing that you were trying to do worked!',
            type: 'success',
            styling: 'bootstrap3'
        });
}
function errorNotify(){
    new PNotify({
            title: 'Regular Success',
            text: 'That thing that you were trying to do worked!',
            type: 'error',
            styling: 'bootstrap3'
        });
}
function formData(data){
  inputArray=[];
    $.each(data,function(key,field){
      inputArray[field.name] = field.value;
    })
    return inputArray;
}

$('#log').click(function(){
    var  data = $('#login').serializeArray('first'); 
    var formdata = formData(data);
   $.ajax({
       url:"<?=base_url()?>"
   });
});