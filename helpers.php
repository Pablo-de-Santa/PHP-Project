<?php

function getDatabaseHandler() {
    static $dbh = null;

    if ($dbh) {
        return $dbh;
    }

    $dsn = 'mysql:dbname=php_project;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    return $dbh;
}

function getBookById($bookId) {
    $dbh = getDatabaseHandler();
    $sql = 'SELECT * ';
    $sql .= 'FROM bookinventory ';
    $sql .= " WHERE BookInventory.id = {$bookId}";
    $rows = $dbh->query($sql)->fetchAll();

    if (count($rows) === 0) {
        return null;
    }

    return $rows[0];
}

function createCustomer($firstName, $lastName) {
    $dbh = getDatabaseHandler();
    $statement = $dbh->prepare('INSERT INTO customers VALUES (DEFAULT, ?, ?)');
    $statement->execute([$firstName, $lastName]);
    return $dbh->lastInsertId();
}

function createCreditCard($number, $name, $expiration, $cvv) {
    $dbh = getDatabaseHandler();
    $statement = $dbh->prepare('INSERT INTO creditcards VALUES (DEFAULT, ?, ?, ?, ?)');
    $statement->execute([$number, $name, $expiration, $cvv]);
    return $dbh->lastInsertId();
}

function createOrder($bookId, $customerId, $creditCardId, $quantity) {
    $dbh = getDatabaseHandler();
    $statement = $dbh->prepare('INSERT INTO orders VALUES (DEFAULT, ?, ?, ?, ?)');
    $statement->execute([$bookId, $customerId, $creditCardId, $quantity]);
    return $dbh->lastInsertId();
}

function decreaseQuantity($bookId, $numberToSubtract) {
    $dbh = getDatabaseHandler();
    $statement = $dbh->prepare('UPDATE bookinventory SET quantity = quantity - ? WHERE id = ?');
    $statement->execute([$numberToSubtract, $bookId]);
}

