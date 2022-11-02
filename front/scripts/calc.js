var mas = new Array();
var str;
var numberArr = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
function insert(num) {
    if (num == "+" || num == "*" || num == "/" || num == "-")
        num = ' ' + num + ' ';

    document.form.textview.value = document.form.textview.value + num;
    str = document.form.textview.value;
}

function clean() {
    document.form.textview.value = "";
    str = "";
}
function back() {
    var stroka = document.form.textview.value;
    document.form.textview.value = stroka.substring(0, stroka.length - 1);
    str = document.form.textview.value;
}
function equal() {
    mas = str.split(' ');
    // alert(mas);
    var substring;
    while (mas.includes('/') || mas.includes('*')) {
        for (let i = 0; i < mas.length; i++) {
            if (mas[i] == "/") {
                substring = mas[i - 1] / mas[i + 1];
                mas.splice(i - 1, 3, substring);
            }
            else if (mas[i] == "*") {
                substring = mas[i - 1] * mas[i + 1];
                mas.splice(i - 1, 3, substring);
            }

        }
    }

    while (mas.includes('-') || mas.includes('+')) {
        for (let i = 0; i < mas.length; i++) {
            if (mas[i] == "+") {
                substring = Number(mas[i - 1]) + Number(mas[i + 1]);
                mas.splice(i - 1, 3, substring);
            }
            else if (mas[i] == "-") {
                substring = Number(mas[i - 1]) - Number(mas[i + 1]);
                mas.splice(i - 1, 3, substring);
            }
        }
    }
    str = mas.toString();
    document.form.textview.value = str;
}

