const Users = []; 

class User{
    constructor(text,option){
        this.text=text;
        this.option=option;
    }
    get option(){
        return this._option;
    }
    set option(value){
        this._option=value;
    }
}

//Добавить значение
function Add(){
    // console.log('Работает');
    const form = document.querySelector('.form')
    const str=form.textarea.value;      //добавление в строку данных из текстового поля
    console.log(str);
    var option=form.optionslist.value;
    console.log(option);
    
    const user = new User (str, option);    //создание экземпляра класса
    
    Users.push(user);               //добавление экземпляра класса в массив
    
    // Очистка формы
    form.textarea.value = "";
    form.optionslist.options[0].selected = true;
}

//Вывод свойство последнего объекта в массиве
function LastUser() {
    var number=Users.length;
    for(var i=0;i<Users.length;i++)
        console.log(Users[number-1].option);
}


//перемешивание 
function Shuffle(array) {
    array.sort(() => Math.random() - 0.5);
}
function MixArr() {
    Shuffle(Users);
    PrintArray();
}

//Вывод массива объектов
function PrintArray(){
  console.log(Users);
}