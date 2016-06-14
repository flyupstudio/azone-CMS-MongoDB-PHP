$(function() {
	
	$('.emailParser form input[name="url"]').change(function(){
		$(this).removeClass('error');		
	});
	
	$('.emailParser form').submit(function(e){
		e.preventDefault()
		var _f = $(this);
		var error = false;
		var validate = _f.find('input[name="url"]');
		if(!learnRegExp(validate.val())){
			errors = true;
			validate.addClass('error');
			alert('Please input valid URL');
		}
		
		if(!error){
			$('.emailParserHistory').append('<div class="ajax-loading"></div>');
			var post = _f.serialize();
			$.post(_f.attr('action'),post)
				.done(function(response){
					var r = JSON.parse(response);					
					$('.emailParserHistory .ajax-loading').remove();	
					if($('.emailParserHistory ul').length == 0){
						$('.emailParserHistory').append('<ul></ul>');
					}
					addUrlLiTmpl($('.emailParserHistory ul'), r, 1);									
					rebuildAClicks();
				})
				.fail(function(e){
					$('.emailParserHistory .ajax-loading').remove();
					alert('Something wrong with form sending');
				});				
		}
	});			
	rebuildAClicks();
});

function rebuildAClicks(){
	$('.loadAjaxSubInfo').unbind('click').click(function(e){
		e.preventDefault();
		var li = $(this).parent();
		li.prepend('<div class="ajax-loading"></div>');
		// load by AJAX information
		$.post('',{'Event':'GetUrlSubInfo', 'parent_id':$(this).data('id')})
				.done(function(response){
					var res = JSON.parse(response);
					
					li.find('.list').remove();
					li.append('<div class="list"></div>');
					if(res.emails && res.emails.length){
						li.find('.list').append('<ol></ol>');
						var ol = li.find('.list ol');
						$(res.emails).each(function(el, i, all){
							addEmailLiTmpl(ol, i);							
						});
					}
					if(res.urls && res.urls.length){											
						li.find('.list').append('<ul></ul>');
						var ul = li.find('.list ul');
						$(res.urls).each(function(el,r,all){
							addUrlLiTmpl(ul, r, 0);		
						});
					}
					$('.emailParserHistory .ajax-loading').remove();
					rebuildAClicks();
				})
				.fail(function(e){
					$('.emailParserHistory .ajax-loading').remove();
					alert('Something wrong with form sending');
				});			
		
	});
}
function addEmailLiTmpl(obj,i){
	obj.append('<li>'+i.email+'</li>');;			
}
function addUrlLiTmpl(obj,r, is_new){
	var date = new Date(1000*(+r.time)).toLocaleString();
	obj.prepend('<li ><a href="'+r.url+'" data-id="'+(r.id ? r.id : r._id.$id)+'" class="loadAjaxSubInfo '+(is_new ? 'onProgress' : '')+'">'+
						r.url +(r.iterations? ' ( '+r.iterations+') ':'') + 
					'</a> from '+
						(date)+
						(is_new ? '<sup>NEW!</sup>' : '')+
					'</li>');			
}
//stackoverflows functions
function learnRegExp(s) {    
      var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
      return regexp.test(s);    
}