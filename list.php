<?php

require_once('helpers.php');

try {
    $dbh = getDatabaseHandler();
    $sql = 'SELECT * ';
    $sql .= 'FROM bookinventory';
    $books = $dbh->query($sql);
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}

require_once('partials/header.php');
?>
    <ul class="mt-3">
<?php
    foreach ($books as $book) {
        echo "<li><a href='checkout.php?book_id={$book['id']}'>{$book['name']} ({$book['quantity']} items)</a></li>";
    }
?>
    </ul>
<?php
require_once('partials/footer.php');
