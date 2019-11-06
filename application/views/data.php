<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Welcome, You are successfully logged in.</h1>

    <?php
echo "<pre>";
echo print_r($this->session->all_userdata());
echo "</pre>";
?>

    <a href='<?=base_url()?>'>Logout</a>

</body>
</html>