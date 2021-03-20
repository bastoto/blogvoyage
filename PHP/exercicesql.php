 <?php
include("bdd.php");
$username = "samedi";
$password = "dimanche";
//$req0 = $bdd -> query('SELECT * FROM login WHERE username ="'. $username .'" AND password ="'. $password.'" ' );
//$result0 = $req0 -> fetch();
//$req0 = $bdd -> exec('UPDATE login SET username = "'.$username.'" WHERE id= "1" ');
//$req0 = $bdd -> exec('INSERT INTO login(username,password) VALUES("user1","20")');
//$req0 = $bdd -> exec('INSERT INTO login(username,password) VALUES("user2","90")');
//$req0 = $bdd -> exec('INSERT INTO login(username,password) VALUES("user3","40")');
//$req0 = $bdd -> exec('INSERT INTO login(username,password) VALUES("user4","70")');
//$req0 = $bdd -> exec('INSERT INTO login(username,password) VALUES("user5","270")');
//$req0 = $bdd -> exec('INSERT INTO login(username,password) VALUES("user6","207")');
//$req0 = $bdd -> exec('INSERT INTO login(username,password) VALUES("user7","204")');
//$req0 = $bdd -> exec('INSERT INTO login(username,password) VALUES("user8","206")');
//$req0 = $bdd -> ('INSERT INTO login(username,password) VALUES("user8","206")');
//$req0 = $bdd -> exec('DELETE FROM login WHERE username ="blue"');

$req0 = $bdd -> query('SELECT MAX(id) AS maxid FROM login ' );
$result0 = $req0 -> fetch();
echo $result0["maxid"];
?>