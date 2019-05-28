<?php
require_once '../lib/librerias';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of equipos
 *
 * @author Pedro Navarro
 */
class equipo {
    
    private $pdo;
    
    
    private $idequipo;
    private $codigo;
    private $nombre;
    
    public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = DBConnect::conexion();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
    public function Listar()
	{
		try
		{
			$result = array();
 
			$stm = $this->pdo->prepare("SELECT * FROM equipo");
			$stm->execute();
 
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
        public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM equipo WHERE idequipo = ?");
			          
 
			$stm->execute(array($idequipo));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM equipo WHERE idequipo = ?");			          
 
			$stm->execute(array($idequipo));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
        public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE equipos SET 
                                codigo 		= ?,
				nombre          = ?
                                WHERE id = ?";
 
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->codigo, 
                                        $data->nombre)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
        public function Registrar(cliente $data)
	{
		try 
		{
		$sql = "INSERT INTO equipos (codigo,nombre) 
		        VALUES (?, ?)";
 
		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->codigo, 
                                        $data->nombre 
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
    function InsertaEquipo() {
        /* Verficamos la existencia */
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }


        $PDOst = $dblink->prepare('INSERT INTO equipo ( codigo, nombre)
                                                 VALUES (?,?)');

        $PDOst->execute(array($this->codigo, $this->nombre));
    }

    function EliminarEquipo() {

        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }

        $PDOst = $dblink->prepare('delete from equipo where idequipo=?');

        $PDOst->execute(array($this->idequipo));
    }

    function ListarEquipos() {
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }
        $stmt = $dblink->prepare("SELECT idequipo, codigo, nombre FROM equipo");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>

                <tr>
                    <td><?php if (isset($row["idequipo"])) {
                    print($row["idequipo"]);
                } ?></td>
                    <td><?php if (isset($row["codigo"])) {
                    print($row["codigo"]);
                } ?></td>
                    <td><?php if (isset($row["nombre"])) {
                    print($row["nombre"]);
                } ?></td>
                    <td><a type="button" id="eliminarEquipo" class="btn-primary" href="<?=URLBASE?>controladores/eliminarEquipo.php?idequipo=<?php echo $row["idequipo"];?>">Eliminar</a></td>
                    <td><a type="button" id="modificarEquipo" class="btn-primary" href="<?=URLBASE?>Vistas/modificarEquipo.php?idequipo=<?php echo $row["idequipo"];?>">Modificar</a></td>

                </tr>

                <?php
            }
        }
    }

    function ActualizaEquipo() {
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }

        $PDOst = $dblink->prepare('update equipo SET nombre=?, codigo=?WHERE idequipo=?');

        $PDOst->execute(array($this->nombre, $this->codigo, $this->idequipo));
    }

}
