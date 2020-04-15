<table class="form-table">
  <div class="tbody">
    <!-- Números e email de contato -->
    <tr>
      <th scope="row">
        <label for="tel_footer_id">Contato</label>
      </th>
      <td>
        <h4>Telefone</h4>
        <input type="text" class="regular-text tel_footer" name="tel_footer" id="tel_footer_id" value="<?php echo get_option('tel_footer'); ?>">
        <h4>Email</h4>
        <input type="email" class="regular-text" name="email_footer" id="email_footer_id" value="<?php echo get_option('email_footer'); ?>">
      </td>
    </tr>
    <!-- Endereço -->
    <tr>
      <th scope="row">
        <label for="tel_footer_id">Endereço</label>
      </th>
      <td>
        <input type="text" name="endereco_footer" id="endereco_footer_id" class="regular-text" value="<?php echo get_option('endereco_footer'); ?>">
      </td>
    </tr>
    <!-- Rodapé -->
    <tr>
      <th scope="row">
        <label for="text_footer_id">Horário de funcionamento</label>
      </th>
      <td>
        <h4>Horário 01</h4>
        <input type="text" class="regular-text" name="horario_footer_1" id="tel_footer_id" value="<?php echo get_option('horario_footer_1'); ?>">
        <h4>Horário 02</h4>
        <input type="text" class="regular-text" name="horario_footer_2" value="<?php echo get_option('horario_footer_2'); ?>">
      </td>
    </tr>
    <!-- -->
  </div>
</table>