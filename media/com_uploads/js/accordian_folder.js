window.addEvent('domready', function () {
	$$('.uploads .folder_list .folder').each(function (folder) {
		var child = folder.getElement('ul');
		child.addClass('hide');
		
		folder.addEvent('click', function (e) {
			if (e.target !== folder) {
				console.log(e.target);
			} else {
				e.stop();
				child.toggleClass('hide')
			}
		});
	});
});