<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 03:01 PM
 */
?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> uom</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th class="numeric">uom</th>
                                <th>Part number</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $row):?>
                                <tr>
                                    <td><?php echo $row->uom?></td>
                                    <td><?php echo $row->partNumber?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </section>
                </div><!-- /content-panel -->
            </div><!-- /col-lg-4 -->
        </div><!-- /row -->

        <button id="btnAddApi" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success">Add Uom</button>

    </section><! --/wrapper -->
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Add Uom</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputFormUom">Uom</label>
                    <input type="text" class="form-control" id="inputFormUom">
                </div>
                <div class="form-group">
                    <label for="inputFormPartNumber">part Number</label>
                    <input type="text" class="form-control" id="inputFormPartNumber">
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
            $.post('<?php echo base_url('index.php/Uom/add')?>',
                {
                    uom         : $('#inputFormUom').val(),
                    partNumber  : $('#inputFormPartNumber').val()
                },
                function (data) {
                    location.reload();
                }
            );
        });
    });


</script>
