<?php
$dbname = 'webshop';
$dbuser = 'webshop';
$dbpass = 'passwort123';
try {
    $dblink = new PDO('mysql:host=localhost;dbname=webshop', $dbuser, $dbpass);
    //$db = new PDO($dsn, $dbuser, $dbpass);
    echo 'Connection Succesfull';
} catch (PDOException $e){
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();
    echo $error_message;
    exit();
};
$data = $_POST;

$errors = [];
foreach(['username', 'password', 'email'] as $field){
    if (empty($data[$field])) {
        $errors[] = sprintf('THe %s is a required field', $field);
    };
};
if (!empty($errors)) {
    echo implode('<br />', $errors);
    exit;
};
//validate email
$email = $data['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'INvalid email format';
    exit;
};
//check email
$statement = $dblink->prepare('SELECT * FROM tbl_user WHERE email = :email');
$statement->execute(['email' => $data['email']]);

if (!empty($statement->fetch())) {
    echo 'User with such email exists';
    exit;
};
//insert new user
$statement = $dblink->prepare(
    'INSERT INTO tbl_user (username, password, email) VALUES (:username, :password, :email)'
);
$statement->execute([
    'username' => $data['username'], 
    'password' => password_hash($data['password'], PASSWORD_BCRYPT), 
    'email' => $data['email']

]);

echo 'The user has been succesfully saved.';

$iduno = $dblink->prepare("SELECT product_id, description, image, name, price FROM tbl_product");
$iduno->execute();
$arr = $iduno->fetchALL(PDO::FETCH_ASSOC);
print_r($arr);
echo $arr->rowCount();
for($i=0; $i>sizeof($arr); $i++) {
    echo 'product_id: ' . $arr[$i]['product_id'] . '<br />';
    echo 'description: ' . $arr[$i]['description'] . '<br />';
    echo 'image: ' . $arr[$i]['image'] . '<br />';
    echo 'name: ' . $arr[$i]['name'] . '<br />';
    echo 'price: ' . $arr[$i]['price'] . '<br />';

}
?>