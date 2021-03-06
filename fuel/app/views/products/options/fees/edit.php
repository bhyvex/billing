<?php
$layout->title = 'Edit Fee';
$layout->subtitle = $fee->name;
$layout->breadcrumbs['Product Lines'] = 'products';
$layout->breadcrumbs[$product->name] = $product->link('options');
$layout->breadcrumbs[$option->name] = $option->link('fees');
$layout->breadcrumbs['Edit Fee: ' . $fee->name] = '';

echo render('products/options/fees/form', array(
	'option' => $option,
	'fee'    => $fee,
	'errors' => !empty($errors) ? $errors : array(),
));
?>
