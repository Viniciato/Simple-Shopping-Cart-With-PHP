<form role="form" action="receive.php" method="POST" novalidate>
  <div class="form-group <?= ($contact->getErrors('name')) ? "has-feedback has-error" : "" ?> ">
    <label class="control-label" for="name">Nome</label>
    <input type="name" name="contact[name]" value="<?= @$contact->getName() ?>"
           class="form-control" id="name" placeholder="Digite seu nome">
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    <span class="help-block"><?= @$contact->getErrors('name') ?></span>
  </div>

  <div class="form-group <?= ($contact->getErrors('email')) ? "has-feedback has-error" : "" ?> ">
    <label class="control-label" for="email">Email</label>
    <input type="email" name="contact[email]" value="<?= @$contact->getEmail() ?>"
           class="form-control" id="email" placeholder="Digite seu email">
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    <span class="help-block"><?= @$contact->getErrors('email') ?></span>
  </div>

  <div class="form-group <?= ($contact->getErrors('message')) ? "has-feedback has-error" : "" ?> ">
    <label class="control-label" for="message">Mensagem:</label>
    <textarea class="form-control" rows="3" name="contact[message]" id="message"><?= @$contact->getMessage() ?></textarea>
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    <span class="help-block"><?= @$contact->getErrors('message') ?></span>
  </div>
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
