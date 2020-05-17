<?php incLayout("header", ["title" => $title]); ?>

<div>
    <p>
        Editar perfil de usuario
    </p>
</div>

<?php var_dump($user); ?>

<section>
     <?php if ($user) { ?>
     <form action="<?= url("user/save") ?>" method="post" enctype="application/x-www-form-urlencoded">
         <input type="hidden" name="id" value="<?= $user->id ?>">
         <div>
             <label for="firstname">Nombre</label>
             <input type="text" name="firstname" id="firstname" value="<?= $user->firstname ?>">
         </div>
         <div>
             <label for="lastname">Apellido</label>
             <input type="text" name="lastname" id="lastname" value="<?= $user->lastname ?>">
         </div>
         <div>
             <a href="<?= url("user") ?>">Cancelar</a>
             <button type="submit">Guardar</button>
         </div>
     </form>
     <?php } else { ?>
     <div class="error">
         <p>Error: el usuario no existe!</p>
     </div>
     <?php } ?>
</section>

<?php incLayout("footer"); ?>