// news
let newsList = [
	{
		index: 0,
		name: `Вега.Логистика - О Нас`,
		date: `04.06.2024`,
		text: `
    ООО "Вега" работает на рынке автомобильных перевозок с 2015 года.
    Грузоперевозки – это ключевой элемент современной экономики, который обеспечивает эффективную и безопасную транспортировку грузов в различных условиях.  И выбор правильного перевозчика является решающим фактором для успешной доставки груза. Поэтому важно выбирать перевозчика, который имеет опыт работы в данной области и может предоставить гарантии на сохранность груза. <br />
    Мы  успешно  прошли сложные моменты в сфере грузоперевозок, сохранив компанию и ее работоспособность. <br />
    На данный момент  мы оказываем экспедиторские и логистическсие услуги по городу и России. <br />
    Опытные перевозчики доставят ваш груз в кратчайшие сроки, сохранив вашу уверенность в целостности  и сохранности доверенного им груза. <br />
    Наши перевозчики ценят доверие, оказанное вами, поэтому работают качественно, ответственно и надежно. <br />
    Сопровождение сделки с момента поступления заявки до доставки груза в нужную точку.
    Внимательное отношение к документообороту , быстрое и своевременное решение возникающих вопросов. <br />
    `,
	},
	{
		index: 1,
		name: `Пример очень интересной новости в две строки`,
		date: `29.05.2024`,
		text: `Lorem Ipsum is a placeholder text widely used in the printing and typesetting industry. Originating in the 1500s, it has remained largely unchanged through the transition to electronic typesetting. Its primary purpose is to serve as a neutral fill text that mimics the appearance of real text without conveying actual meaning, allowing designers to focus on layout and typography without being distracted by content. This makes it ideal for use in design mock-ups, templates, and other situations where the visual presentation is under development but the final content is not yet available.`,
	},
	{
		index: 2,
		name: `Пример очень интересной новости в две строки`,
		date: `29.05.2024`,
		text: `Lorem Ipsum is a placeholder text widely used in the printing and typesetting industry. Originating in the 1500s, it has remained largely unchanged through the transition to electronic typesetting. Its primary purpose is to serve as a neutral fill text that mimics the appearance of real text without conveying actual meaning, allowing designers to focus on layout and typography without being distracted by content. This makes it ideal for use in design mock-ups, templates, and other situations where the visual presentation is under development but the final content is not yet available.`,
	},
	{
		index: 3,
		name: `Пример очень интересной новости в две строки`,
		date: `29.05.2024`,
		text: `Lorem Ipsum is a placeholder text widely used in the printing and typesetting industry. Originating in the 1500s, it has remained largely unchanged through the transition to electronic typesetting. Its primary purpose is to serve as a neutral fill text that mimics the appearance of real text without conveying actual meaning, allowing designers to focus on layout and typography without being distracted by content. This makes it ideal for use in design mock-ups, templates, and other situations where the visual presentation is under development but the final content is not yet available.`,
	},
];

// render news
const newsContainer = document.querySelector('.news-con');
newsList.forEach((item) => {
	const section = document.createElement('section');
	section.classList.add('new');
	section.setAttribute('new-index', item.index.toString());

	const h3 = document.createElement('h3');
	h3.textContent = item.text.split(' ').slice(0, 10).join(' ') + `...`;

	const small = document.createElement('small');
	small.textContent = item.date;

	section.appendChild(h3);
	section.appendChild(small);

	newsContainer.appendChild(section);
});

// news popup render-open-close
function manipulatePopup(newsList) {
	let newNodeList = document.querySelectorAll('.new');

	newNodeList.forEach((item) => {
		// create popup
		let popup = document.createElement('dialog');

		item.addEventListener('click', () => {
			// index of the clicked new
			let index = item.getAttribute('new-index');

			// form popup content with index
			let popupContent = `
      <h3>${newsList[index].name}</h3>
      <small>${newsList[index].date}</small>
      <p>${newsList[index].text}</p>
      <button id="close-popup">Закрыть</button>
      `;

			// fill popup
			popup.innerHTML = popupContent;
			// add popup to the body
			document.body.appendChild(popup);
			// show popup
			popup.showModal();
			popup.style.display = 'flex';

			// close popup on click
			const closeButton = popup.querySelector('#close-popup');
			closeButton.addEventListener('click', () => {
				popup.close();
				popup.style.display = 'none';
			});
		});
	});
}

// Call the function
manipulatePopup(newsList);
