<section>
    <h1>Welcome</h1>
<?php

$attr_form = array(
    'class' => 'login',
    'method' => 'POST'
);
$attr_username = array(
    'name' => 'username',
    'id' => 'username',
    'placeholder' => 'username'
);
$attr_password = array(
    'name' => 'password',
    'id' => 'password',
    'placeholder' => 'password'
);
$attr_button = array(
    'id' => 'loginbttn',
    'class' => 'submit button',
    'type' => 'submit',
    'content' => 'Log in',
    'name' => 'submit'
);
echo '<div class = "inlog_box">';
echo '<div id = "error">';
echo $this->session->flashdata('validation_errors');
echo '</div>';
echo form_open('../users/validate ', $attr_form);
echo form_fieldset();
echo '<label class = "username"><span><b>Username</b></span>';
echo form_input($attr_username);
echo '</label><label class = "passsword"><span><b>Password</b></span>';
echo form_password($attr_password);
echo '</label>';
echo form_button($attr_button);
echo form_fieldset_close();
echo anchor('../login/forgot ', 'Wachtwoord vergeten?');
echo form_close('</div>');
?>
</section>