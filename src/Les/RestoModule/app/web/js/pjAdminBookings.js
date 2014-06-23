(function ($) {
	$(function () {

		var $content = $("#content"),
			$frmUpdateBooking = $('#frmUpdateBooking'),
			$frmReminder = $("#frmReminder"),
			$tabs = $("#tabs"),
			$dialogDelete = $("#dialogDelete"),
			$dialogAvailability = $("#dialogAvailability"),
			$datepick = $(".datepick"),
			dOpts = {};
			
		if ($datepick.length > 0) {
			dOpts = $.extend(dOpts, {
				firstDay: $datepick.attr("rel"),
				dateFormat: $datepick.attr("rev")
			});
		}
				
		$content.delegate("a.icon-delete", "click", function (e) {
			if (e && e.preventDefault) {
				e.preventDefault();
			}
			$('#dialogDelete').data('id', $(this).attr("rel")).dialog('open');
			return false;
		}).delegate(".datepick", "focusin", function (e) {
			switch ($(this).attr("id")) {
				case "schedule_date":
					dOpts = $.extend(dOpts, {
						onSelect: function (dateText, inst) {
							getSchedule.apply(null, [dateText]);
						}
					});
					break;
				case "paper_date":
					dOpts = $.extend(dOpts, {
						onSelect: function (dateText, inst) {
							getPaper.apply(null, [dateText]);
						}
					});
					break;
			}
			$(this).datepicker(dOpts);
		}).delegate("#payment_method", "change", function () {
			switch ($("option:selected", this).val()) {
				case 'creditcard':
					$(".boxCC").show();
					break;
				default:
					$(".boxCC").hide();
			}
		}).delegate("#status", "change", function () {
			switch ($("option:selected", this).val()) {
				case 'enquiry':
					$(".billing").hide();
					break;
				default:
					$(".billing").show();
			}
		}).delegate(".btnAddTable", "click", function (e) {
			if (e && e.preventDefault) {
				e.preventDefault();
			}
			$.post("index.php?controller=pjAdminBookings&action=getTables", $frmUpdateBooking.serialize()).done(function (data) {
				$("tbody", $("#tblBookingTables")).append(data);
			});
			return false;
		}).delegate(".btnRemoveTable", "click", function (e) {
			if (e && e.preventDefault) {
				e.preventDefault();
			}
			$(this).parent().parent().remove();
			return false;
		}).delegate("select[name='table_id[]']", "change", function () {
			var $this = $(this),
				val = $("option:selected", this).val();
			$this.parent().next().html(val.split("|")[1]);
			$this.parent().next().next().html(val.split("|")[2]);
		}).delegate("td.meta", "click", function () {
			var meta = $(this).parent().metadata();
			if (meta.id) {
				window.location.href = "index.php?controller=pjAdminBookings&action=update&id=" + meta.id;
			}
		}).delegate(".availability", "click", function (e) {
			if (e && e.preventDefault) {
				e.preventDefault();
			}
			$("#dialogAvailability").dialog("open");
			return false;
		});
		
		if ($frmUpdateBooking.length > 0) {
			$frmUpdateBooking.validate();
			
			$("#status, #is_paid").buttonset();
		}
		
		if ($frmReminder.length > 0) {
			$frmReminder.validate();
		}
		
		if ($tabs.length > 0) {
			var tOpt = {
				select: function (event, ui) {
					switch (ui.index) {
						case 0:
							window.location.href = "index.php?controller=pjAdminBookings&action=schedule";
							break;
						case 3:
							window.location.href = "index.php?controller=pjAdminBookings&action=paper";
							break;
					}
				}
			};
			$tabs.tabs(tOpt);
			
			var m = window.location.href.match(/&tab=(\d+)/);
			if (m && m.length === 2) {
				$tabs.tabs("option", "selected", parseInt(m[1], 10));
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
						$.post("index.php?controller=pjAdminBookings&action=delete", {
							id: $(this).data('id')
						}).done(function (data) {
							$content.html(data);
							$("#tabs").tabs(tOpt);
							$("#tabs").tabs("option", "selected", 1);
						});
						$(this).dialog('close');			
					},
					'Cancel': function() {
						$(this).dialog('close');
					}
				}
			});
		}
		
		function getSchedule(dateText) {
			$.get("index.php?controller=pjAdminBookings&action=getSchedule", {
				date: dateText
			}).done(function (data) {
				$("#boxSchedule").html(data);
			});
		}
		
		function getPaper(dateText) {
			$.get("index.php?controller=pjAdminBookings&action=getPaper", {
				date: dateText
			}).done(function (data) {
				$("#boxPaper").html(data);
			});
		}

		if ($dialogAvailability.length > 0) {
			$dialogAvailability.dialog({
				autoOpen: false,
				resizable: false,
				draggable: false,
				modal: true,
				width: 800,
				open: function () {
					var $this = $(this);
					$.get("index.php?controller=pjAdminBookings&action=getAvailability", {
						"id": $frmUpdateBooking.find("input[name='id']").val(),
						"date": $frmUpdateBooking.find("#date").val(),
						"hour": $frmUpdateBooking.find("#hour option:selected").val(),
						"minute": $frmUpdateBooking.find("#minute option:selected").val()
					}).done(function (data) {
						$dialogAvailability.html(data);
					});
				},
				buttons: {
					'Close': function () {
						$(this).dialog("close");
					}
				}
			});
		}
		
	});
})(jQuery);