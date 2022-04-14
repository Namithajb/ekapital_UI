$(document)
		.ready(
				function() {

					$('.carousel-inner .item:first-child').addClass('active');

					var mq = window.matchMedia("(min-width: 768px)");
					if (mq.matches) {
						jQuery('ul.nav li.dropdown').hover(
								function() {
									jQuery(this).find('.dropdown-menu').stop(
											true, true).delay(200).fadeIn();
								},
								function() {
									jQuery(this).find('.dropdown-menu').stop(
											true, true).delay(200).fadeOut();
								});
					}

					$('.dropdown-menu').click(function(e) {
						e.stopPropagation();
					});

					$('.carousel').carousel({
						interval : 10000
					});

					$(
							'a[data-toggle="tooltip"],button[data-toggle="tooltip"],i[data-toggle="tooltip"]')
							.tooltip();

					jQuery('#accordion').find('.in').parent().removeClass(
							'panel-default').addClass('panel-primary');
					$('.panel-title a').click(
							function() {
								jQuery('#accordion').find('.in').parent()
										.removeClass('panel-primary').addClass(
												'panel-default');
								$(this).parent().parent().parent().removeClass(
										'panel-default').addClass(
										'panel-primary');
							});

					$('.panel-default').mouseenter(
							function() {
								$(this).removeClass('panel-default').addClass(
										'panel-primary');
							});
					$('.panel-default').mouseleave(
							function() {
								$(this).removeClass('panel-primary').addClass(
										'panel-default');
							});

					/*
					 * var owl6 = jQuery("#supplier-carousel").owlCarousel({ //
					 * Most important owl features loop: true, margin:0, nav:
					 * false, width:200, responsiveClass: true, autoplay: true,
					 * autoplayTimeout: 1000, autoplayHoverPause: true,
					 * autoplaySpeed: 2000, dots: false, responsive: { 0: {
					 * items: 1, nav: false, dots: false, }, 800: { items: 2,
					 * nav: false, dots: false, }, 1000: { items: 4, nav: false, } }
					 * 
					 * }); owl6.owlCarousel();
					 * $('#supplier-carousel-left').click(function () {
					 * owl6.trigger('next.owl.carousel'); });
					 * $('#supplier-carousel-right').click(function () {
					 * owl6.trigger('prev.owl.carousel', [300]); });
					 */

					/* In-line radio buttons */
					$('.custom_radio a')
							.on(
									'click',
									function() {
										var data_toggler = '#'
												+ $(this).data('toggle');
										var data_title = $(this).data('title');
										$(this).parents('.custom_radio')
												.children(data_toggler).val(
														data_title);
										$(this).parents('.custom_radio')
												.children('a').removeClass(
														'active').addClass(
														'notActive');
										$(this).removeClass('notActive')
												.addClass('active');
									});

					/* revalidation specific to radio buttons */
					$('.form_radio a').live(
							'click',
							function() {
								if ($(this).closest('.form-group').hasClass(
										'has-error')) {
									$(this).closest('form').bootstrapValidator(
											'revalidateField',
											$(this).siblings('input').prop(
													'name'));
								}
							});

					/* clear form on modal hide */
					$('.modal').on(
							'hidden.bs.modal',
							function() {
								$(this).find('input').each(function() {
									$(this).val('')
								});
								$(this).find('form').bootstrapValidator(
										'resetForm', true);

								/* reset radio button group */
								$(this).find('.form_radio a').removeClass(
										'active');
								$(this).find('.form_radio a').addClass(
										'notActive');

								/* reset border colors for radio */
								$(this).find('.form_radio a').css(
										'border-color', '#ccc');
							});

					/* center table headings */
					$('th').addClass('text-center');

					/* revalidation specific to radio fields */
					$('.bv-form').on(
							'error.field.bv',
							function(e, data) {
								if (data.element.parent()
										.hasClass('form_radio')) {
									data.element.parent().children('a').css(
											'border-color', '#a94442');
								}
							}).on(
							'success.field.bv',
							function(e, data) {
								if (data.element.parent()
										.hasClass('form_radio')) {
									data.element.parent().children('a').css(
											'border-color', '#3c763d');
								}
							});

					/* revalidation specific to datepicker fields */
					$('.datepicker-inline').on(
							'changeDate',
							function(input) {
								if ($(this).closest('.form-group').hasClass(
										'has-error')) {
									$(this).closest('form').bootstrapValidator(
											'revalidateField',
											$(this).prop('name'));
								}
							});
					
				});

function adderssToString(address){
	var addressString = address.addressLine1;
	if(address.addressLine2){
		addressString = addressString + ", " + address.addressLine2;
	}
	if(address.addressLine3){
		addressString = addressString + ", " + address.addressLine3;
	}
	if(address.city){
		addressString = addressString + ", " + address.city;
	}
	if(address.county){
		addressString = addressString + ", " + address.county;
	}
	addressString = addressString + ", " + address.postCode + ", " + address.country + ", " + address.contactName + ", " + address.phoneNumber;
	return addressString;
}