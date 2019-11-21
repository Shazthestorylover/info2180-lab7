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
<ul>
<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>