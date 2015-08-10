<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 07:55 PM
 */?>
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Usuarios</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th class="numeric">ID</th>
                                <th>Nombre</th>
                                <th>Gafete</th>
                                <th class="numeric">isAdministrador</th>
                                <th class="numeric">Tara Password</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $row):?>
                                <tr>
                                    <td><?php echo $row->idUsuario?></td>
                                    <td><?php echo $row->nombre?></td>
                                    <td><?php echo $row->gafete?></td>
                                    <td><?php echo $row->isAdministrador?></td>
                                    <td><?php echo '*******'?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </section>
                </div><!-- /content-panel -->
            </div><!-- /col-lg-4 -->
        </div><!-- /row -->

        <button id="btnAddApi" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success">Add Usuario</button>

    </section><! --/wrapper -->
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Add Usuario</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputFormDate">Date</label>
                    <input type="date" class="form-control" id="inputFormDate">
                </div>
                <div class="form-group">
                    <label for="inputFormPartNumber">part Number</label>
                    <input type="text" class="form-control" id="inputFormPartNumber">
                </div>
                <div class="form-group">
                    <label for="inputFormSerie">Serie</label>
                    <input type="text" class="form-control" id="inputFormSerie">
                </div>
                <div class="form-group">
                    <label for="inputFormTaraWeight">Password</label>
                    <input type="text" class="form-control" id="inputFormTaraWeight">
                </div><div class="form-group">
                    <label for="inputFormTaraWeight">Password</label>
                    <input type="text" class="form-control" id="inputFormTaraWeight">
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
            $.post('<?php echo base_url('index.php/Usuarios/add')?>',
                {
                    nombre          : $('#inputFormSerie').val(),
                    gafete          : $('#inputFormPartNumber').val(),
                    isAdministrador : $('#inputFormTotalWeight').val(),
                    password        : $('#inputFormTaraWeight').val()
                },
                function (data) {
                    location.reload();
                }
            );
        });
    });


</script>


<!--TODO: Implement create users -->