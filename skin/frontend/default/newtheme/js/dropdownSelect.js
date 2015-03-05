(function($) {
$.fn.dropdownSelect = function() {
	return this.each(function() {
		var className = typeof $(this).attr('name') !== 'undefined' ? $(this).attr('name')+'-drop' : '';
		var divDrop = $('<div />').addClass('sel-drop').addClass(className);
		var divUl = $('<ul class="options" />').appendTo(divDrop);
		var spanCur = $('<span class="current"/>').text($(this).find('option:selected').text());

		$(this).children().each(function (i, e) {
			var anchor = $('<a />').attr('href', e.value).text(e.text);
			$('<li />').append(anchor).appendTo(divUl);
		});
		
		var wrapper = $('<div />').addClass('drop-wrapper').insertAfter($(this).parent().find('label'));
		spanCur.appendTo(wrapper)
		divDrop.appendTo(wrapper);
		$(this).appendTo(wrapper);

		var tm = null;
		$(this).parent().hover(
			function () {
				var self = $(this);
				clearTimeout(tm);
				tm = setTimeout(function() {
					self.find('.sel-drop').slideDown('fast');
				}, 200);
			},

			function () {
				var self = $(this);
				clearTimeout(tm);
				tm = setTimeout(function() {
					self.find('.sel-drop').slideUp('fast');
				}, 200);
			}
		);

		divDrop.hide();
		$(this).hide();	
	});
}
})(jQuery);