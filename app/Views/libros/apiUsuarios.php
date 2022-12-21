<?php
echo $cabecera;

?>
<h1>Api</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered bg-light m-5 p-5" id="tb">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user['idLogin']; ?></td>
                        <td><?php echo $user['user']; ?></td>
                        <td><?php echo $user['pass']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
echo $pie;
?>