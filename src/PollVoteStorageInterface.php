<?php

namespace Drupal\poll;

use Drupal\Core\Session\AccountInterface;

/**
 * Defines a common interface for poll vote controller classes.
 */
interface PollVoteStorageInterface {

  /**
   * Delete a user's votes for a poll choice.
   *
   * @param array $choices
   *   A list of choice ID's for each one we will remove all the votes.
   */
  public function deleteChoicesVotes(array $choices);

  /**
   * Delete a user's votes for a poll.
   *
   * @param PollInterface $poll
   *
   * @return mixed
   */
  public function deleteVotes(PollInterface $poll);

  /**
   * Cancel a user's vote.
   *
   * @param PollInterface $poll
   * @param AccountInterface $account
   */
  public function cancelVote(PollInterface $poll, AccountInterface $account = NULL);

  /**
   * Save a user's vote.
   *
   * @param array $options
   *   The values of the vote.
   *
   * @return int
   *   The ID of the saved vote.
   */
  public function saveVote(array $options);

  /**
   * Get all votes for a poll.
   *
   * @param PollInterface $poll
   *
   * @return mixed
   */
  public function getVotes(PollInterface $poll);

  /**
   * Get a user's votes for a poll.
   *
   * @param PollInterface $poll
   *
   * @return array|false
   *   An array of the user's vote values, or false if the current user hasn't
   *   voted yet.
   */
  public function getUserVote(PollInterface $poll);

  /**
   * Get total votes for a poll.
   *
   * @param PollInterface $poll
   *
   * @return mixed
   */
  public function getTotalVotes(PollInterface $poll);

}
