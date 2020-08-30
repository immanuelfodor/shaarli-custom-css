# Shaarli Custom CSS Plugin

[Shaarli](https://github.com/shaarli/Shaarli) plugin to customize the look and feel of the UI with custom CSS rules. 

Tested on Shaarli 0.12.0-beta with the default theme but it should work with the [Shaarli-Material](https://github.com/kalvn/Shaarli-Material) and all [built-in themes](https://github.com/shaarli/Shaarli/tree/master/tpl/) as well.

## Features

* Set up your custom CSS rules on the Plugin Administration page for easy configuration

## Installation

The plugin's folder (`custom_css`) should be placed in the `<shaarli>/plugins/` directory.

The directory structure should look like:

```bash 
└── plugins
    └── custom_css
        ├── custom_css.html
        ├── custom_css.meta
        └── custom_css.php
```

To enable the plugin, just check it in the Plugin Administration page (`?do=pluginadmin`).

You can also add `custom_css` to your list of enabled plugins in `data/config.json.php`.\
The `general.enabled_plugins` list should look like then:

```
"general": {
  "enabled_plugins": [
    "custom_css",
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

- :warning: There is no validation on the CSS file contents upon saving and loading! Your only "protection" against a self-[XSS](https://en.wikipedia.org/wiki/Cross-site_scripting) attack is the `rel="stylesheet"` attribute on the link. It should be enough but please consider your attack vector.

## Recommendations

An example CSS you can try out for starting customizations over the default theme: `.linklist-item, .linklist-item-title, .linklist-item-infos, .page-form, .page-form .window-title, .linksperpage a, .linklist-filters .filter-off, .linksperpage input[type="text"], .searchform-block input[type="text"] { background: #fff }  .linklist-item-infos-url { display: none } .linklist-item-infos-dateblock { width: 100% } .linklist-item-title h2 { line-height: 1em; padding: 0.3em 10px 0.3em } .linklist-item-infos .label-tag { background: #f4f4f4; } .label-tag a { color: #595959 } .linklist-item-infos .linklist-item-tags { font-size: .8em; padding: 0.2em 0 0.7em; }`

Shaarli Custom CSS works best with my [Shaarli Markdown Toolbar](https://github.com/immanuelfodor/shaarli-markdown-toolbar) plugin, check it out, too! 😉

## Contact

Immánuel Fodor  
[fodor.it](https://fodor.it/shaarlifactorit) | [Linkedin](https://fodor.it/shaarlifactorin)
