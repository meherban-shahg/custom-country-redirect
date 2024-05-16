# Custom Country Redirect Plugin

## Description

Custom Country Redirect is a WordPress plugin that redirects users to different URLs based on their country. It provides an easy-to-use interface to configure redirection rules and supports local testing using a test IP address.

## Features

- Redirect users based on their country
- Configure redirection rules through the WordPress admin interface
- Supports local testing with a test IP address
- Detects user country using the GeoPlugin API

## Installation

1. **Download the Plugin:**
   - Download the plugin files and extract them.

2. **Upload the Plugin:**
   - Upload the `custom-country-redirect` folder to the `/wp-content/plugins/` directory of your WordPress installation.

3. **Activate the Plugin:**
   - Go to the WordPress admin dashboard.
   - Navigate to `Plugins > Installed Plugins`.
   - Find the "Custom Country Redirect" plugin and activate it.

## Usage

1. **Configure Redirection Rules:**
   - Go to `Settings > Country Redirect`.
   - Enter the redirection rules in JSON format and save. Example:
     ```json
     {
         "US": "https://us.example.com",
         "CA": "https://ca.example.com",
         "GB": "https://uk.example.com",
         "AE": "https://uae.example.com"
     }
     ```

2. **Local Testing:**
   - Enter a test IP address for local testing and save.
   - Example IPs: 
     - US: `8.8.8.8`
     - Canada: `24.114.0.1`
     - UK: `81.2.69.142`
     - UAE: `94.200.0.1`

3. **Debugging:**
   - The current country code will be printed at the bottom of your site's front end for debugging purposes.

## Files and Structure

