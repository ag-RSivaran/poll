<?php

namespace Drupal\poll;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Provides an interface defining an poll entity.
 */
interface PollInterface extends ContentEntityInterface {


    /**
     * Setting to allow only one anonymous vote per ip address.
     *
     * @var string
     */
    const ANONYMOUS_VOTE_RESTRICT_IP = 'ip';
  
    /**
     * Setting to allow only one anonymous vote per user session.
     *
     * @var string
     */
    const ANONYMOUS_VOTE_RESTRICT_SESSION = 'session';
  
    /**
     * Setting to allow anonymous users to vote multiple times.
     *
     * @var string
     */
    const ANONYMOUS_VOTE_RESTRICT_NONE = 'unlimited';
  





  /**
   * Sets the question for the poll.
   *
   * @param string $question
   *   The short title of the feed.
   *
   * @return \Drupal\poll\PollInterface
   *   The class instance that this method is called on.
   */
  public function setQuestion($question);

  /**
   * Return when the feed was modified last time.
   *
   * @return int
   *   The timestamp of the last time the feed was modified.
   */
  public function getCreated();

  /**
   * Sets the last modification of the feed.
   *
   * @param int $created
   *   The timestamp when the feed was modified.
   *
   * @return \Drupal\poll\PollInterface
   *   The class instance that this method is called on.
   */
  public function setCreated($created);


  /**
   * Returns the runtime of the feed in seconds.
   *
   * @return int
   *   The refresh rate of the feed in seconds.
   */
  public function getRuntime();

  /**
   * Sets the runtime of the feed in seconds.
   *
   * @param int $runtime
   *   The refresh rate of the feed in seconds.
   *
   * @return \Drupal\poll\PollInterface
   *   The class instance that this method is called on.
   */
  public function setRuntime($runtime);


  /**
   * Returns the last time where the feed was checked for new items.
   *
   * @return int
   *   The timestamp when new items were last checked for.
   */
  public function getAnonymousVoteAllow();

  /**
   * Sets the time when this feed was queued for refresh, 0 if not queued.
   *
   * @param int $anonymous_vote_allow
   *   The timestamp of the last refresh.
   *
   * @return \Drupal\poll\PollInterface
   *   The class instance that this method is called on.
   */
  public function setAnonymousVoteAllow($anonymous_vote_allow);

  /**
   * Returns the time when this feed was queued for refresh, 0 if not queued.
   *
   * @return int
   *   The timestamp of the last refresh.
   */
  public function getCancelVoteAllow();

  /**
   * Sets the time when this feed was queued for refresh, 0 if not queued.
   *
   * @param int $cancel_vote_allow
   *   The timestamp of the last refresh.
   *
   * @return \Drupal\poll\PollInterface
   *   The class instance that this method is called on.
   */
  public function setCancelVoteAllow($cancel_vote_allow);


  /**
   * Returns the time when this feed was queued for refresh, 0 if not queued.
   *
   * @return int
   *   The timestamp of the last refresh.
   */
  public function getResultVoteAllow();

  /**
   * Sets the time when this feed was queued for refresh, 0 if not queued.
   *
   * @param int $result_vote_allow
   *   The timestamp of the last refresh.
   *
   * @return \Drupal\poll\PollInterface
   *   The class instance that this method is called on.
   */
  public function setResultVoteAllow($result_vote_allow);

  /**
   * Returns if the poll is open.
   *
   * @return bool
   *   TRUE if the poll is open.
   */
  public function isOpen();

  /**
   * Returns if the poll is closed.
   *
   * @return bool
   *   TRUE if the poll is closed.
   */
  public function isClosed();

  /**
   * Sets the poll to closed.
   */
  public function close();

  /**
   * Sets the poll to open.
   */
  public function open();




    /**
     * Returns the vote restriction that applies for anonymous users.
     *
     * See also the class constants that start with "ANONYMOUS_VOTE_RESTRICT_".
     *
     * @return string
     *   The vote restriction for anonymous users. Possible values:
     *   - ip: only one vote per ip address is allowed;
     *   - session: only one vote per user session is allowed;
     *   - unlimited: no restrictions apply. Anonymous users can place multiple
     *     votes for the same poll.
     *
     * @see ::ANONYMOUS_VOTE_RESTRICT_IP
     * @see ::ANONYMOUS_VOTE_RESTRICT_SESSION
     * @see ::ANONYMOUS_VOTE_RESTRICT_NONE
     */
    public function getVoteRestriction();




  /**
   * @todo: Refactor - doesn't belong here.
   *
   * @return mixed
   */
  public function hasUserVoted();

  /**
   * Get all options for this poll.
   *
   * @return array
   *   Associative array of option keys and values.
   */
  public function getOptions();

  /**
   * Get the values of each vote option for this poll.
   *
   * @return array
   *   Associative array of option values.
   */
  public function getOptionValues();

  /**
   * Get all the votes of this poll.
   *
   * @return array
   */
  public function getVotes();

}
