const navSlide = () =>{
	const threeLine = document.querySelector('.three-line')
	const nav = document.querySelector('.nav-links')

	threeLine.addEventListener('click', () => {
		nav.classList.toggle('nav-active');


	});
}
const searchbar = () =>{
	const searchBar = document.querySelector('.searchImg')
	const showBar = document.querySelectorAll('.submenuProduct3  li');
	searchBar.addEventListener('click', () => {
	for (let i = 0; i < showBar.length; i++) {
  	// console.log(showBar[i]);
  	if(showBar[i].style.display == 'block')
  		showBar[i].style.display = 'none';
    else
        showBar[i].style.display = 'block';
      	showBar[i].style.top = '20px';
      	showBar[i].style.backgroundColor = 'yellow';
}

	});
}

const accountView = () =>{
	const accountTxt = document.querySelector('.my-ac-txt')

	const showBox = document.querySelectorAll('.submenuProduct2  li');
	accountTxt.addEventListener('click', () => {
	for (let j = 0; j < showBox.length; j++) {
		console.log(showBox[j]);
  	if(showBox[j].style.display == 'block')
  		showBox[j].style.display = 'none';
    else
        showBox[j].style.display = 'block';
      	showBox[j].style.top = '20px';
      	showBox[j].style.backgroundColor = 'yellow';
}

	});
}

navSlide();
searchbar();
accountView();

