(function ($) {
	$(function () {
		$("#content").delegate(".working_day", "click", function () {
			var checked = $(this).is(":checked"),
				$tr = $(this).closest("tr");
			$tr.find("select, input[type='text']").attr("disabled", checked);
			if (checked) {
				$tr.find("a.day-price").addClass("disabled");
			} else {
				$tr.find("a.day-price").removeClass("disabled");
			}
		}).delegate("a.icon-delete", "click", function (e) {
			e.preventDefault();
			$('#dialogDelete').data('id', $(this).attr('rel')).dialog('open');
			return false;
		});
		
		var $tabs = $("#tabs"),
			$date = $("#date"),
			$dialogDelete = $("#dialogDelete"),
			$frmTimeCustom = $("#frmTimeCustom");
		
		if ($tabs.length > 0) {
			$tabs.tabs();
		}
		
		if ($frmTimeCustom.length > 0) {
			$frmTimeCustom.validate();
			var dOpt = {};
			if ($date.length > 0) {
				dOpt = $.extend(dOpt, {
					firstDay: $date.attr("rel"),
					dateFormat: $date.attr("rev")
				});
			};
			if ($date.length > 0) {
				$date.datepicker(dOpt);
			}
		}
		
		if ($dialogDelete.length > 0) {
			$dialogDelete.dialog({
				autoOpen: false,
				resizable: false,
				draggable: false,
				modal: true,
				buttons: {
					'Delete': function() {
						$.post("index.php?controller=pjAdminTime&action=delete", {
							id: $(this).data("id")
						}).done(function (data) {
							$("#tabs-2").html(data);
						});
						$(this).dialog('close');			
					},
					'Cancel': function() {
						$(this).dialog('close');
					}
				}
			});
		}
		
	});
})(jQuery);