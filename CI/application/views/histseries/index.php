<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 12:34 AM
 */

?>
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Hist Series</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th class="numeric">ID</th>
                                <th>Serie</th>
                                <th>Part number</th>
                                <th class="numeric">Loc Actual</th>
                                <th class="numeric">Std Pack</th>
                                <th class="numeric">Estacion</th>
                                <th class="numeric">Status</th>
                                <th class="numeric">Fecha alta</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $row):?>
                                <tr>
                                    <td><?php echo $row->idHistSeries?></td>
                                    <td><?php echo $row->serie?></td>
                                    <td><?php echo $row->partNumber?></td>
                                    <td><?php echo $row->locActual?></td>
                                    <td><?php echo $row->stdPack?></td>
                                    <td><?php echo $row->estacion?></td>
                                    <td><?php echo $row->status?></td>
                                    <td><?php echo $row->fechaAlta?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </section>
                </div><!-- /content-panel -->
            </div><!-- /col-lg-4 -->
        </div><!-- /row -->

        <button id="btnAddApi" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success">Add Hist Serie</button>

    </section><! --/wrapper -->
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Add Hist Serie</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputFormSerie">Serie</label>
                    <input type="text" class="form-control" id="inputFormSerie">
                </div>
                <div class="form-group">
                    <label for="inputFormPartNumber">part Number</label>
                    <input type="text" class="form-control" id="inputFormPartNumber">
                </div>
                <div class="form-group">
                    <label for="inputFormLocActual">Loc Actual</label>
                    <input type="text" class="form-control" id="inputFormLocActual">
                </div>
                <div class="form-group">
                    <label for="inputFormStdPack">Std Pack</label>
                    <input type="text" class="form-control" id="inputFormStdPack">
                </div>
                <div class="form-group">
                    <label for="inputFormEstacion">Estacion</label>
                    <input type="text" class="form-control" id="inputFormEstacion">
                </div>
                <div class="form-group">
                    <label for="inputFormStatus">Status</label>
                    <input type="text" class="form-control" id="inputFormStatus">
                </div>
                <div class="form-group">
                    <label for="inputFormFechaAlta">Fecha Alta</label>
                    <input type="date" class="form-control" id="inputFormFechaAlta">
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
            $.post('<?php echo base_url('index.php/HistSeries/add')?>',
                {
                    serie       : $('#inputFormSerie').val(),
                    partNumber  : $('#inputFormPartNumber').val(),
                    locActual   : $('#inputFormLocActual').val(),
                    stdPack     : $('#inputFormStdPack').val(),
                    estacion    : $('#inputFormEstacion').val(),
                    status      : $('#inputFormStatus').val(),
                    fechaAlta   : $('#inputFormFechaAlta').val()
                },
                function (data) {
                    location.reload();
                }
            );
        });
    });


</script>


