<table class="form-table">
  <tbody>
    <!-- Logos -->
    <tr>
      <th scope="row">
        <label for="header_logo_id">Logo</label>
      </th>
      <td>
        <!-- Desktop -->
        <h4><label for="header_logo_id">Desktop</label></h4>
        <input type="text" class="header_logo" name="header_logo" id="header_logo_id" size="60" value="<?php echo get_option('header_logo'); ?>">
        <a href="#" class="header_logo_upload button button-primary">Upload</a>
        <?php if (!empty(get_option('header_logo'))) : ?>
          <h4>Visualização</h4>
          <img src="<?php echo get_option('header_logo'); ?>" class="logo-thumb" alt="Visualização da logo">
        <?php endif; ?>
        
      </td>
    </tr>
  </tbody>
</table>