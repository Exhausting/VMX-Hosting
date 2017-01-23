$('#Servicelevel').on('change', function(){
   console.log($('#Servicelevel').val());
    $('#Cpu').html('');
    $('#Memory').html('');
    $('#Storage').html('');

    if($('#Servicelevel').val()==1){
        $('#Cpu').append('<option value="1">1</option>');
        $('#Memory').append('<option value="1">1</option>');
        $('#Storage').append('<option value="1">100</option>');

    }else if($('#Servicelevel').val()==2){
        $('#Cpu').append('<option value="2">2</option>');
        $('#Memory').append('<option value="2">4</option>');
        $('#Storage').append('<option value="2">150</option>');

    }else if($('#Servicelevel').val()==3){
        $('#Cpu').append('<option value="3">4</option>');
        $('#Memory').append('<option value="3">8</option>');
        $('#Storage').append('<option value="3">100</option>');
    }
});
