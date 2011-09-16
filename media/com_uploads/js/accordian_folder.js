window.addEvent('domready', function () {
	$$('.uploads .folder_list .folder').each(function (folder) {
		var child = folder.getElement('ul');
		child.addClass('hide');
		
		folder.addEvent('click', function (e) {
			e.stop();
			child.toggleClass('hide')
		});
	});
});