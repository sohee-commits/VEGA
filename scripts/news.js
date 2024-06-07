// news
let newsList = [
	{
		index: 0,
		name: `Вега.Логистика - О Нас`,
		date: `04.06.2024`,
		text: `
    Грузоперевозки – это ключевой элемент современной экономики, который обеспечивает эффективную и безопасную транспортировку грузов в различных условиях.  И выбор правильного перевозчика, имеющего  опыт работы в данной   области и  гарантии на сохранность груза,  является решающим фактором для успешной доставки груза. <br />
		ООО «Вега» работает на рынке  автомобильных грузоперевозок с 2015 года, и наши перевозчики преданно  работают с нами. <br />
		Мы  успешно  прошли сложные моменты в сфере грузоперевозок, сохранив компанию и ее работоспособность.  <br />
    `,
	},
	{
		index: 1,
		name: `Наши услуги и опыт`,
		date: `07.06.2024`,
		text: `
		На данный момент  мы оказываем экспедиторские и логистические услуги по городу и России.  Для Вас работают эффективные, отзывчивые, четко ориентированные на  положительный результат менеджеры. Гибкая система скидок позволит Вам сэкономить на транспортных расходах. <br />
		Опытные перевозчики доставят ваш груз в кратчайшие сроки, сохранив Вашу уверенность в целостности  и сохранности доверенного им груза. <br />
		Наши перевозчики ценят доверие, оказанное Вами, поэтому работают  качественно, ответственно и надежно. <br />
		`,
	},
	{
		index: 2,
		name: `Наша ответственность`,
		date: `07.06.2024`,
		text: `
		Сопровождение сделки с момента поступления заявки до доставки груза в нужную точку.  <br />
		Внимательное отношение к документообороту , быстрое и своевременное решение возникающих вопросов. <br />
		Своевременная подача ТС по погрузку/выгрузку. <br />
		`,
	},
	{
		index: 3,
		name: `Наши перевозчики`,
		date: `07.06.2024`,
		text: `
		Уверенные в результате и ориентированные на успех, выполнят работу в кратчайшие сроки качественно.  <br />
		Система контроля за движением груза (посредством email, sms, сайта, персонального менеджера) поможет оперативно следить за Вашим отправлением.
		`,
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
