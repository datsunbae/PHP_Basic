<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
    <?php
        require_once("userclass.php");
        $datsunbae = new User("Datsunbae", "datsunbae@gmail.com");

        echo "<h2>-------- USER INFO ---------</h2>";
        echo "UserID: " . $datsunbae->getUserID(). "<br/>";
        echo "Username: " . $datsunbae->getUserName(). "<br/>";

        $nguyenvana = new User("Nguyen Van A", "anguyen@gmail.com");
        echo "<h2>-------- MORE USERS ---------</h2>";
        echo "UserID: " . $nguyenvana->getUserID(). "<br/>";
        echo "Username: " . $nguyenvana->getUserName(). "<br/>";


        //

        include("employeeClass.php");
        $person_a = new Person("Nguyen Van B", 1234);
        echo "<h2>-------- MORE OPP PHP ---------</h2>";
        echo "Person Name: " . $person_a->getName(). "<br/>";
        echo "Person ID: " . $person_a->getNationalID(). "<br/>";

        $employee_a = new Employee("Nguyen Van C", 5678, "Sercurity");
        echo "Employee ID: " . $employee_a->getEmployeeID(). "<br/>";
        echo "Employee Name: " . $employee_a->getName(). "<br/>";
        echo "Employee Department: " . $employee_a->getDepartment(). "<br/>";

        echo "<h2>-------- MORE EMPLOYEES ---------</h2>";
        $employee_b = new Employee("Nguyen Van D", 123123123, "Offical");
        echo "Employee ID: " . $employee_b->getEmployeeID(). "<br/>";
        echo "Employee Name: " . $employee_b->getName(). "<br/>";
        echo "Employee Department: " . $employee_b->getDepartment(). "<br/>";
        
    ?>
    </div>
    <footer>
        &#169; 2023 - Datsunbae - Faculty of Information Technology
    </footer>
</body>
</html>