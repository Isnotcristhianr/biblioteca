<?php
echo $cabecera;

?>
<h1>Api</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered bg-light" id="tb">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Cuerpo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['title']; ?></td>
                        <td><?php echo $user['body']; ?></td>
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