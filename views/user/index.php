<h1>Lista de usuarios</h1>




<table class="table">


    <thead>
        <th>id</th>
        <th>name</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user):  ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td width="200" class="table__options">
                <button class="btn btn-outline-green">Editar</button>
                <button class="btn btn-outline-red">Borrar</button>
            </td>
        </tr>
    <?php endforeach; ?>


    <form action="?controller=user&method=store" method="post">

   <center>
	<label>Registre un nuevo usuario</label>
       <br><br>

	<input class="form-control" placeholder="Nombre" type="text" name="name" >
	<button class="btn btn-success">Agregar</button>
</form>

    </center>

    <br>

    </tbody>
</table>

