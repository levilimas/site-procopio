<table class="form-table">
  <div class="tbody">
    <!-- Formulário -->
    <tr>
      <th scope="row">
        <label for="contact_form_id">Formulário</label>
        <p class="description">Use aspas simples ('') ao invés de aspas duplas ().</p>
      </th>
      <td>
        <input type="text" name="contact_form" id="contact_form_id" class="regular-text" value="<?php echo get_option('contact_form'); ?>">
      </td>
    </tr>
    <!-- Endereço -->
    <tr>
      <th scope="row">
        <label for="contact_address_id">Endereço</label>
      </th>
      <td>
        <input type="text" name="contact_address" id="contact_address_id" class="regular-text" value="<?php echo get_option('contact_address'); ?>">
      </td>
    </tr>
    <!-- E-mail e telefone -->
    <tr>
      <th scope="row">
        <label for="contact_email_id">Formas de contato</label>
      </th>
      <td>
        <h4>E-mail</h4>
        <input type="email" name="contact_email" id="contact_email_id" class="regular-text" value="<?php echo get_option('contact_email'); ?>">
        <h4>Telefone</h4>
        <input type="text" name="contact_phone" id="contact_phone_id" class="regular-text contact_phone" value="<?php echo get_option('contact_phone'); ?>">
      </td>
    </tr>
    <!-- Rodapé -->
    <tr>
      <th scope="row">
        <label for="contact_opening_hour_week_id">Horário de funcionamento</label>
      </th>
      <td>
        <h4>Segunda à Sexta</h4>
        <input type="text" class="regular-text contact_opening_hour_week" name="contact_opening_hour_week" id="contact_opening_hour_week_id" value="<?php echo get_option('contact_opening_hour_week'); ?>">
        <h4>Sábado</h4>
        <input type="text" class="regular-text contact_opening_hour_weekend" name="contact_opening_hour_weekend" value="<?php echo get_option('contact_opening_hour_weekend'); ?>">
      </td>
    </tr>
    <!-- -->
  </div>
</table>