<html>

<head>
    <title>Table</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $item) {?>
                
            <tr>
                <td><?=$item["id"]?> </td>
                <td><?=$item["email"]?></td>
                <td><?=$item["address"]?></td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
    
</body>

</html>