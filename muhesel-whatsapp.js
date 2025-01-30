jQuery(document).ready(function($) {
 $(document).on('click','.control_muhesel_button',function(){
    var arrays={};
    arrays['show']='hide';
    arrays['hide']='show';
    $('.muhesel_whatsapp_popup').removeClass('show');
    $('.muhesel_whatsapp_popup').removeClass('hide');
    $('.muhesel_whatsapp_popup').addClass($(this).attr('data-id'));
    var cur=$(this).attr('data-id');
    $('.control_muhesel_button').attr('data-id',arrays[cur]);
 });
 $('.muhesel_whatsapp_popup_text_input').on("keypress", function(e) {
        if (e.keyCode == 13) {
			console.log('Enter Basıldı');
			window.open($('.muhesel_whatsapp_popup_url').attr('href'), '_blank');
        }
 }); 
 $(".muhesel_whatsapp_popup_text_input").change(function(){
    var url=$('.muhesel_whatsapp_popup_url').attr('href');
	var f_url=$('.muhesel_whatsapp_popup_url').attr('data-href');
    var this_text=$(this).val();
    var new_url=f_url+''+this_text;
    $('.muhesel_whatsapp_popup_url').attr('href',new_url);
 });            
});

