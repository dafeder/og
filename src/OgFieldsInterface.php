<?php
/**
 * Contains
 */

namespace Drupal\og;

use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldInstanceConfig;

interface OgFieldsInterface {

  /**
   * @return FieldStorageConfig
   *   Return a new object of a FieldStorageConfig instance.
   */
  public function fieldDefinition();

  /**
   * @return FieldInstanceConfig
   *   Return a new object of a FieldInstanceConfig instance.
   */
  public function instanceDefinition();

  /**
   * @return array
   *   A widget definition for the field.
   */
  public function widgetDefinition();

  /**
   * @return
   *   Return view modes entities for the field.
   */
  public function viewModesDefinition();
}
