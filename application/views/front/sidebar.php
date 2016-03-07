<section>
  
  <div class="separador1">
    <h4>BUSCAR TIENDAS</h4>
  </div>

    <form action="" method="post">

    <div class="form-group">
      <label>Palabra Clave</label>
      <input type="text" class="form-control" id="#" placeholder="Ej: Mascotas">
    </div>

    <div class="form-group">
      <label>Categoría</label>
      
      <select class="form-control">
      <option>SELECCIONE UNA CATEGORÍA</option>
            <?php 
    for ($i = 1; $i <= count($categoria); $i++)
          {
          if( array_key_exists($i, $categoria)){
     ?>
              
              <option value="<?php echo $i ?>"><?php echo $categoria[$i] ?></option>
    <?php
                }
           }
    ?>
        
      </select>
    </div>

    <div class="form-group">
      <label>Región</label>
      <select class="form-control" name="region">
           <option>SELECCIONE UNA REGIÓN</option>
            <?php 
    for ($i = 1; $i <= count($regiones); $i++)
          {
          if( array_key_exists($i, $regiones)){
     ?>
              
              <option value="<?php echo $i ?>"><?php echo $regiones[$i] ?></option>
    <?php
                }
           }
    ?>
      </select>
    </div>

    <div class="form-group">
      <label>Ciudad</label>
      <select class="form-control" name="ciudad">
         <option>SELECCIONE UNA CIUDAD</option>
            <?php 
    for ($i = 1; $i <= count($categoria); $i++)
          {
          if( array_key_exists($i, $categoria)){
     ?>
              
              <option value="<?php echo $i ?>"><?php echo $categoria[$i] ?></option>
    <?php
                }
           }
    ?>
      </select>
    </div>

        <button onclick="buscar_tiendas()" class="btn btn-default center-block" type="submit"><i class="fa fa-search"></i> Buscar</button>
  </form>

  <div class="separador1">
    <h4>TOP 10 CATEGORÍAS</h4>
  </div>

  <div id="menu-categoria">
    <ul class="fa-ul">
        <?php foreach ($top_categorias as $key => $nombre_cat) 
             {
           
            ?>
              
              <li><i class="fa-li fa fa-user"></i><?php echo $nombre_cat['nombre'] ?></li>
    <?php
            
           
           
             }
?> 
    </ul>
  </div>

  <div class="separador1">
    <h4>PUBLICIDAD</h4>
  </div>

  <img class="img-responsive" src="<?php echo base_url()?>views/front/js/holder.js/300x300/auto" alt="">

</section>