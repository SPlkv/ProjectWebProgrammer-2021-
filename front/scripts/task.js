function GetRandomNumber(max){
    return Math.floor(Math.random() * max);         //Первое задание
}
alert(GetRandomNumber(100));

const Add=()=>{
    document.getElementById('textarea').value+=GetRandomNumber(100);    //Второе задание
}

function isNumberKey(evt)           //проверка на числовые значения
{
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}

function Sum(){                             //Третье задание
    if(document.getElementById('taskform__textarea-a').value&&document.getElementById('taskform__textarea-b').value)
    {
        var a=document.getElementById('taskform__textarea-a').value;
        var b=document.getElementById('taskform__textarea-b').value;
        var c=Number(a)+Number(b);
    }
    else
        alert("Поле пустое");

    alert(c);
}