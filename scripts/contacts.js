let copyBtnsList = document.querySelectorAll(`.copyBtn`);

copyBtnsList.forEach((btn) => {
	btn.addEventListener(`click`, () => {
		let content = btn.textContent;
		navigator.clipboard
			.writeText(content)
			.then(() => {
				alert(`Текст скопирован: ${content}`);
			})
			.catch((err) => {
				alert(
					`Что-то пошло не так. Попробуйте заполнить форму заявки и мы свяжемся с Вами.`
				);
				console.error(err);
			});
	});
});
