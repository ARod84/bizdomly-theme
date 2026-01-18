# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Bizdomly is a WordPress Block Theme (Full Site Editing theme) for an ecommerce development agency. It requires WordPress 6.4+ and PHP 8.0+.

## Architecture

This is a **block theme** (not a classic theme), meaning:
- Templates are HTML files with WordPress block markup, not PHP templates
- Styling is primarily configured in `theme.json`, with CSS in `style.css` for custom classes and animations
- No traditional template hierarchy PHP files (header.php, footer.php, etc.)

### Key Files

- **theme.json**: Central configuration for colors, typography, spacing, layout constraints, and block styles. Uses WordPress 6.5 schema (version 3). Defines two font families (DM Sans for body, Instrument Serif for headings).
- **functions.php**: Registers theme support, block styles, block pattern categories, and enqueues Google Fonts as fallback.
- **style.css**: Custom CSS for animations, navigation, buttons, hero sections, service cards, and responsive layouts. Defines CSS custom properties mirroring theme.json values.

### Directory Structure

- `templates/`: Page templates using block markup (index.html, page.html, single.html, front-page.html)
- `parts/`: Reusable template parts (header.html, footer.html)
- `assets/js/`: JavaScript files (header.js for scroll effects)
- `assets/fonts/`: Local font files referenced in theme.json (DMSans, Instrument Serif)

### Block Styles

Custom block styles registered in functions.php:
- **Buttons**: `bizdomly-primary`, `bizdomly-secondary`, `bizdomly-large`
- **Groups**: `bizdomly-hero`, `bizdomly-dark`, `bizdomly-service-card`

CSS for these styles is added via `wp_add_inline_style()` on the `global-styles` handle.

## Development

This theme runs in Local by Flywheel (Local Sites). The site is located at `ghostwriter` in the Local Sites directory.

### Design Tokens

Colors, fonts, and spacing are defined in theme.json and should be referenced using WordPress CSS variables:
- Colors: `var(--wp--preset--color--black)`, `--wp--preset--color--background`, etc.
- Fonts: `var(--wp--preset--font-family--dm-sans)`, `var(--wp--preset--font-family--instrument-serif)`
- Spacing: `var(--wp--preset--spacing--10)` through `--wp--preset--spacing--60`
- Font sizes: `--wp--preset--font-size--small` through `--wp--preset--font-size--xx-large`

Layout constraints: content width 900px, wide width 1200px.
