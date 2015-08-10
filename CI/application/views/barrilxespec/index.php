<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 04:10 PM
 */?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Barrilxespec</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th class="numeric">ID</th>
                                <th>Description</th>
                                <th>Categoria</th>
                                <th class="numeric">peso</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $row):?>
                                <tr>
                                    <td><?php echo $row->idTara?></td>
                                    <td><?php echo $row->description?></td>
                                    <td><?php echo $row->categoria?></td>
                                    <td><?php echo $row->peso?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </section>
                </div><!-- /content-panel -->
            </div><!-- /col-lg-4 -->
        </div><!-- /row -->

        <button id="btnAddApi" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success">Add Barrilxespec</button>

    </section><! --/wrapper -->
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Add Barrilxespec </h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputFormIdTara">ID tara</label>
                    <input type="text" class="form-control" id="inputFormIdTara">
                </div>
                <div class="form-group">
                    <label for="inputFormDescription">Description</label>
                    <input type="text" class="form-control" id="inputFormDescription">
                </div>
                <div class="form-group">
                    <label for="inputFormCategoria">Categoria</label>
                    <input type="text" class="form-control" id="inputFormCategoria">
                </div>
                <div class="form-group">
                    <label for="inputFormPeso">Peso</label>
                    <input type="text" class="form-control" id="inputFormPeso">
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
            $.post('<?php echo base_url('index.php/Barrilxespec/add')?>',
                {
                    description : $('#inputFormDescription').val(),
                    categoria   : $('#inputFormCategoria').val(),
                    peso        : $('#inputFormPeso').val(),
                    idTara      : $('#inputFormIdTara').val(),

                },
                function (data) {
                    location.reload();
                }
            );
        });
    });


</script>
