<?
    require('global_db.php');
    
    $conf = array();
    $conf['main_name'] = '"We Should Try It"';
    $conf['main_url'] = 'http://192.168.1.90/weshouldtryit/';
    
    $conf['email_from'] = 'no-replay@weshouldtryit.com';
    $conf['email_from_name'] = $conf['main_name'].' notification';
    
    $conf['lang_id'] = 1;  //language id for new questions
    
    $conf['email_contact'] = 'code@weshouldtryit.com';  //all contact requests goes to this email
    
    
?>
