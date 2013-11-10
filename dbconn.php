<?php
class Database {

    protected $dbh;

    public function __construct() {
        $dsn = 'mysql:dbname=gangsteal;host=localhost';
        $user = 'root';
        $pass = '';
        $opt = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        $this->dbh = new PDO($dsn, $user, $pass, $opt);
    }

    public function getProducts($item) {
		
		$sql = "SELECT p.id, p.cid, p.productName, p.shortDesc, p.thumpImg , p.price, c.categoryName FROM products p JOIN category c on p.cid=c.id";
		$sql .= " WHERE p.productName LIKE 'air conditioner%' OR c.categoryName LIKE 'air conditioner%'";
		
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
	
	public function getProductDetails($id) {
		
		$sql = "SELECT p.id, p.productName, p.description, p.thumpImg , p.price FROM products p WHERE p.id=?";
				
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }
	
	public function getLatestProducts() {
		
		$sql = "SELECT p.id, p.productName, p.shortDesc, p.thumpImg , p.price FROM products p ORDER BY createDate DESC";
				
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
	
	public function addUser($params) {
		$qry = $this->dbh->prepare("INSERT INTO users(firstName, lastName, gender, password, address1, address2, city, state, zipcode, phone1, email, createDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$res = $qry->execute($params);
	}
	public function addDealer($params) {
		$qry = $this->dbh->prepare("INSERT INTO dealers(firstName, lastName, dealerName, gender, password, address1, address2, city, state, zipcode, phone1, email, createDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$res = $qry->execute($params);
	}
	


}

$db = new Database();

?>