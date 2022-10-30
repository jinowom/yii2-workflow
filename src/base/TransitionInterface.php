<?php
namespace jinowom\workflow\base;

/**
 * A transition is a link between a start and an end status.
 *
 * If status "A" has a transition to status "B", then it only means that it is possible to go from
 * status "A" to status "B".
 */
interface TransitionInterface
{
	/**
	 * @return string the transition id
	 */
	public function getId();
	/**
	 * Returns the Status instance that is the destination status.
	 *
	 * @return \jinowom\workflow\base\StatusInterface the Status instance this transition ends to
	 */
	public function getEndStatus();
	/**
	 * Returns the Status instance that is the starting point fo the transition.
	 *
	 * @return \jinowom\workflow\base\StatusInterface the Status instance this transition starts from
	 */
	public function getStartStatus();
}
