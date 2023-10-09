```markdown
# Nox Custom Bible Link Version

![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)

## Table of Contents

- [Description](#description)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
  - [Automatic Reference Detection](#automatic-reference-detection)
  - [Manual Reference Linking](#manual-reference-linking)
  - [Gutenberg Block](#gutenberg-block)
- [Settings](#settings)
- [Contribution](#contribution)
- [License](#license)
- [Support](#support)

![image](https://github.com/jamesk9526/Nox-Custom-Bible-Link-Version/assets/93682381/58d4014b-9fbe-41ea-9cb1-9621b7e97055)

## Description

Nox Custom Bible Link Version is a WordPress plugin aimed at simplifying the handling of Bible references on your website. It enables automatic detection and conversion of Bible references into clickable links, which when clicked, display the Bible verses in a lightbox. This feature enhances the user experience, allowing them to view Bible verses effortlessly without navigating away from the page.

## Features

- **Automatic Detection**: Automatically detects and converts Bible references into clickable links.
- **Customizable Lightbox**: Displays Bible verses in a customizable lightbox when the references are clicked.
- **Manual Reference Linking**: Allows manual wrapping of Bible references with `<a>` tags for custom formatting.
- **Gutenberg Block**: Provides an easy-to-use Gutenberg block for manual reference linking.
- **Multi-Version Support**: Supports multiple Bible versions and translations.
- **Customizable Settings**: Offers configurable settings to customize the lightbox appearance.

## Installation

1. Download the `nox-custom-bible-link-version.zip` file from the [GitHub repository](https://github.com/jamesk9526/nox-custom-bible-link).
2. In your WordPress dashboard, navigate to `Plugins` > `Add New` > `Upload Plugin`.
3. Choose the downloaded zip file and click `Install Now`.
4. After the installation is complete, click `Activate`.

## Usage

### Automatic Reference Detection

The plugin can automatically detect and convert Bible references in your content into clickable links. For instance, writing "John 3:16" in your post or page content will turn it into a clickable link.

### Manual Reference Linking

You can manually wrap your Bible references in `<a>` tags with the class `bible-reference` for custom formatting. 
```html
<a href="#" class="bible-reference">John 3:16</a>
```

### Gutenberg Block

For more control over how the Bible references are displayed, use the provided Gutenberg block:
1. Add a new block in the editor by clicking the "+" button.
2. In the search bar, type "Nox Reference Block" and add it to your post or page.
3. In the block settings, you can enter your custom text or Bible reference.

Example:
```markdown
1. Add the "Nox Reference Block" to your content.
2. In the block settings, enter your custom text or Bible reference (e.g., "John 3:16").
3. The block generates a clickable link using the entered text or reference.
```

## Settings

Navigate to the "Nox Custom Bible Link Version Settings" page in your WordPress admin panel to configure the plugin according to your preferences.

## Contribution

Contributions are welcome! Fork the repository, make your changes, and submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Support

For support or inquiries, please contact [contact@jamesnox.com](mailto:contact@jamesnox.com).

Additionally, you can support the development of this plugin by donating. Any amount is greatly appreciated!

[![Donate](https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif)](https://www.paypal.com/donate?hosted_button_id=6K8ZXLZNRWYDJ)

---

Made with ❤️ by James Anthony Knox | [jamesnox.com](https://jamesnox.com)
```

In this revision, I've adhered to the format you've provided while incorporating the details from the original README for the Nox Custom Bible Link Version plugin. This format organizes the content clearly and includes a table of contents for easy navigation. The usage section is detailed and instructive, with sub-sections for different aspects of the plugin usage. Additionally, contact, contribution, and donation details are included at the end for community engagement and support.
