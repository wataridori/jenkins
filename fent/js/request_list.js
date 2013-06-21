$(function(){
   $('#request_type_selecter').change(function(){
       var status = $(this).val();
       if (status !== 'All') {
           $('.a_request').not('[status_code="'+status+'"]').hide(window.FADING_DURATION);
           $('[status_code="'+status+'"]').show(window.FADING_DURATION);
       } else {
           $('.a_request').show(window.FADING_DURATION);
       }
   }); 
});

