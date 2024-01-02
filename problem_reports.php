<!DOCTYPE html>
<html>
<head>
    <title>Problem Reports</title>
</head>
<body>

<h1>Problem Reports</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Description</th>
        <th>Reported By</th>
        <th>Date Reported</th>
        <th>Statuts</th>
        <th>Action</th>
    </tr>
    <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
       <tr>
            <td><?= $row['ID'] ?></td>
            <td><?= $row['problem_description'] ?></td>
            <td><?= $row['statuts'] ?></td>
            <td><?= $row['reported_by'] ?></td>
            <td><?= $row['date_reported'] ?></td>
            <td>
                <!-- Include your code for actions such as update or delete here -->
            </td>
       </tr>
    <?php endwhile; ?>
</table>

</body>
</html>