jQuery(document).ready(function () {

	$(".phone").mask("+380 (99) 999-99-99");


	jQuery('.send-form').click(function () {
		var form = jQuery(this).closest('form');

		if (form.valid()) {
			form.css('opacity', '.5');
			var actUrl = form.attr('action');

			jQuery.ajax({
				url: actUrl,
				type: 'post',
				dataType: 'html',
				data: form.serialize(),
				success: function (data) {
					form.html(data);
					form.css('opacity', '1');
					//form.find('.status').html('форма надіслана успішно');
					//$('#myModal').modal('show') // для бутстрапу
				},
				error: function () {
					form.find('.status').html('помилка серверу');
				}
			});
		}
	});


});