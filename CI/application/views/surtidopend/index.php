<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 01:10 PM
 */

?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Surtido Pend</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th class="numeric">Serie</th>
                                <th>fecha</th>
                                <th>isTransSloc</th>
                                <th class="numeric">Gafete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $row):?>
                                <tr>
                                    <td><?php echo $row->serie?></td>
                                    <td><?php echo $row->fecha?></td>
                                    <td><?php echo $row->isTransSloc?></td>
                                    <td><?php echo $row->gafete?></td>

                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </section>
                </div><!-- /content-panel -->
            </div><!-- /col-lg-4 -->
        </div><!-- /row -->

        <button id="btnAddApi" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success">Add Surtido Pend</button>

    </section><! --/wrapper -->
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Add Surtido Pend</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputFormSerie">Serie</label>
                    <input type="text" class="form-control" id="inputFormSerie">
                </div>
                <div class="form-group">
                    <label for="inputFormFecha">Fecha</label>
                    <input type="date" class="form-control" id="inputFormFecha">
                </div>
                <div class="form-group">
                    <label for="inputFormIsTransLoc">isTransloc</label>
                    <input type="text" class="form-control" id="inputFormIsTransLoc">
                </div>
                <div class="form-group">
                    <label for="inputFormGafete">Gafete</label>
                    <input type="text" class="form-control" id="inputFormGafete">
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
            $.post('<?php echo base_url('index.php/SurtidoPend/add')?>',
                {
                    serie       : $('#inputFormSerie').val(),
                    fecha       : $('#inputFormFecha').val(),
                    isTransSloc : $('#inputFormIsTransSloc').val(),
                    gafete      : $('#inputFormGafete').val()
                },
                function (data) {
                    location.reload();
                }
            );
        });
    });


</script>
