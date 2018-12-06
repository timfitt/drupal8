<?php

/**
 * @mainpage UIkit
 *
 * Welcome to the UIkit developer's documentation. Newcomers to Drupal 8 theme
 * development should review the
 * @link https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Render%21theme.api.php/group/themeable/8.2.x Default theme implementations @endlink
 * API reference and
 * @link https://www.drupal.org/theming Theming and Front End Development with Drupal @endlink
 * before reading the heavily-documented UIkit topics below.
 *
 * @section about_uikit About UIkit
 * UIkit is a lightweight and modular front-end framework for developing fast
 * and powerful web interfaces. This API site contains documentation for the
 * UIkit Drupal 8 theme. To view the official UIkit framework documentation,
 * please see @link https://getuikit.com/v2/index.html getuikit.com @endlink.
 *
 * UIkit gives you a comprehensive collection of HTML, CSS, and JS components
 * with configurable options built-in. This collection of small, responsive
 * components using consistent and conflict-free nameing conventions gives you
 * fine-grain control over the look and feel without conflicting with other
 * frameworks.
 *
 * With a mobile-first approach UIkit provides a consistent experience from
 * phones and tablets to desktops, without the need to worry about device sizes
 * and breakpoints.
 *
 * You can try out a demonstration of any release of UIkit by visiting
 * @link https://simplytest.me/project/uikit/8.x-2.12 simplytest.me @endlink.
 *
 * @section uikit_api UIkit API Topics
 * Here are some topics to help you get started developing with UIkit 8:
 * - @link getting_started Getting started with UIkit @endlink
 * - @link sub_theme Creating a UIkit sub-theme @endlink
 * - @link theme_settings UIkit theme settings @endlink
 * - @link uikit_themeable UIkit theme implementations @endlink
 * - @link /project-maintainers Project maintainers @endlink
 */

/**
 * @defgroup getting_started Getting started with UIkit
 * @{
 * @section get_familiar Get familiar with the basic setup and structure of UIkit 8.
 * UIkit 8 does not come with the required UIkit framework files because, in
 * general,
 * @link https://www.drupal.org/node/422996 3rd party libraries and content are forbidden @endlink
 * from being committed to a reporsitory for projects hosted on
 * @link drupal.org drupal.org @endlink. We instead use
 * @link https://cdnjs.com cdnjs.com @endlink to retrieve the
 * @link https://cdnjs.com/libraries/uikit UIkit library @endlink.
 *
 * This also makes the footprint of our repository smaller. Simply follow the
 * instructions below to get started with using UIkit 8.
 *
 * @section download_uikit Download UIkit
 * First of all you need to download UIkit 8. There are three ways to do this:
 * - direct download from drupal.org project page
 * - downloading via Drush
 * - cloning repository from git.drupal.org
 *
 * Please read the
 * @link https://www.drupal.org/docs/8/extending-drupal-8/installing-themes Installing themes @endlink
 * article before installing UIkit 8. We only provide the download methods
 * below, not how to install themes.
 *
 * NOTE: Recommended for theme developers only. Since UIkit 8 is still in
 * development, none of the following ways to download UIkit 8 are recommended
 * for use on production sites. UIkit 8 is still considered unstable.
 *
 * @subsection via-drupal-org via drupal.org (recommended for site administrators)
 * You can either visit
 * @link https://drupal.org/project/uikit drupal.org @endlink or use one of the
 * links below to download the project directly from drupal.org.
 *
 * @link https://ftp.drupal.org/files/projects/uikit-8.x-2.12.tar.gz UIkit 8.x-2.12.tar.gz @endlink
 * @link https://ftp.drupal.org/files/projects/uikit-8.x-2.12.zip UIkit 8.x-2.12.zip @endlink
 *
 * @subsection via-drush via Drush (recommended for site administrators comfortable with Drush)
 * Drush is a command line and shell scripting interface for Drupal. Use the
 * following command to download UIkit 8 with Drush.
 *
 * @code drush dl uikit @endcode
 *
 * Information on installing and using Drush can be found
 * @link http://www.drush.org/en/master/ here @endlink.
 *
 * @subsection via-git via git.drupal.org (recomended for theme developers only)
 * Use the following Git command to download the development release from the
 * 8.x-2.x branch. This will ensure you get the latest commited development
 * release.
 *
 * @code git clone --branch 8.x-2.x https://git.drupal.org/project/uikit.git @endcode
 *
 * The development branch is where all new development resides and not
 * recommended for use on production sites. Work still needs done before a
 * release candidate can be released. We ask you use the
 * @link https://www.drupal.org/project/issues/uikit?categories=All issue queue @endlink
 * to report bugs, support or feature requests.
 *
 * @section requirements Requirements
 * There are no requirements to use UIkit 8.
 *
 * Once you have finished implementing UIkit into your Drupal site, take a look
 * look at the @link sub_theme Creating a UIkit sub-theme @endlink to create a
 * UIkit sub-theme.
 * @}
 */

