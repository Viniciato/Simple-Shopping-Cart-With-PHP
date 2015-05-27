<?php 
	$page_title = 'Fale conosco';
	require '_header.php'; 

	$contact = isset($contact) ? $contact : new Contact();
?>

<div class="page-header">
	<h2>Formulário de Contato</h2>
</div>

<?php require '_form.php' ?>

<?php require '_footer.php' ?>
