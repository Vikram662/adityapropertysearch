 $(document).ready(function($) {
         $.ajax({
                url: '<?=base_url('load/index/')?>',
                type: 'POST',
                data: {city:'<?=$this->input->get('city') ?>',property_type:'<?= $this->input->get('property_type')?>',budget:'<?= @$this->input->get('budget')?>'},
            })
            .done(function(data) {
                //console.log(data);
                $('#res').html(data);
            })
            .fail(function(err) {
               // console.log(err.responseText);
                $('#res').html(err.responseText);
            })
            .always(function() {
                console.log("complete");
            });

            function data(arr){
                arrjon = new Array();
                $.each(arr,function(i,value){
                   arrjon.push(value.value);
                });
                return arrjon;
               // console.log(arr);
            }
        $('.property_type').change(function(event) {
            /* Act on the event */
           var property_type = $('input.property_type:checked').serializeArray();
               property_type = data(property_type);
               console.log(property_type);
            $.ajax({
                url: '<?=base_url('load/filter/')?>',
                type: 'POST',
                data: {city:'2',property_type:property_type},
            })
            .done(function(data) {
               // console.log(data);
                $('#res').html(data);
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
        });

         $(document).ajaxStart(function(){
            $("#wait").css("display", "block");
        });
        $(document).ajaxComplete(function(){
            $("#wait").css("display", "none");
        });
    });
      