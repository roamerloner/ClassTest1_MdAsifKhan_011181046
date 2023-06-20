<?php
  require("db_connect.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Table</title>
</head>
<body>
    <h1>Employee Table</h1>
    
    <table>
        <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
        </tr>
        
        <?php
        $employees = [
            ['id' => 1, 'name' => 'John Doe'],
            ['id' => 2, 'name' => 'Jane Smith'],
            ['id' => 3, 'name' => 'Mike Johnson']
        ];
        
        foreach ($employees as $employee) {
            echo "<tr>";
            echo "<td>{$employee['id']}</td>";
            echo "<td>{$employee['name']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    
    <button onclick="document.location='leave_application_input.php'" class="leave-button">Leave Application Request</button>
</body>
</html>