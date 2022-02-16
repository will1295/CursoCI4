<div class="container">
   <div class="form-group">
      <?= form_open('/CrudForm/Guardar'); ?>

      <?php if(isset($user)):
          //Sintaxis alternativa para if
          $name = $user[0]['name'];
          $email = $user[0]['email'];
       ?>
      <!-- <h1>El nombre y email estan seteados</h1> -->
       <?php else:
          $name="";
          $email="";
      ?>
     <!-- <h1>Los datos estan vacios</h1> -->
      <?php endif ?>
      <div class="row">
         <div class="offset-md-4 col-md-4">
            <?php
            echo form_label('Nombre: ','name');
            echo form_input(array('name'=>'nombre', 'placeholder'=>'Escribe tu nombre', 'class'=>'form-control','value'=>$name));
            ?>
         </div>
      </div>
      <div class="row">
         <div class="offset-md-4 col-md-4">
            <?php
              echo form_label('Email: ','email');
              echo form_input(array('name'=>'email', 'placeholder'=>'Escribe tu email', 'class'=>'form-control','value'=>$email)); 
              echo "<br>";
            ?>
         </div>
         <div class="row">
         <div class="offset-md-5 col-md-4">
            <?php
             echo form_submit('Guardar','Ingresar','class = "btn btn-success"');
             
             if(isset($user)){
                echo form_hidden ('id', $user[0]['id']);
                
             }
             

            ?>
         <a href="<?php echo base_url();?>/CrudForm" class="btn btn-info" role="button">Regresar</a>
         </div>
        
            
      </div>
            <?php
             echo form_close();
             ?>
     
   </div>

</div>

