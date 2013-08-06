<?php include('settings_header.php'); ?>

 


   <div class="custom-field-col-left">

  <div class="mw-custom-field-group ">
  <label class="mw-ui-label" for="input_field_label<?php print $rand; ?>">
    <?php _e('Define Title'); ?>
  </label>

    <input type="text"  class="mw-ui-field" value="<?php print ($data['custom_field_name']) ?>" name="custom_field_name" id="input_field_label<?php print $rand; ?>">

  <div class="vSpace"></div>
    <label class="mw-ui-check left" style="margin-right: 7px;">
    <input type="checkbox"
        data-option-group="custom_fields"
        name="options[]"
        value="multiple"
        <?php if(isset($data['options']) == true and isset($data['options']["multiple"]) == true and $data['options']["multiple"] == '1'): ?> checked="checked" <?php endif; ?>
    />

    <span></span>
    <span><?php _e("Allow Multiple Choices"); ?></span>
  </label>

</div>
</div>



   <div class="custom-field-col-right">

      <label class="mw-ui-label">Values</label>
      <div class="mw-custom-field-group" style="padding-top: 0;" id="fields<?php print $rand; ?>">
        <?php if(is_array($data['custom_field_values'])) : ?>
        <?php foreach($data['custom_field_values'] as $v): ?>
        <div class="mw-custom-field-form-controls">
          <input type="text" class="mw-ui-field" name="custom_field_value[]"  value="<?php print $v; ?>">
          <?php print $add_remove_controls; ?> </div>
        <?php endforeach; ?>
        <?php else: ?>
        <div class="mw-custom-field-form-controls">
          <input type="text" name="custom_field_value[]" class="mw-ui-field"  value="" />
          <?php print $add_remove_controls; ?> </div>
        <?php endif; ?>
        <script type="text/javascript">
            mw.custom_fields.sort("fields<?php print $rand; ?>");
        </script>
      </div>
  <?php print $savebtn; ?>
  </div>
  <?php include('settings_footer.php'); ?>
