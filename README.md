# Shaarli Custom CSS Plugin

[Shaarli](https://github.com/shaarli/Shaarli) plugin to customize the look and feel of the UI with custom CSS rules. 

Tested on Shaarli 0.12.0-beta with the default theme but it should work with the [Shaarli-Material](https://github.com/kalvn/Shaarli-Material) and all [built-in themes](https://github.com/shaarli/Shaarli/tree/master/tpl/) as well.

## Features

* Set up your custom CSS rules on the Plugin Administration page for easy configuration

## Installation

The plugin's folder (`shaarli_custom_css`) should be placed in the `<shaarli>/plugins/` directory.

The directory structure should look like:

```bash 
└── plugins
    └── shaarli_custom_css
        ├── shaarli_custom_css.html
        ├── shaarli_custom_css.meta
        └── shaarli_custom_css.php
```

To enable the plugin, just check it in the Plugin Administration page (`?do=pluginadmin`).

You can also add `shaarli_custom_css` to your list of enabled plugins in `data/config.json.php`.\
The `general.enabled_plugins` list should look like then:

```
"general": {
  "enabled_plugins": [
    "shaarli_custom_css",
    [...]
  ],
}
```

## Configuration

Go to the Plugin Administration page, and edit the following settings (with the plugin enabled).

* **CUSTOM_CSS**:  
*Your CSS as one huge line. Default empty*  
Example value: `.some-class { color: red; font-size: 1.2em } .another-class { margin: 0; }`  
Supported values: any string (without validation!), defaults to empty.

> Note: this setting can also be set in `data/config.json.php`, in the `plugins` section:

```
"general": {
    "plugins": {
        "CUSTOM_CSS": ".some-class { color: red; font-size: 1.2em } .another-class { margin: 0; }",
        [...]
    },
}
```

## Known issues

None

## Recommendation 

Shaarli Custom CSS works best with my [Shaarli Markdown Toolbar](https://github.com/immanuelfodor/shaarli-markdown-toolbar) plugin, check it out, too! 😉

## Contact

Immánuel Fodor  
[fodor.it](https://fodor.it/shaarlifactorit) | [Linkedin](https://fodor.it/shaarlifactorin)
