<?php

  $con = mysqli_connect('localhost', 'root', 'root');

  if (!$con) {
    echo 'Not connected to server';
  }

  if (!mysqli_select_db($con, 'pizza')) {
    echo 'Database not selected';
  }

  parse_str($_POST['userdata'], $userdata);

  $name = $userdata['user_name'];
  $phone = $userdata['user_phone'];
  $adress = $userdata['user_address'];

  $sql = "INSERT INTO contacts (name, phone, adress) VALUES ('$name', '$phone', '$adress')";

  if (!mysqli_query($con, $sql)) {
    echo 'Not inserted';
  } else {
    echo 'Inserted';
  }

parse_str($_POST['orderlist'], $orderlist);
$subject = 'Order from '.date('d.m.Y').'г.';
$admin_mail = 'kitchen@yandex.ru';

$tbl = '<table style="width: 100%; border-collapse: collapse;">
	<tr>
		<th style="width: 1%; border: 1px solid #333333; padding: 5px;">ID</th>
		<th style="width: 1%; border: 1px solid #333333; padding: 5px;"></th>
		<th style="border: 1px solid #333333; padding: 5px;">Nomination</th>
		<th style="border: 1px solid #333333; padding: 5px;">Price</th>
		<th style="border: 1px solid #333333; padding: 5px;">Count</th>
	</tr>';
$total_sum = 0;
foreach($orderlist as $id => $item_data) {
	$total_sum += (float)$item_data['count'] * (float)$item_data['price'];
	$tbl .= '
	<tr>
		<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['id'].'</td>
		<td style="border: 1px solid #333333;"><img src="'.$item_data['img'].'" alt="" style="max-width: 64px; max-height: 64px;"></td>
		<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['title'].'</td>
		<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['price'].'</td>
		<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['count'].'</td>
	</tr>';
}
$tbl .= '<tr>
		<td  style="border: 1px solid #333333; padding: 5px;" colspan="3">Total:</td>
		<td style="border: 1px solid #333333; padding: 5px;"><b>'.$total_sum.'</b></td>
		<td style="border: 1px solid #333333;">&nbsp;</td>
	</tr>
</table>';

$body = '
<html>
<head>
  <title>'.$subject.'</title>
</head>
<body>
  <p>Customer Information:</p>
	<ul>
		<li><b>Name:</b> '.$userdata['user_name'].'</li>
		<li><b>Phone:</b> '.$userdata['user_phone'].'</li>
		<li><b>Adress:</b> '.$userdata['user_address'].'</li>
	</ul>
	<p>Information about order:</p>
  '.$tbl.'
</body>
</html>';

$headers   = []; 
$headers[] = 'MIME-Version: 1.0'; 
$headers[] = 'Content-type: text/html; charset=utf-8'; 
$headers[] = 'From: Pizza Town'; 
$headers[] = 'Bcc: Admin <'.$admin_mail.'>'; 
$headers[] = 'X-Mailer: PHP/'.phpversion();

$send_ok = mail($to, $subject, $body, implode("\r\n", $headers));

$response = [
	'errors' => !$send_ok,
	'message' => $send_ok ? 'Order accepted!' : 'Some problem...'
];

exit( json_encode($response) );

?>