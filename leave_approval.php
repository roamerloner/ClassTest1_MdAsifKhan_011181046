<?php
  require("db_connect.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Leave Approval</title>
    
</head>
<body>
    <h1>Leave Approval</h1>
    
    <table>
        <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Leave Application Date</th>
            <th>Leave Request Date</th>
            <th>Cause of Leave</th>
            <th>Action</th>
        </tr>
        
        <?php
        
        $leaveApplications = [
            ['id' => 1, 'name' => 'Asif', 'leave_date' => '2023-6-30', 'request_date' => '2023-6-25', 'cause' => 'Sick Leave'],
            ['id' => 2, 'name' => 'Ron', 'leave_date' => '2023-4-05', 'request_date' => '2023-3-26', 'cause' => 'Personal Leave'],
            ['id' => 3, 'name' => 'Fahim', 'leave_date' => '2023-6-10', 'request_date' => '2023-6-05', 'cause' => 'Personal Leave'],
        ];
        
        foreach ($leaveApplications as $leaveApp) {
            echo "<tr>";
            echo "<td>{$leaveApp['id']}</td>";
            echo "<td>{$leaveApp['name']}</td>";
            echo "<td>{$leaveApp['leave_date']}</td>";
            echo "<td>{$leaveApp['request_date']}</td>";
            echo "<td>{$leaveApp['cause']}</td>";
            echo "<td><a href=\"approve_request.php?id={$leaveApp['id']}\"><button class=\"approve-button\">Approve</button></a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

 