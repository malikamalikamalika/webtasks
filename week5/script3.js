document.querySelector('#addStudent').addEventListener('click',func);

function func()
    {
        var inputs=document.querySelectorAll('input');
        var table = document.getElementById("students");
        var index=table.rows.length;
        
        var row = table.insertRow(1);

       
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        
        cell1.innerHTML = inputs[0].value;
        cell2.innerHTML = inputs[1].value;        
        cell3.innerHTML = "<strong>" + document.getElementById('faculty').value + "</strong>";
          
    }