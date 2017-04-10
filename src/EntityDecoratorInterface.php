<?php

namespace Drupal\auto_entitylabel;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Provides an interface for EntityDecorator.
 */
interface EntityDecoratorInterface {

  /**
   * Automatic entity label entity decorator.
   *
   * @param \Drupal\Core\Entity\ContentEntityInterface $entity
   *
   * @return \Drupal\auto_entitylabel\AutoEntityLabelManager|\Drupal\Core\Entity\ContentEntityInterface
   */
  public function decorate(ContentEntityInterface $entity);
}
