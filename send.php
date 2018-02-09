<?php
$name = trim(strip_tags($_POST['name']));
$phone =  trim(strip_tags($_POST['phone']));
if((isset($name)&&$_POST['name']!='')&&(isset($phone)&&$_POST['phone']!='')){
    $to = 'info@okmi-exclusive.com.ua';
    $subject = 'Заявка на тур!';
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$name.'</p>
                        <p>Телефон: '.$phone.'</p>                            
                    </body>
                </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <okmi-exclusive@gmail.com>\r\n";
    $response = [];
    if(mail($to, $subject, $message, $headers)){
        $response = ['success'=> true,'message'=>'Спасибо за заявку! Мы свяжемся с Вами в ближайшее время !'];
    } else {
        $response = ['success'=> false,'message'=>'Что-то пошло не так! Попробуйте отправить сообщение позже !'];
    }
    $response['success'] ? header('HTTP/1.1 200 OK') : header('HTTP/1.1 500 Internal Server Error') ;
    header('Content-Type: application/json');
    echo json_encode($response);
}
