// open-close mobile menu
document.querySelector('.open-menu').addEventListener('click', () => {
	document.querySelector('.mobile-header nav').classList.toggle('show');
	// disable scrolling when menu is opened
	if (document.querySelector('.mobile-header nav').classList.contains('show')) {
		document.body.style.overflow = 'hidden';
	} else {
		document.body.style.overflow = 'scroll';
	}
});

// close dialog on any key
document.addEventListener('keydown', () => {
	document.querySelector(`dialog`).close();
	document.querySelector(`dialog`).style.display = `none`;
});
