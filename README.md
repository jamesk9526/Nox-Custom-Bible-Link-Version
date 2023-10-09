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


Further documentation ---> 

# Reference Material Documentation for Nox Custom Bible Link Version

## 1. `ncblink.css`

### Description:
`ncblink.css` is a crucial CSS file that plays a pivotal role in ensuring the elegant presentation of Bible reference pop-ups on web pages. It meticulously styles every element associated with the pop-up, offering users a visually appealing and user-friendly interface. The file embodies a combination of root element styles and specific class styles to achieve a cohesive and harmonious design.

### Detailed Breakdown:

#### Root Element Styles: 
These are foundational styles defined in the `:root` selector, providing a base for the customization of the pop-up elements. These CSS variables offer flexibility and ease of modification.

- `--popup-max-width`: Governs the maximum allowable width for the pop-up, ensuring it remains visually appealing and readable across various screen sizes.
- `--popup-padding`: Dictates the inner spacing of the pop-up, offering adequate space for content while maintaining an uncluttered look.
- `--popup-bg-color`: Responsible for the pop-up’s background color, which can be tailored to complement the overall website theme.
- `--popup-shadow`: Adds a subtle shadow effect to the pop-up, enhancing its visual prominence on the page.
- `--close-button-size`: Determines the dimensions of the close button, ensuring it is easily clickable yet unobtrusive.
- `--reference-font-size`: Controls the text size of the Bible references, ensuring readability and visual harmony.
- `--verse-font-size`: Manages the font size of the Bible verses, balancing readability with aesthetic appeal.
- `--link-color`: Specifies the color of hyperlinks within the pop-up, ensuring they are distinguishable and engaging.

#### Pop-up Container Styles:
The `.nbclink-popup` class encapsulates styles specific to the pop-up container. It ensures the pop-up is initially hidden and elegantly transitions to a visible state when activated.

- `display: none`: Ensures the pop-up remains hidden until triggered by a user action.
- `position: fixed`: Secures the pop-up at the center of the viewport, offering a consistent viewing experience.
- `top` and `left`: These properties, in conjunction with `transform`, center the pop-up for optimal visibility.

#### Close Button Styles:
The `.nbclink-popup .close` class ensures the close button is styled to be visually consistent with the overall pop-up design, offering users an intuitive means to dismiss the pop-up.

- It can be expanded to include properties like `color`, `font-size`, and `background-color` for enhanced customization.

### Usage:
To integrate these styles, link the `ncblink.css` file within the HTML’s head section. It ensures the styles are applied globally, offering a consistent user experience across all pages featuring the Bible reference pop-ups.

### Customization Tips:
- Adjust the CSS variables in the `:root` selector to easily tailor the pop-up’s appearance.
- Enhance the close button styles by adding hover effects for improved user interaction.
