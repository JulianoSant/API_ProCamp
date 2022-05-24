<?PHP
try
{

	//define( 'MYSQL_HOST', 'localhost' );
    //define( 'MYSQL_USER', 'root' );    
    //define( 'MYSQL_PASSWORD', '' );
    //define( 'MYSQL_DB_NAME', 'tads2020' );
	$MYSQL_HOST = 'localhost';
    $MYSQL_USER = 'root' ;    
    $MYSQL_PASSWORD =  '' ;
    $MYSQL_DB_NAME = 'tads2020';

	$conexao = new PDO( 'mysql:host=' . $MYSQL_HOST . ';dbname=' . $MYSQL_DB_NAME, $MYSQL_USER, $MYSQL_PASSWORD );
    $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);	
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
/*
$conexao = mysqli_connect("localhost","root","");
$bancodedados = "tads2020";
$db = mysqli_select_db($conexao,$bancodedados);
if (mysqli_connect_errno()) 
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    die();
}
*/
?>