let copyBtnsList = document.querySelectorAll(`.copyBtn`);

copyBtnsList.forEach((btn) => {
	btn.addEventListener(`click`, () => {
		let content = btn.textContent;

		if (!navigator.clipboard) {
			alert(`Копирование текста не поддерживается в вашем браузере.`);
			return;
		}

		navigator.clipboard
			.writeText(content)
			.then(() => {
				console.log(`Текст скопирован в буфер обмена:`, content);
			})
			.catch((err) => {
				console.error(`Ошибка при копировании текста:`, err);
				alert(
					`Что-то пошло не так. Попробуйте заполнить форму заявки и мы свяжемся с Вами.`
				);
			});
	});
});
