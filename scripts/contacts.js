let copyBtnsList = document.querySelectorAll('.copyBtn');

copyBtnsList.forEach((btn) => {
	btn.addEventListener('click', () => {
		let content = btn.textContent;
		// пробуем как обычно
		if (navigator.clipboard) {
			navigator.clipboard
				.writeText(content)
				.then(() => {
					console.log(`Текст скопирован в буфер обмена:`, content);
					alert(`Текст успешно скопирован (${content}).`);
				})
				.catch((err) => {
					console.error(`Ошибка при копировании текста:`, err);
					fallbackCopyTextToClipboard(content);
				});
		} else {
			// не получается - копируем через execcomand
			fallbackCopyTextToClipboard(content);
		}
	});
});

function fallbackCopyTextToClipboard(text) {
	// пробуем иначе
	try {
		let textarea = document.createElement(`textarea`);
		textarea.value = text;
		textarea.setAttribute(`readonly`, ``);
		textarea.style.position = `absolute`;
		textarea.style.left = `-9999px`;
		document.body.appendChild(textarea);

		textarea.select();
		document.execCommand(`copy`);

		document.body.removeChild(textarea);

		console.log(`Текст скопирован в буфер обмена:`, text);
		alert(`Текст успешно скопирован (${text}).`);
	} catch (err) {
		// выводим сообщение, если вообще никак не получается
		alert(
			`Что-то пошло не так. Попробуйте заполнить форму заявки и мы свяжемся с Вами.`
		);
	}
}
