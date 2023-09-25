<?php

namespace OCA\stopwatchwidget\AppInfo;
use OCA\stopwatchwidget\Dashboard\VueWidget;
use OCA\stopwatchwidget\Dashboard\SimpleWidget;
use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IRegistrationContext;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;

class Application extends App implements IBootstrap {
	public const APP_ID = 'stopwatchwidget';

	public function __construct(array $urlParams = []) {
		parent::__construct(self::APP_ID, $urlParams);
	}

	public function register(IRegistrationContext $context): void {
		$context->registerDashboardWidget(SimpleWidget::class);
		$context->registerDashboardWidget(VueWidget::class);
	}

	public function boot(IBootContext $context): void {
	}
}
