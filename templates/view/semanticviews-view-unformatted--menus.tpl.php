<?php
/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="<?php print drupal_html_class($title); ?>" class="container <?php print drupal_html_class($title); ?>" data-menu-category="<?php print drupal_html_class($title); ?>">
  <a name="<?php print drupal_html_class($title); ?>" id="<?php print drupal_html_class($title); ?>"></a>
  <div class="row">
    <?php if (!empty($title)): ?>
      <<?php print $group_element; ?><?php print drupal_attributes($group_attributes); ?>>
        <?php print $title; ?>
      </<?php print $group_element; ?>>
    <?php endif; ?>
    <?php if (!empty($list_element)): ?>
      <<?php print $list_element; ?><?php print drupal_attributes($list_attributes); ?>>
    <?php endif; ?>
    <?php foreach ($rows as $id => $row): ?>
      <?php if (!empty($row_element)): ?>
        <<?php print $row_element; ?><?php print drupal_attributes($row_attributes[$id]); ?>>
      <?php endif; ?>
      <?php print $row; ?>
      <?php if (!empty($row_element)): ?>
      </<?php print $row_element; ?>>
      <?php endif; ?>
    <?php endforeach; ?>
    <?php if (!empty($list_element)): ?>
      </<?php print $list_element; ?>>
    <?php endif; ?>
  </div>
</div>