<table class="form-table">
  <div class="tbody">
    <!-- Logo do footer -->
    <tr>
      <th scope="row">
        <label for="footer_logo_id">Logo</label>
      </th>
      <td>
        <input class="footer_logo" type="text" name="footer_logo" id="footer_logo_id" size="60" value="<?php echo get_option('footer_logo'); ?>">
        <a href="#" class="footer_logo_upload button button-primary">Upload</a>
        <?php if (!empty('footer_logo')) : ?>
          <h4><label for="footer_logo_min">Visualização</label></h4>
          <img src="<?php echo get_option('footer_logo'); ?>" class="logo-thumb" id="footer_logo_min" alt="Visualização da logo">
        <?php endif; ?>
      </td>
    </tr>
  </div>
</table>