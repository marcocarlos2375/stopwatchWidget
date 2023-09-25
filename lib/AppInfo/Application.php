<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: carlos <idrisscarlosid1@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\StopwatchWidget\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'stopwatchwidget';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
