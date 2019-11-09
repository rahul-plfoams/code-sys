<div class="container mt--5">
    <div class="card shadow">
        <div class="card-header">
            Products
        </div>
        <div class="card-body text-center">
            <?=form_open("admin/products", ["id" => "form_products"])?>

            <div class="form-group row">
                <div class="col-lg-1 p-1">
                    <?=form_label("Name", "product_name", "class='col col-form-label'")?>
                    <?=form_input(["class" => "form-control col", "id" => "product_name", "name" => "product_name", "placeholder" => "Type Name here"])?>
                </div>
                <div class="col-lg-2 p-1">
                    <?=form_label("Grade", "product_grade", "class='col col-form-label'")?>
                    <?=form_input(["class" => "form-control col", "id" => "product_grade", "name" => "product_grade", "placeholder" => "Type Grade here"])?>
                </div>
                <div class="col-lg-2 p-1">
                    <?=form_label("Quality", "product_quality", "class='col col-form-label'")?>
                    <?=form_input(["class" => "form-control col", "id" => "product_quality", "name" => "product_quality", "placeholder" => "Type Quality here"])?>
                </div>
                <div class="col-lg-1 p-1">
                    <?=form_label("Rate", "product_sale_rate", "class='col col-form-label'")?>
                    <?=form_input(["class" => "form-control col", "id" => "product_sale_rate", "name" => "product_sale_rate", "placeholder" => "Type Rate here"])?>
                </div>
                <div class="col-lg-1 p-1">
                    <?=form_label("GST", "product_gst_rate", "class='col col-form-label'")?>
                    <?=form_input(["class" => "form-control col", "id" => "product_gst_rate", "name" => "product_gst_rate", "placeholder" => "Type GST here"])?>
                </div>
                <div class="col-lg-2 p-1">
                    <?=form_label("Remark", "product_remark", "class='col col-form-label'")?>
                    <?=form_input(["class" => "form-control col", "id" => "product_remark", "name" => "product_remark", "placeholder" => "Type Remark here"])?>
                </div>
                <div class="col-lg-1 p-1">
                    <?=form_label("Unit", "product_unit", "class='col col-form-label'")?>
                    <?=form_dropdown("units", ["mm", "kg", "Sq.Ft", "Pcs", "Meter"], "mm", "class='form-control'")?>
                </div>
                <div class="col-lg-2 p-0">
                    <?=form_label("Actions", "actions", "class='col-form-label'")?>
                    <div class=" btn-grp">
                        <?=form_button(["class" => "btn btn-dark button btnPush btnBlueGreen", "content" => "Save"])?>
                        <?=form_button(["class" => "btn btn-success button btnPush btnBlueGreen", "type" => "reset", "name" => "update", "content" => "Clear"], )?>
                    </div>
                </div>
            </div>
            <?=form_close()?>
            <?php
$this->table->set_heading("ID", "Name", "Grade", "Quality", "Unit", "Sale", "GST", "Remark", "Actions");
$template = ['table_open' => '<table id="myTbl" class="table table-bordered">'];
$this->table->set_template($template);
foreach ($products->result() as $product) {
    $this->table->add_row(
        $product->product_id,
        $product->product_name,
        $product->grade,
        $product->quality,
        $product->unit,
        $product->sale_rate,
        $product->gst_rate,
        $product->remark,
        "<i class='text-info fas fa-edit'></i>" . nbs(2) . "<i class='text-danger fas fa-trash-alt'></i>"
    );}?>
            <?=$this->table->generate()?>
        </div>
    </div>

</div>
<script>
    $(document).ready(() => {
        $('#myTbl').DataTable({
            dom: 'Bfrtip',
            buttons: ['pdf', {
                extend: 'print',
                exportOptions: {
                    columns: [1, 2, 3],
                },
                customize: function (win) {
                    $(win.document.body)
                        // .css('font-size', '10pt')
                        .prepend(
                            '<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'
                        );

                    // $(win.document.body).find('table')
                    //     .addClass('compact')
                    //     .css('font-size', 'inherit');

                }
            }]
        });
    });
</script>