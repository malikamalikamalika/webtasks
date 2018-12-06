<!doctype>
<html>
<head>
    <style>
        table tr td{
            width:230px;
            height:30px;
            padding:5px;
        }
        select{
            width:100%;
            background:white;
            padding:5px;
            border-radius:5px;
        } 
        input[type='text']{
            padding:5px;
            border-radius:5px;
            
        }
        input[type='submit']{
            padding:5px;
            border-radius:5px;   
        }
        input[type='number']{
            padding:5px;
            border-radius:5px;   
        }
    </style>
</head>
<body>
    <?php
        $makers = ["Porsche","BMW","Mercedes","Tayota","Nissan"];
        ?>
    <form action="task2.php" method="post">
    <table border="1" bordercolor="black" >
            <tr><td>Maker:</td>
                <td><select name="maker" id="maker">
                        <?php 
                        for($i=0;$i<count($makers);$i++) {
                            echo '<option>'.$makers[$i].'</option>';
                        }
                        ?>
                    </select></td></tr>
            <tr><td>Year: </td><td><select name="year" id="year">
                        <?php 
                        for ($i = 2018; $i >= 1970; $i--) {
                            echo '<option>'.$i.'</option>';
                        }
                        ?></select></td></tr>
            <tr><td>Model:</td>
                <td><input type="text" name="model"></td></tr>
                <tr><td>Engine:</td><td>
            <label><input type="radio" name="eng" value="Petrolium"/>Petrolium</label>
            <label><input type="radio" name="eng" value="Gas"/>Gas</label>
            <label><input type="radio" name="eng" value="Diesel"/>Diesel</label></td></tr>
            <tr><tr><td>Price:</td>
                    <td><input type="text" name="price"></td></tr> </tr>
            <tr><td>Additional: </td>
                <td><input type="checkbox" name="tax_payed"> tax payed <br>
                    <input type="checkbox" name="technical"> technical check passed <br>
                    <input type="checkbox" name="require"> doesn't require investment <br></td>
            </tr>
        </table>
        <input type="submit" value="Submit" name="submit"/>
    </form>
    </body>
    </html>