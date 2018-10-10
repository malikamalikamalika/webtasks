document.querySelector('#determinant').addEventListener('click',func);
function func()
    {
        var number=document.querySelectorAll('input');
        var det=0;
        det=number[0].value*(number[4].value*number[8].value-number[5].value*number[7].value)-number[1].value*(number[3].value*number[8].value-number[5].value*number[6].value)+number[2].value*(number[3].value*number[7].value-number[4].value*number[6].value);
        console.log(det);
        document.querySelector('#result').innerHTML = det;
          
    }