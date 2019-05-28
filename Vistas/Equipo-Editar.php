<h1 class="page-header">
    <?php echo $equipos->idequipo != null ? $equipos->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=equipos">Equipo</a></li>
  <li class="active"><?php echo $equipos->id != null ? $equipos->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-equipo" action="?c=equipos&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idequipo" value="<?php echo $equipos->idequipos; ?>" />
      <div class="form-group">
        <label>Codigo</label>
        <input type="text" name="codigo" value="<?php echo $equipos->codigo; ?>" class="form-control" placeholder="Ingrese el codigo" required>
    </div>
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $equipos->nombre; ?>" class="form-control" placeholder="Ingrese el nombre del equipo" required>
    </div>   
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-equipo").submit(function(){
            return $(this).validate();
        });
    })
</script>