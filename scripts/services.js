// services
let servicesList = [
	{
		index: 0,
		name: `Тентовые перевозки`,
		shortDescription: `Тентовые фуры оснащены специальными тентами, которые обеспечивают защиту груза`,
		src: `tent`,
		fullDescription: `
    Тентованные полуприцепы могут быть использованы с автокраном для загрузки сверху или с помощью погрузчика сбоку, что делает их идеальным выбором для различных типов грузов. Удаление стоек и обрешетки позволяет упростить процесс загрузки и сделать его более безопасным. Кроме того, благодаря своему конструкции, тентованные полуприцепы обеспечивают отличную сохранность груза на протяжении всего пути следования. Внутри кузова предусмотрены крепления в виде ремней и распорок, что позволяет надежно зафиксировать груз, если требуется дополнительная стабильность. 
  `,
	},
	{
		index: 1,
		name: `Изотермические перевозки`,
		shortDescription: `Температура сохраняется благодаря герметичности фургона и теплоизоляции стенок панелями`,
		src: `isothermal`,
		fullDescription: `...`,
	},
	{
		index: 2,
		name: `Рефрижераторные перевозки`,
		shortDescription: `Транспортировка грузов, требующих поддержания определенной температуры в процессе перевозки`,
		src: `refrigerated`,
		fullDescription: `...`,
	},
	{
		index: 3,
		name: `Экспедирование и Логистика`,
		shortDescription: `Организация доставки груза по оптимальному маршруту по городу и по России`,
		src: `f-a-l`,
		fullDescription: `...`,
	},
	{
		index: 4,
		name: `Бортовые перевозки`,
		shortDescription: `Открытый кузов позволяет легко и быстро осуществлять погрузочно-разгрузочные работы`,
		src: `onboard`,
		fullDescription: `...`,
	},
];

// render services
const servicesContainer = document.querySelector(`.services`);
servicesList.forEach((item) => {
	const section = document.createElement(`section`);
	section.classList.add(`service`);
	section.setAttribute(`new-index`, item.index.toString());

	const h2 = document.createElement(`h2`);
	const p = document.createElement(`p`);
	const button = document.createElement(`button`);

	h2.textContent = item.name;
	p.textContent = item.shortDescription;
	button.textContent = `Подробнее`;
	button.setAttribute(`id`, `open-popup`);

	section.appendChild(h2);
	section.appendChild(p);
	section.appendChild(button);

	servicesContainer.appendChild(section);
});

// services popup render-open-close
function manipulatePopup(servicesList) {
	let serviceNodeList = document.querySelectorAll(`.service`);

	serviceNodeList.forEach((item) => {
		// create popup
		let popup = document.createElement(`dialog`);
		// set popup els
		let section = document.createElement(`section`);
		let form = document.createElement(`form`);

		item.addEventListener(`click`, () => {
			// index of the clicked service and data name for service form
			let index = item.getAttribute(`new-index`);

			// fill popup's els
			section.classList.add(`description`);
			section.innerHTML = `
      <h3>${servicesList[index].name}</h3>
			<div class="slider-wrapper">
				<!-- слайды -->
				<div class="slider">
					<!-- слайд -->
					<img id="slide-1" 
					src="./assets/services/${servicesList[index].src}-0.jpg" 
					alt="${servicesList[index].name}">
					<!-- слайд -->
					<img id="slide-2" 
					src="./assets/services/${servicesList[index].src}-1.jpg" 
					alt="${servicesList[index].name}">
					<!-- слайд -->
					<img id="slide-3" 
					src="./assets/services/${servicesList[index].src}-2.jpg" 
					alt="${servicesList[index].name}">
					<!-- слайд -->
					<img id="slide-4" 
					src="./assets/services/${servicesList[index].src}-3.jpg" 
					alt="${servicesList[index].name}">
				</div>
				<!-- кнопки перехода к слайду n -->
				<div class="slider-nav">
					<a href="#slide-1"></a>
					<a href="#slide-2"></a>
					<a href="#slide-3"></a>
					<a href="#slide-4"></a>
				</div>
			</div>
      <p>${servicesList[index].shortDescription}</p>
      <button id="close-popup">Закрыть</button>
    `;
			form.setAttribute(`action`, ``);
			form.setAttribute(`method`, `POST`);
			form.setAttribute(`service-data`, servicesList[index].name);
			form.classList.add = `services-form`;
			form.innerHTML = `
      <!-- full name -->
      <div class="input-group">
        <label for="fullname">КОНТАКТНОЕ ЛИЦО <span class="bold">*</span></label>
        <hr>
        <input type="text" name="fullname" id="fullname" placeholder="Фамилия Имя Отчество">
      </div>
      <!-- number -->
      <div class="input-group">
        <label for="phonenumber">НОМЕР ТЕЛЕФОНА <span class="bold">*</span></label>
        <hr>
        <input type="text" name="phonenumber" id="phonenumber" placeholder="+ 7">
      </div>
      <!-- inn -->
      <div class="input-group">
        <label for="inn">ИНН <span class="bold">*</span></label>
        <hr>
        <input type="text" name="inn" id="inn" placeholder="00 00 00000 0">
      </div>
      <!-- where -->
      <div class="group conc">
        <p>НАПРАВЛЕНИЕ <span class="bold">*</span></p>
        <hr>
        <div class="input-group">
          <!-- where from -->
          <label for="where-from"></label>
          <input type="text" name="where-from" id="where-from" placeholder="Откуда">
          <!-- where to -->
          <label for="where-to"></label>
          <input type="text" name="where-to" id="where-to" placeholder="Куда">
        </div>
      </div>
      <button type="submit">
        <span class="bold">Рассчитать</span>
        <span>----------<span class="arrow-right">></span></span>
      </button>
      `;

			// fill popup
			popup.appendChild(section);
			popup.appendChild(form);
			// add popup to the body
			document.body.appendChild(popup);
			// show popup
			popup.showModal();
			popup.style.display = `grid`;

			// close popup on click
			const closeButton = popup.querySelector(`#close-popup`);
			closeButton.addEventListener(`click`, () => {
				popup.close();
				popup.style.display = `none`;
			});
		});
	});
}

// Call the function
manipulatePopup(servicesList);
