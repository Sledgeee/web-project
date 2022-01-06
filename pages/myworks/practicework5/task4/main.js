var x = +prompt('Введіть границю від:', '');
var y = +prompt('Введіть грнаицю до:', '');
var h = +prompt('Ведіть крок:', '');

for (x; x <= y; x+=h) {
    if (x < 4) {
        document.write(Math.abs(x) + Math.pow(Math.E, x) + '<BR>');
    }
    else if (x == 4) {
        document.write((Math.PI) + '<BR>');
    }
    else if (x > 4) {
        document.write(Math.cos(x) / Math.sin(x) + Math.log(x) + '<BR>');
    }
}