/**
 * @defgroup sub_theme Creating a UIkit sub-theme
 * @{
 * @section subtheme Create a custom theme by inheriting the UIkit 8 base theme.
 * Creating a custom theme utilizing UIkit is just like creating any other
 * theme. The only difference with creating a UIkit sub-theme is your custom
 * theme will automatically inherit all UIkit offers without having to reinvent
 * the wheel.
 *
 * @section manually Creating a sub-theme manually
 * UIkit for Drupal ships with a STARTERKIT to get you going quickly when
 * creating a UIkit sub-theme. If you're comfortable using the command line, we
 * recommend @ref drush instead.
 *
 * To get started you can copy the STARTERKIT folder in the root directory of
 * UIkit and paste it where you place your themes in your Drupal installation.
 * See
 * @link https://www.drupal.org/docs/8/theming-drupal-8/drupal-8-theme-folder-structure Drupal 8 Theme folder structure @endlink
 * to learn where to place your themes in Drupal 8.
 *
 * The folder structure of the STARTERKIT looks like:
 * @code
 * |-config
 * |  |-install
 * |     |-STARTERKIT.settings.yml
 * |  |-optional
 * |     |-block.block.STARTERKIT_*.yml
 * |  |-schema
 * |     |-STARTERKIT.schema.yml
 * |
 * |-css
 * |  |-STARTERKIT.base.css
 * |  |-STARTERKIT.component.css
 * |  |-STARTERKIT.layout.css
 * |  |-STARTERKIT.theme.css
 * |
 * |-includes
 * |  |-alter.inc
 * |  |-preprocess.inc
 * |  |-process.inc
 * |  |-theme.inc
 * |
 * |-js
 * |  |-STARTERKIT.theme.js
 * |
 * |-favicon.ico
 * |-logo.png
 * |-logo.svg
 * |-README.txt
 * |-screenshot.png
 * |-STARTERKIT.info.ymltmp
 * |-STARTERKIT.libraries.yml
 * |-STARTERKIT.theme
 * |-theme-settings.php
 * @endcode
 *
 * Next you will need to replace all instances of STARTERKIT in the file names
 * and contents with your theme name. Remember to use the machine name for file
 * names and functions, i.e. "theme_name" and a human-readable name elsewhere,
 * i.e. "Theme name".
 *
 * Finally, one last change is needed in order for Drupal to recognize your new
 * sub-theme. Remove the .ymltmp extension from the theme info file, i.e.
 * theme_name.info.yml. We included the .ymltmp extension in STARTERKIT so
 * Drupal would not display STARTERKIT on the Appearance page.
 *
 * That's it! You are now ready to start making changes to your new sub-theme.
 * More information on customizing UIkit themes can be found in the
 * @link theme_settings UIkit theme settings @endlink topic.
 *
 * @section drush Creating a sub-theme using Drush
 * UIkit for Drupal comes equipped with an easy-to-use
 * @link http://www.drush.org/en/master/ Drush @endlink command to create a
 * sub-theme from the command line. This provides rapid development of your
 * UIkit sub-theme, creating the files necessary for you with one simple
 * command.
 *
 * The Drush command uikit-starterkit (alias uikit-sk) uses the STARTERKIT now
 * included with the project.
 *
 * @subsection uikit-sk-example Use example
 * @code drush uikit-sk machine_name "Theme name" --path=sites/default/themes --description="Awesome theme description." @endcode
 *
 * [machine_name], [--path] and [--description] are all optional; only the
 * theme name (wrapped in double-quotes) is required. Use
 * "drush uikit-sk --help" to view more detailed help information. If Drush
 * reports it cannot find the command, be sure to run "drush cc drush" to clear
 * Drush's cache.
 *
 * Once the sub-theme has been created you can begin customizing the sub-theme.
 * The file structure for the sub-theme mirrors the file structure
 * @link https://www.drupal.org/docs/8/theming-drupal-8/drupal-8-theme-folder-structure Drupal recommends @endlink
 * to make it easy to find the files and functions you want to edit. The only
 * main difference is where common theme functions are located, which is
 * discussed in the next section.
 *
 * @subsection theme-functions Theme functions
 * Common themeing functions have been split up and placed into relative include
 * files in order to make it easier to locate a function you wish to
 * edit/create. All theme functions (template_preprocess_HOOK(),
 * hook_HOOK_alter(), theme_HOOK(), etc.) can be found under the includes
 * directory of the sub-theme.
 *
 * @subsection sub-theme-includes Sub-theme includes directory structure:
 * @code
 * |-includes
 * |  |-alter.inc
 * |  |-preprocess.inc
 * |  |-process.inc
 * |  |-theme.inc
 * @endcode
 *
 * The filename of each include file makes it easy to understand which themeing
 * functions are located where. Common functions you will utilize during
 * development already exist in some of these files, although they are commented
 * out by default.
 *
 * @code
 * To enable the use of these functions, simply change:
 * /**
 *  * Implements hook_theme().
 *  *
 * /* -- Delete this line if you want to use this function
 * function amazing_name_theme($existing, $type, $theme, $path) {
 * }
 * //
 * @endcode
 *
 * to:
 * @code
 * /**
 *  *Implements hook_theme().
 *  /
 * function amazing_name_theme($existing, $type, $theme, $path) {
 * }
 * @endcode
 *
 * Be sure to clear the cache in order for the function you uncommented to be
 * recognized by Drupal.
 *
 * To learn more about what you can do with your UIkit sub-theme, read the
 * @link https://www.drupal.org/docs/8/theming Themeing Drupal 8 @endlink
 * documentation guide.
 * @}
 */

