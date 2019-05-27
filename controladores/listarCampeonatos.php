 <?php 
include ("../lib/librerias.php");

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Codigo</th><th>Nombre</th><th>Fecha Inicio</th><th>Fecha Termino</th><th>Cantidad Partidos</th></tr>";
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }
    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }
    function beginChildren() {
        echo "<tr>";
    }
    function endChildren() {
        echo "</tr>" . "\n";
    }
}
$objCamp = new campeonato(null,null,null,null,null,null); 
$objCamp->ListarCampeonatos();
echo "</table>";
?> 

