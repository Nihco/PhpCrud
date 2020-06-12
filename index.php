<?php include("db.php");?>
<?php include ("includes/header.php");?>
<div class="container">
    <button>
        Agregar Mesa
    </button>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <table id="tablaMesas" class="display" style="width: 100%">
                <thead>
                <tr>
                    <th>nombre</th>
                    <th>id</th>
                    <th>region</th>
                    <th>comuna</th>
                    <th>comunidad</th>
                    <th>latitud</th>
                    <th>longitud</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($json['data'] as $item):?>
                    <tr>
                        <td><?php echo $item['nombre']?></td>
                        <td><?php echo $item['id']?></td>
                        <td><?php echo $item['region']?></td>
                        <td><?php echo $item['comuna']?></td>
                        <td><?php echo $item['comunidad']?></td>
                        <td><?php echo $item['latitud']?></td>
                        <td><?php echo $item['longitud']?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

<!--            <div class="card card-body">-->
<!--                <form action="">-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>-->
<!---->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
        </div>
        <div class="col-md-8">

        </div>
    </div>
</div>

<?php include("includes/footer.php")?>




