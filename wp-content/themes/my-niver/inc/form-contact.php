<?php
// FORM CONTACT
function form_contact () {
  $errors = [];
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $message = trim($_POST['message']);

  // Email
  if (empty($email)) {
    $errors[] = 'Por favor digite um e-mail.';
  } else if (!is_email($email)) {
    $errors[] = 'O e-mail digitado não é válido.';
  }

  // Template de envio
  if (!count($errors) > 0) {
    $emailTo = 'contato@myniver.net';
    $body = "E-mail de contato do site:\n\n";
    if ($name) {
      $body .= "Nome: $name\n";
    }
    if ($email) {
      $body .= "E-mail: $email\n";
    }
    if ($message) {
      $body .= "\nMensagem: $message";
    }

    $assunto = 'Contato - Site My Niver';
    $headers = "From: $email" . "\r\n";

    $result = wp_mail($emailTo, $assunto, $body, $headers);

    if ($result) {
      die(json_encode([
        'success' => true,
        'message' => 'Mensagem enviada com sucesso!'
      ]));
    }

    die(json_encode([
      'success' => false,
      'message' => 'Erro ao enviar mensagem!'
    ]));
  }

  die(json_encode([
    'success' => false,
    'message' => $errors[0]
  ]));
}

// Custom ajax calls
add_action( 'wp_ajax_nopriv_form_contact', 'form_contact' );
add_action( 'wp_ajax_form_contact', 'form_contact' );