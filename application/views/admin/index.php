<?php
$label_attributes = ["class" => "form-control-label text-white"];
$input_classes = "form-control form-control-alternative";
?>
<script src="<?=base_url("assets/js/home.js")?>"></script>
<div class="container-fluid mt--7">
  <div class="row">
    <div class="col-xl-4 mb-5 mb-xl-0">
      <div class="card bg-gradient-default shadow">
        <div class="card-header bg-transparent">
          <div class="row align-items-center">
            <div class="col">
              <h2 class="text-uppercase text-light ls-1 mb-1">Create Account</h2>
            </div>
          </div>
        </div>
        <div class="card-body pt-0">
          <!-- < action="./create_user.php" method="POST"> -->
          <?=form_open("admin/create_user")?>
          <div>
            <div class="row">
              <div class="col-lg-12">
                <?=form_label("Name", '', $label_attributes)?>
                <?=form_input(["name" => "name", "placeholder" => "Type name here", "class" => $input_classes,"value"=>set_value("name")])?>
                <?=form_error("name")?>
              </div>
              <div class="col-lg-12">
                <?=form_label("Mobile No:", '', $label_attributes)?>
                <?=form_input(["name" => "mobile", "placeholder" => "Type mobile here", "class" => $input_classes,"value"=>set_value("mobile")])?>
                <?=form_error("mobile")?>
              </div>
              <div class="col-lg-12">
                <?=form_label("User Type:", '', $label_attributes)?>
                <?=form_dropdown("user_type", ["admin" => "Admin", "vendor" => "Vendor", "staff" => "Staff"], "vendor", "class='form-control'")?>
              </div>
              <div class="col-lg-12">
                <?=form_label("Email:", '', $label_attributes)?>
                <?=form_input(["name" => "email", "placeholder" => "Type Email here", "class" => $input_classes,"value"=>set_value("email")])?>
                <?=form_error("email")?>
              </div>
              <div class="col-lg-12">
                <?=form_label("Password:", '', $label_attributes)?>
                <?=form_input(["name" => "password_1", "placeholder" => "Type Password here", "class" => $input_classes,"value"=>set_value("password_1")])?>
                <?=form_error("password_1")?>
              </div>
              <div class="col-lg-12">
                <?=form_label("Confirm Password:", '', $label_attributes)?>
                <?=form_input(["name" => "password_2", "placeholder" => "Confirm Password here", "class" => $input_classes,"value"=>set_value("password_1")])?>
                <?=form_error("password_1")?>
              </div>
              <div class="col-lg-12 pt-2">
                <div class="row">
                  <div class="col-lg-6">
                    <?=form_submit(["name" => "add", "class" => "btn btn-success", "value" => "Add"])?>
                    
                  </div>
                  <div class="col-lg-6">
                    <?=form_reset(["name" => "clear", "class" => "btn btn-danger", "value" => "Clear"])?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?=form_close()?>
        </div>
      </div>

    </div>
    <div class="col-xl-8">
      <div class="card shadow">
        <div class="card-header bg-transparent">
          <div class="row align-items-center">
            <div class="col">
              <h2 class="mb-0">Vendors/Staff</h2>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div>
              <table class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user) {
    $status = $user->status == 1 ? 'enabled' : 'disabled';
    echo "<tr>
          <td>$user->name</td>
          <td>$user->mobile</td>
          <td>$user->user_type</td>
          <td> <a  href='admin/edit/$user->id'><i class='text-info fas fa-edit'></i></a>" . nbs(2) . "<a href='admin/delete/$user->id'><i class='text-danger fas fa-trash-alt'></i></a> </td>
          <td id='accStatus'>$status</td>
          </tr>";
}
?>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(() => {
    $('table').DataTable({
      dom: 'Bfrtip',
      buttons: ['pdf', 'print']
    });
    $("#accStatus").click(() => {
      status = $("#accStatus").text() === "enabled" ? 1 : 0;
      console.log(status);
      $.post("<?=base_url('ajax/statusChange')?>", {
          status: status
        },
        (res) => {
          $("#accStatus").text(res);
        }
      )
    });
  });
</script>