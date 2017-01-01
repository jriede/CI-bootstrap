$(document).ready(function(){

    $('#select_all').on('click',function(){

        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
            // ask for all subscribers in account
            $('#allsubscribers').show();
          //alert($("[name='actionselector']").val());

        }
        else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });

    // for action checked
    $("[name='actionselector']").bind('change', function(event) {

           //alert($("[name='actionselector']").val());
           if ($("[name='actionselector']").val() == 'form') {
             $('#action_form').show();

           }

});

    // end

    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