/**
 * @defgroup theme_settings UIkit theme settings
 * @{
 * @section settings Customizing UIkit 8 from the Drupal administration back-end.
 * UIkit comes with an extensive variety of theme settings to configure almost
 * all themeable aspects of your Drupal site. This topic provides a brief
 * overview of these theme settings to customize the look of your website.
 *
 * @subsection jump-to-section Jump to a section
 * - @ref theme_styles
 * - @ref layout
 * - @ref navigations
 *
 * @section theme_styles Theme styles
 * UIkit comes with a basic theme and two neat themes to get you started. Here
 * you can select which base style to start with.
 *
 * @section layout Layout
 * Apply our fully responsive fluid grid system and panels, common layout parts
 * like blog articles and comments and useful utility classes.
 *
 * @subsection page-layout Page Layout
 * Page layout settings are available for standard, tablet and mobile layouts,
 * allowing you to arrange the main content and sidebar regions in various ways.
 * Each layout is independent of the others, giving you many ways to present
 * your content to your users.
 *
 * Additional page layout settings:
 * - Page Container: Add the .uk-container class to the page container to give
 *   it a max-width and wrap the main content of your website. For large screens
 *   it applies a different max-width.
 * - Page Centering: To center the page container, use the .uk-container-center
 *   class.
 * - Page Margin: Select the margin to add to the top and bottom of the page
 *   container. This is useful, for example, when using the gradient style with
 *   a centered page container and a navbar.
 *
 * @subsection region-layout Region Layout
 * Change region layout settings on a per region basis. You can currently apply
 * the following two components to each region (more will be added in the
 * future):
 * - Panel
 * - Block
 *
 * @section navigations Navigations
 * UIkit offers different types of navigations, like navigation bars and side
 * navigations. Use breadcrumbs or a pagination to steer through articles.
 *
 * @subsection navigation-bar Navigation Bar
 * Configure settings for the navigation bar, where the primary and secondary
 * menus reside. Configurable options:
 * - Navbar container: Configure settings for the navigation bar container with
 *   the following options:
 *   - Container: Add the .uk-container class to the navbar container to give it
 *     a max-width and wrap the navbar of your website. For large screens it
 *     applies a different max-width.
 *   - Centering: To center the navbar container, use the .uk-container-center
 *     class.
 *   - Navbar attached: Adds the .uk-navbar-attached class to optimize the
 *     navbar's styling to be attached to the top of the viewport. For example,
 *     rounded corners will be removed.
 * - Navbar margin: Configure the top and bottom margin to apply to the navbar.
 *
 * @subsection local-tasks Local Tasks
 * Configure settings for the local tasks menus.
 * - Primary tasks style: Select the style to apply to the primary local tasks.
 * - Secondary tasks style: Select the style to apply to the secondary local
 *   tasks.
 *
 * @subsection breadcrumbs Breadcrumbs
 * Configure settings for breadcrumb navigation.
 * - Display breadcrumbs: Check this box to display the breadcrumb.
 * - Display home link in breadcrumbs: Check this box to display the home link
 *   in breadcrumb trail.
 * - Display current page title in breadcrumbs: Check this box to display the
 *   current page title in breadcrumb trail.
 * @}
 */

/**
 * @defgroup uikit_themeable UIkit theme implementations
 * @{
 * @section implementations Functions and templates for the user interface to be implemented by UIkit 8.
 * Drupal's default template renderer is a simple PHP parsing engine that
 * includes the template and stores the output. The default template engine in
 * Drupal 8 is Twig. This is the template engine utilized by UIkit 8.
 *
 * UIkit implements hook overrides by the use of template files and an include
 * file, which are used to override the default implementations provided by
 * Drupal.
 *
 * Contrary to Drupal 7, in Drupal 8 template files (*.html.twig files) must be
 * stored in the 'templates' sub folder. The templates folder is further divided
 * into various elemental folders (i.e. block, layout, navigation, etc.). This
 * structure will make it easier to find a template file during development of a
 * sub-theme.
 * @}
 */
