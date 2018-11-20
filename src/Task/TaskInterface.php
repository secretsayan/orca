<?php

namespace Acquia\Orca\Task;

/**
 * Provides an interface for defining a task.
 */
interface TaskInterface {

  /**
   * Executes the test.
   *
   * @throws \Acquia\Orca\Task\TaskFailureException
   */
  public function execute(): void;

  /**
   * Sets the path.
   *
   * @param string $path
   *   A filesystem path.
   *
   * @return self
   */
  public function setPath(string $path): TaskInterface;

  /**
   * Returns a status message describing the task being performed.
   *
   * E.g., "Performing task".
   *
   * @return string
   */
  public function statusMessage(): string;

}