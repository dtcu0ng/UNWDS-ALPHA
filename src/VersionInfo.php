<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine;

use pocketmine\utils\Git;
use pocketmine\utils\VersionString;
use function str_repeat;

final class VersionInfo{
	// Trying to deploy SpoonMask v3 to PM4
	     // PocketMine-MP's default version constants, this will bypass the Spoon detector
		 public const NAME = "PocketMine-MP";
		 public const BASE_VERSION = "4.0.0";
		 public const IS_DEVELOPMENT_BUILD = true;

		// The UNWDS version strings (SpoonMask v3)
		 public const DISTRO_NAME = "UNWDS";
		 public const CODENAME = "NEra";
		 public const UNWDS_VERSION = "3.0.0";
		 public const BUILD_NUMBER = 0104;

	private function __construct(){
		//NOOP
	}

	/** @var VersionString|null */
	private static $fullVersion = null;

	public static function getVersionObj() : VersionString{
		if(self::$fullVersion === null){
			self::$fullVersion = new VersionString(self::BASE_VERSION, self::IS_DEVELOPMENT_BUILD, self::BUILD_NUMBER);
		}
		return self::$fullVersion;
	}
}
