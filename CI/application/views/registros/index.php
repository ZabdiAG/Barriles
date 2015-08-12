<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 10/08/15
 * Time: 09:14 PM
 */
var_dump($data);
//var_dump($usuarios);
//var_dump($rutas);
?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Registros</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>Nombre Usuario</th>
                                <th>Nombre Ruta</th>
                                <th>Hora</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $row):?>
                                <tr>
                                    <td><?php echo $row->nombreUsuario?></td>
                                    <td><?php echo $row->nombre?></td>
                                    <td><?php echo $row->hora?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </section>
                </div><!-- /content-panel -->
            </div><!-- /col-lg-4 -->
        </div><!-- /row -->

        <button id="btnAddApi" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success">Add Registro</button>

    </section><! --/wrapper -->
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Add Registro </h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputFormHora">Hora</label>
                    <input type="datetime-local" class="form-control" id="inputFormHora">
                </div>
                <div class="form-group">
                    <label for="inputFormIdRuta">Ruta:</label>
                    <select class="form-control" id="inputFormIdRuta">
                        <?php foreach($rutas as $row):?>
                            <option value="<?php echo $row->idRuta?>"><?php echo $row->nombre?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputFormIdUsuario">Usuario:</label>
                    <select class="form-control" id="inputFormIdUsuario">
                        <?php foreach($usuarios as $row):?>
                            <option value="<?php echo $row->idUsuario?>"><?php echo $row->nombre?></option>
                        <?php endforeach ?>
                    </select>
                </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="btnConfirmAdd" type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
<!--End Modal -->

<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        UP
        <a href="#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->




<script>
    $( document ).ready(function () {
        $('#btnAgregarApi').click(function () {
        });

        $('#btnConfirmAdd').click(function () {
            console.log('clicked');
            $.post('<?php echo base_url('index.php/registros/add')?>',
                {
                    idUsuario   : $('#inputFormIdUsuario').val(),
                    idRuta      : $('#inputFormIdRuta').val(),
                    hora        : $('#inputFormHora').val()

                },
                function (data) {
                    location.reload();
                }
            );
        });
    });


</script>
