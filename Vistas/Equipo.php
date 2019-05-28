<h1 class="page-header">CRUD con el patrón MVC en PHP POO y PDO </h1>


    <a class="btn btn-primary pull-right" href="?c=equipos&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Codigo</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Nombre</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
         <td><?php echo $r->codigo; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=equipos&a=Crud&idequipo=<?php echo $r->idequipo; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=equipos&a=Eliminar&idequipo=<?php echo $r->idequipo; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="assets/js/datatable.js">  

</script>


</html>