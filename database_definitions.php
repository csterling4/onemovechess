<?php

    /**
	 * 3bits xpos
3bits ypos
3bits piece type
pawn,enpassant pawn, rook,knight,bishop,queen,king,NONE
1bit been moved
1bit color (0 is attacking color 1 is defending color)

11bits * 16 pieces
164 bits

22bytes per board configuration

DROP TABLE IF EXISTS `onemovechess`.`boardlayouts`;
CREATE TABLE  `onemovechess`.`boardlayouts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'the unique identifier for this configuration',
  `board` binary(22) NOT NULL COMMENT 'the board configuration in compressed binary form',
  PRIMARY KEY (`id`,`board`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
the board layout table stores a unique id for every board configuration in the game of chess

	 * 
	 * 
	 * DROP TABLE IF EXISTS `onemovechess`.`games`;
CREATE TABLE  `onemovechess`.`games` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'the games unique id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED COMMENT='each game has a unique id';
	 * Does anything else need to be stored that is specific to each game???
	 *
	 * 
	 * 
	 * DROP TABLE IF EXISTS `onemovechess`.`moves`;
CREATE TABLE  `onemovechess`.`moves` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'unique id for the moe',
  `move` varchar(45) NOT NULL COMMENT 'PGN game moes',
  `boardid` int(10) unsigned NOT NULL COMMENT 'id for the board configuration',
  `gameid` int(10) unsigned NOT NULL COMMENT 'which game was this move part of',
  `time` float NOT NULL COMMENT 'how many seconds did it take the user to make this move',
  `movestillmate` int(10) unsigned NOT NULL COMMENT 'after the game is finished compute how many moves this was until CM',
  `playerid` int(10) unsigned NOT NULL COMMENT 'which player made the move',
  `boardreversed` int(1) unsigned NOT NULL COMMENT 'is the board reversed after this move',
  `whitemove` int(1) unsigned NOT NULL COMMENT 'is it currently whites move',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;
	 * the
	 * 
	 * 
	 * DROP TABLE IF EXISTS `onemovechess`.`players`;
CREATE TABLE  `onemovechess`.`players` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'unique id for the player',
  `email` varchar(45) NOT NULL COMMENT 'users email address',
  `passphrase` binary(160) NOT NULL COMMENT 'password hash',
  `handle` varchar(45) NOT NULL COMMENT 'nickname other player will know this person by',
  `points` int(10) unsigned NOT NULL COMMENT 'total score for this user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED COMMENT='players with their passphrase';   
	 */
	