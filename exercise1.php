<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>

<body>
    <!-- 
    Options under Employee Status:
    Regular
    Probationary
    Casual

    Salary Rate:
    Regular - 500
    Probationary - 400
    Casual - 300

    Options under Civil Status:
    Single
    Married
    Widow

    Tax Rate:
    Single - 12%
    Probationary - 10%
    Widow - 7% 
    
    Sample Case #1:
    No. of Days Worked: 15
    Employee Status:    Regular
    Civil Status:       Single
    Result:

    Gross Salary:       7,500.00
    Tax:                12%
    Deduction:          900.00
    Net Salary:         6,600.00

    Sample Case #2:
    No. of Days Worked: 15
    Employee Status:    Probationary
    Civil Status:       Married
    Result:

    Gross Salary:       4,800.00
    Tax:                10%
    Deduction:          480.00
    Net Salary:         4,320.00
    -->

    <h1>Exercise 1</h1>
    <form action="">
        No. of Days Worked <input type="number" name = "num1"><br /><br />
        Employee Status:
        <select name = "employee" >
            <option>Regular</option>
            <option>Probitionary</option>
            <option>Casual</option>
        </select><br /><br />
        Civil Status:
        <select name = status>
            <option>Single</option>
            <option>Married</option>
            <option>Widow</option>
        </select><br /><br />
        <button>Compute Salary</button>
    </form><br /><br />
    <?php
    // Do your code here
        $num1 = $_GET["num1"];
        $employee = $_GET["employee"];
        $status = $_GET["status"];
        $gsalary = 0;
        $deduct = 0;
        $net = 0;
        $tax = 0;

        switch ($employee){
            case 'Regular':
                $gsalary = 500 * $num1;
                
            break;
            case 'Probitionary':
                $gsalary = 400 * $num1;
            break;
            case 'Casual':
                $gsalary = 300 * $num1;
            break;          
        }

        switch($status){
            case 'Single':
                $tax = "12";
                $deduct = $gsalary * 0.12;
                $net = $gsalary - $deduct;
            break;
            case 'Married':
                $tax = "10";
                $deduct = $gsalary * 0.10;
                $net = $gsalary - $deduct;
            break;
            case 'Widow':
                $tax = "7";
                $deduct = $gsalary * 0.7;
                $net = $gsalary - $deduct;
            break;


        }


    // OUTPUT
    echo "Gross Salary: $gsalary.00 <br />";
    echo "Tax: $tax%<br />";
    echo "Deduction: $deduct.00<br />";
    echo "Net Salary: $net.00<br />";
    ?>


</body>

</html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>

<body>
    <!-- 
    Options under Employee Status:
    Regular
    Probationary
    Casual

    Salary Rate:
    Regular - 500
    Probationary - 400
    Casual - 300

    Options under Civil Status:
    Single
    Married
    Widow

    Tax Rate:
    Single - 12%
    Probationary - 10%
    Widow - 7% 
    
    Sample Case #1:
    No. of Days Worked: 15
    Employee Status:    Regular
    Civil Status:       Single
    Result:

    Gross Salary:       7,500.00
    Tax:                12%
    Deduction:          900.00
    Net Salary:         6,600.00

    Sample Case #2:
    No. of Days Worked: 15
    Employee Status:    Probationary
    Civil Status:       Married
    Result:

    Gross Salary:       4,800.00
    Tax:                10%
    Deduction:          480.00
    Net Salary:         4,320.00
    -->

    <h1>Exercise 1</h1>
    <form action="">
        No. of Days Worked <input type="number" name = "num1"><br /><br />
        Employee Status:
        <select name = "employee" >
            <option>Regular</option>
            <option>Married</option>
            <option>Casual</option>
        </select><br /><br />
        Civil Status:
        <select name = status>
            <option>Single</option>
            <option>Married</option>
            <option>Widow</option>
        </select><br /><br />
        <button>Compute Salary</button>
    </form><br /><br />
    <?php
    // Do your code here
        $num1 = $_GET["num1"];
        $employee = $_GET["employee"];
        $status = $_GET["status"];
        $gsalary = 0;
        $tax = 0;

        switch ($employee){
            case 'Regular':
                $gsalary = 500 * $num1;
                
            break;
            case 'Married':
                $gsalary = 400 * $num1;
            break;
            case 'Casual':
                $gsalary = 300 * $num1;
            break;          
        }

        switch($status){
            case 'Single':
                $tax = "12";
            break;

        }


    // OUTPUT
    echo "Gross Salary: $gsalary <br />";
    echo "Tax: $tax%<br />";
    echo "Deduction: 0.00<br />";
    echo "Net Salary: 0.00<br />";
    ?>


</body>

</html>
