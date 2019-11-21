<?php
$host = getenv('IP');
$username = 'Shazthestorylover';
$password = '#Shazzam19';
$dbname = 'world';


$getCountry = $_GET['country'];
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$getCountry%'" );

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);

?>

<table>
    <!-- <caption>List of Students</caption> -->
    <thead>
        <tr>
            <th>Name</th>
            <th>Continent</th>
            <th>Independence</th>
            <th>Head of State</th>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($results as $row): ?>
        <tr>
            <td><?= $row['name']; ?></td>
            <td><?= $row['continent']; ?></td>
            <td><?= $row['independence_year']; ?></td>
            <td><?= $row['head_of_state']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<ul>
<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>