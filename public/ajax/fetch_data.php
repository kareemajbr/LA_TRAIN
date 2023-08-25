<?php

if (!class_exists('\CodeIgniter\CodeIgniter', false)) {
    require __DIR__ . '/../vendor/autoload.php';
}

// Assuming you have set up your database connection and CodeIgniter 4 environment
use CodeIgniter\Database\Config;
use CodeIgniter\Database\Query;
use CodeIgniter\Database\ConnectionInterface;
use Config\Database;

// Get the selected station name from the POST data
$stationName = $_POST['stationName'];

// Create a database connection
$dbConfig = new Config();
$db = $dbConfig->defaultConnection();

// Fetch data from the database based on the selected station name
$query = $db->table('jadwal_kereta')
    ->where('destinasi_stasiun', $stationName)
    ->get();

// Get the query result as an array
$result = $query->getResultArray();

// Prepare the HTML table with the fetched data
$tableHtml = '<table>';
$tableHtml .= '<tr><th>Column 1</th><th>Column 2</th></tr>';

foreach ($result as $row) {
    $tableHtml .= '<tr>';
    $tableHtml .= '<td>' . $row['column1'] . '</td>';
    $tableHtml .= '<td>' . $row['column2'] . '</td>';
    $tableHtml .= '</tr>';
}

$tableHtml .= '</table>';

// Return the HTML table as the response
echo $tableHtml;

?>