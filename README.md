# List Users Plugin Exercise

This is intended to be a very simple WordPress plugin that creates a page and makes an API call to display a list of users on the page. This plugin is based on the WordPress Plugin Boilerplate by DevinVinson with the following main changes:

* In the `includes/class-list-users-activator.php` file, a new page is created.
* In the `public/js/list-users-public.js` file, a list of fake users is fetched from an API with placeholder JSON and displayed on the page.
* In the `includes/class-list-users-deactivator.php` file, the page is removed.

## Installation

This folder can be added directly in `/wp-content/plugins`. Activate the plugin in WP Admin and the new page titled `List Users Page` will be available. Deactivate the plugin and the page is deleted.

## WordPress Plugin Boilerplate

For more information on the boilerplate, see [WordPress Plugin Boilerplate](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate).