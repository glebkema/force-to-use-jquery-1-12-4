# wp-force-to-use-jquery-1-12-4
A simple plugin forces WordPress to use jQuery 1.12.4 and jQuery-migrate 1.4.1 from <a href="https://cdnjs.com/" target=_blank">https://cdnjs.com</a>.

Yes, I know, these are the core versions out of the box. But my customer uses uses an aggressive theme that overrides the jQuery version to an older one.

I've tried to install the "<a href="https://wordpress.org/plugins/version-control-for-jquery/">Version Control for jQuery</a>" plugin. But it turned out that the theme is stronger than this plugin too.

This plugin overrides other settings, due to the higher priority in the hook. It can be used as a template for an emergency solution until a wiser solution is found.
