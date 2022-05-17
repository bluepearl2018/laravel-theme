<?php

namespace Eutranet\Theme;

use Eutranet\Init\PackageServiceProvider;
use Eutranet\Init\Package;
use Eutranet\Theme\Console\Commands\InstallEutranetThemeCommand;
use Eutranet\Theme\View\Components\AuthRegister;
use Eutranet\Theme\View\Components\Logo;
use Eutranet\Theme\View\Components\AuthLogin;
use Eutranet\Theme\View\Components\AuthCard;
use Eutranet\Theme\View\Components\AuthSessionStatus;
use Eutranet\Theme\View\Components\AuthValidationErrors;
use Eutranet\Theme\View\Components\FormLabel;
use Eutranet\Theme\View\Components\FormInput;
use Eutranet\Theme\View\Components\Button;
use Eutranet\Theme\View\Components\AuthButton;
use Eutranet\Theme\View\Components\NavLink;
use Eutranet\Theme\View\Components\NavLinkResponsive;
use Eutranet\Theme\View\Components\DropdownLink;
use Eutranet\Theme\View\Components\Dropdown;
use Eutranet\Theme\View\Components\AuthResetPassword;
use Eutranet\Theme\View\Components\AuthPasswordConfirm;
use Eutranet\Theme\View\Components\AuthForgotPassword;
use Eutranet\Theme\View\Components\AuthVerifyEmail;
use Eutranet\Theme\View\Components\FooterAddress;
use Eutranet\Theme\View\Components\FormValidationErrors;
use Eutranet\Theme\View\Components\H2;
use Eutranet\Theme\View\Components\H1;
use Eutranet\Theme\View\Components\SearchBar;
use Eutranet\Theme\View\Components\FlashMessage;
use Eutranet\Theme\View\Components\FlashModal;
use Eutranet\Theme\View\Components\FormInputText;
use Eutranet\Theme\View\Components\FormSaveButtons;
use Eutranet\Theme\View\Components\FormUpdateButtons;
use Eutranet\Theme\View\Components\FormSaveButton;
use Eutranet\Theme\View\Components\FormUpdateButton;
use Eutranet\Theme\View\Components\FormCancelButton;
use Eutranet\Theme\View\Components\FormInputTextarea;
use Eutranet\Theme\Providers\ThemeMenuServiceProvider;
use Eutranet\Theme\View\Components\FormInputEmail;
use Eutranet\Theme\View\Components\FormInputPhone;
use Eutranet\Theme\View\Components\FormCheckboxOption;
use Eutranet\Theme\View\Components\FormInputPttaxid;
use Eutranet\Theme\View\Components\FormSelectList;
use Eutranet\Theme\View\Components\FormDatesDate;
use Eutranet\Theme\View\Components\FormInputFile;
use Eutranet\Theme\View\Components\FormInputHidden;
use Eutranet\Theme\View\Components\FormInputNumber;
use Eutranet\Theme\View\Components\FooterLogo;
use Eutranet\Theme\View\Components\FormDatesTime;
use Eutranet\Theme\View\Components\SeoMeta;
use Eutranet\Theme\View\Components\Map;
use Eutranet\Theme\View\Components\FormAutoShowFields;
use Eutranet\Theme\View\Components\FormAutoEditFields;
use Eutranet\Theme\View\Components\FormAutoCreateFields;

class ThemeServiceProvider extends PackageServiceProvider
{
	public function configurePackage(Package $package): void
	{
		$package
			->name('laravel-theme')
			->hasConfigFile(['eutranet-theme']) // php artisan vendor:publish --tag=your-laravel-init-name-config
			->hasViews('theme')
			->hasTranslations()
			->hasAssets()
			->hasCommand(InstallEutranetThemeCommand::class)
			->hasMigrations('create_eutranet_theme_tables')
			->hasRoutes(['setup', 'config','web', 'test']);
	}

	public function register()
	{
		parent::register();
		$this->app->register(ThemeMenuServiceProvider::class);
	}

	public function boot()
	{
		parent::boot();
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'theme');

		$this->loadViewComponentsAs('theme', [
			/**
			 * ------------------------------------------------------
			 * AUTH COMPONENTS
			 * ------------------------------------------------------
			 */
			AuthButton::class,
			AuthCard::class,
			AuthForgotPassword::class,
			AuthLogin::class,
			AuthPasswordConfirm::class,
			AuthRegister::class,
			AuthResetPassword::class,
			AuthSessionStatus::class,
			AuthValidationErrors::class,
			AuthVerifyEmail::class,

			/** ------------------------------ */
			Button::class,
			Dropdown::class,
			DropdownLink::class,
			FlashMessage::class,
			FlashModal::class,
			FooterAddress::class,
			FooterLogo::class,

			/**
			 * ------------------------------------------------------
			 * FORMS COMPONENTS
			 * ------------------------------------------------------
			 */
			FormAutoCreateFields::class,
			FormAutoEditFields::class,
			FormAutoShowFields::class,
			FormCancelButton::class,
			FormCheckboxOption::class,
			FormDatesDate::class,
			FormDatesTime::class,
			FormInput::class,
			FormInputEmail::class,
			FormInputFile::class,
			FormInputHidden::class,
			FormInputNumber::class,
			FormInputPhone::class,
			FormInputPttaxid::class,
			FormSelectList::class,
			FormInputText::class,
			FormInputTextarea::class,
			FormLabel::class,
			FormSaveButton::class,
			FormSaveButtons::class,
			FormUpdateButton::class,
			FormUpdateButtons::class,
			FormValidationErrors::class,

			/** ------------------------------ */
			H1::class,
			H2::class,
			Logo::class,

			/**
			 * ------------------------------------------------------
			 * MAPS
			 * ------------------------------------------------------
			 */
			Map::class,

			/**
			 * ------------------------------------------------------
			 * NAVIGATION COMPONENTS
			 * ------------------------------------------------------
			 */
			NavLink::class,
			NavLinkResponsive::class,

			/**
			 * ------------------------------------------------------
			 * SEARCH COMPONENTS
			 * ------------------------------------------------------
			 */
			SearchBar::class,

			/**
			 * ------------------------------------------------------
			 * SEO
			 * ------------------------------------------------------
			 */
			SeoMeta::class,
		]);
	}
}