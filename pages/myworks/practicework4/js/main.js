let myImage = document.querySelector('img');
let myButton = document.querySelector('button');
let myHeading = document.querySelector('h1');
let mySecondHeading = document.querySelector('h2');

myImage.onclick = function() {
  let mySrc = myImage.getAttribute('src');
  switch(mySrc) {
    case 'images/1.jpg':
      myImage.setAttribute('src', 'images/2.jpg');
      mySecondHeading.innerHTML = 'Фото 2 з 5';
      break;
    case 'images/2.jpg':
      myImage.setAttribute('src', 'images/3.jpg');
      mySecondHeading.innerHTML = 'Фото 3 з 5';
      break;
    case 'images/3.jpg':
      myImage.setAttribute('src', 'images/4.jpg');
      mySecondHeading.innerHTML = 'Фото 4 з 5';
      break;
    case 'images/4.jpg':
      myImage.setAttribute('src', 'images/5.jpg');
      mySecondHeading.innerHTML = 'Фото 5 з 5';
      break;
    case 'images/5.jpg':
      myImage.setAttribute('src', 'images/1.jpg');
      mySecondHeading.innerHTML = 'Фото 1 з 5';
      break;
  }
}

function setUserName() {
  let myName = prompt("Будь-ласка, введіть своє ім'я.");
  if(!myName) {
    setUserName();
  } else {
    localStorage.setItem('name', myName);
    myHeading.innerHTML = myName + ', нажміть на картинку для заміни її на іншу';
  }
}

if(!localStorage.getItem('name')) {
  setUserName();
} else {
  let storedName = localStorage.getItem('name');
  myHeading.innerHTML = storedName + ', нажміть на картинку для заміни її на іншу';
}

myButton.onclick = function() {
  setUserName();
}
