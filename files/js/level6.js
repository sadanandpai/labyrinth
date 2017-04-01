$(document).ready(function(){
                var first = $('#circle').data('srcfirst')
                var second = $('#circle').data('srcsecond')
                $('map').click(function(){
                    $('#circle').fadeOut(3000, function(){
                        if(!$(this).is('animated')){
                            if($('#circle').attr('src') == first)
                                $('#circle').attr('src' , second) 
                            else 
                                $('#circle').attr('src' , first)
                        }
                    })
                    $('#circle').fadeIn(3000);
                    
		})
	});
	
$(document).ready(function(){
	setInterval(function(){
		$('map').click();
	}, 30000)
});