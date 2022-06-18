<?php

namespace App\Core\Bootstraps;

use App\Core\Adapters\Menu;
use App\Core\Adapters\Theme;

class BootstrapDemo4 {
	// Private Properties
	private static $asideMenu;
	private static $horizontalMenu;

	// Private Methods
	private static function initLayout() {
		Theme::addHtmlAttribute('body', 'id', 'kt_body');

		if ( Theme::getOption('layout', 'main/body/background-image') ) {
			Theme::addHtmlAttribute('body', 'style', 'background-image: url(' . Theme::getOption('layout', 'main/body/background-image') . ')');
		}

		if ( Theme::getOption('layout', 'main/body/class')) {
			Theme::addHtmlClass('body', Theme::getOption('layout', 'main/body/class') );
		}

		if ( Theme::getOption('layout', 'main/body/attributes')) {
			Theme::addHtmlAttributes('body', Theme::getOption('layout', 'main/body/attributes') );
		}

        if ( Theme::getOption('layout', 'loader/display') === true ) {
			Theme::addHtmlClass('body', 'page-loading-enabled');
			Theme::addHtmlClass('body', 'page-loading');
		}

		if (Theme::getOption("layout", "main/type") === "default") {
			Theme::addPageJs('js/custom/widgets.js');
			Theme::addPageJs('js/custom/modals/create-app.js');
			Theme::addPageJs('js/custom/apps/chat/chat.js');

			if (Theme::getViewMode() !== 'release') {
				Theme::addPageJs('js/custom/intro.js');
			}
		}
	}

	private static function initHeader() {
        if (Theme::getOption('layout', 'header/width') == 'fluid') {
            Theme::addHtmlClass('header-container', 'container-fluid');
        } else {
            Theme::addHtmlClass('header-container', 'container');
        }

		if (Theme::getOption('layout', 'header/fixed/desktop') === true) {
			Theme::addHtmlClass('body', 'header-fixed');
		}

        if (Theme::getOption('layout', 'header/fixed/tablet-and-mobile') === true) {
			Theme::addHtmlClass('body', 'header-tablet-and-mobile-fixed');
		}
	}

	private static function initContent() {
		if (Theme::getOption('layout', 'content/width') == 'fluid') {
            Theme::addHtmlClass('content-container', 'container-fluid');
        } else {
            Theme::addHtmlClass('content-container', 'container');
        }
	}

	private static function initAside() {
		// Fixed aside
		if (Theme::getOption('layout', 'aside/fixed')) {
			Theme::addHtmlClass('body', 'aside-fixed');
		}

		// Default minimized
		if (Theme::getOption('layout', 'aside/minimized')) {
			Theme::addHtmlAttribute('body', 'data-kt-aside-minimize', 'on');
			Theme::addHtmlClass('asideToggle', 'active');
		}

		// Aside Secondary
		if (Theme::getOption('layout', 'aside/secondary-display') === true) {
			Theme::addHtmlClass('body', 'aside-secondary-enabled');
		} else {
			Theme::addHtmlClass('body', 'aside-secondary-disabled');
		}
	}

	private static function initAsideMenu() {
		self::$asideMenu = new Menu( Theme::getOption('menu', 'compact'), Theme::getPagePath() );
		self::$asideMenu->setIconType(Theme::getOption('layout', 'aside/menu-icon', 'svg'));
	}

	private static function initHorizontalMenu() {
		self::$horizontalMenu = new Menu( Theme::getOption('menu', 'horizontal'), Theme::getPagePath() );
		self::$horizontalMenu->setItemLinkClass('py-3');
		self::$horizontalMenu->setIconType(Theme::getOption('layout', 'header/menu-icon', 'svg'));
	}

	private static function initFooter() {
		if (Theme::getOption('layout', 'footer/width') == 'fluid') {
			Theme::addHtmlClass('footer-container', 'container-fluid');
		} else {
			Theme::addHtmlClass('footer-container', 'container');
		}
	}

	// Public Methods
	public static function run() {
		if ( Theme::getOption('layout', 'base') === 'docs') {
			return;
		}

		// Init layout
		self::initLayout();

		// Init Partials
		if ( Theme::getOption('layout', 'main/type') === 'default') {
			self::initHeader();
			self::initContent();
			self::initAside();
			self::initFooter();
			self::initAsideMenu();
			self::initHorizontalMenu();
		}
	}

	public static function getAsideMenu() {
		return self::$asideMenu;
	}

	public static function getHorizontalMenu() {
		return self::$horizontalMenu;
	}

	public static function getBreadcrumb() {
		$options = array(
			'skip-active' => false
		);

		return self::getHorizontalMenu()->getBreadcrumb($options);
	}
}
