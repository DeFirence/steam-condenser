<?php
/**
 * @author Sebastian Staudt
 * @package Steam Interface Package (PHP)
 * @subpackage SteamPlayer
 * @version $Id: SteamPlayer.php 21 2008-02-29 10:39:13Z koraktor $
 */

/**
 * @package Steam Interface Package (PHP)
 * @subpackage SteamPlayer
 */
class SteamPlayer
{
	/**
	 * @var float
	 */
	private $playerConnectTime;
	
	/**
	 * @var int
	 */
	private $playerId;
	
	/**
	 * @var String
	 */
	private $playerName;
	
	/**
	 * @var int
	 */
	private $playerPoints;
	
	/**
	 * @param int $playerId
	 * @param String $playerName
	 * @param int $playerPoints
	 * @param float $playerConnectTime 
	 */
	public function __construct($playerId, $playerName, $playerPoints, $playerConnectTime)
	{
		if(!is_int($playerId) || $playerId < 0)
		{
			throw new Exception("Player ID has to be a number greater than or equal 0.");
		}
		
		if(!is_string($playerName))
		{
			throw new Exception("Player name has to be a string.");
		}
		
		if(!is_int($playerPoints) || $playerPoints < 0)
		{
			throw new Exception("Player points have to be a number greater than or equal 0.");
		}
		
		if(!is_float($playerConnectTime) || $playerConnectTime < 0)
		{
			throw new Exception("Player connection time has to be a number greater than or equal 0.");
		}
		
		$this->playerConnectTime = $playerConnectTime;
		$this->playerId = $playerId;
		$this->playerName = $playerName;
		$this->playerPoints = $playerPoints;
	}
}
?>