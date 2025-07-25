# PMPro Generate Checkout Info

This plugin adds a utility button to the Paid Memberships Pro checkout page that automatically fills in test user information using data from [randomuser.me](https://randomuser.me/). It is intended to speed up and simplify the process of manually testing the checkout flow.

## Features

- Adds a "Generate Info" button to the checkout form
- Automatically fills in:
  - Username
  - Email
  - Password and confirmation
- Fetches realistic data from randomuser.me (e.g., `Terry.Wright` instead of `test123`)
- Saves time during development and QA

## Requirements

- [Paid Memberships Pro](https://www.paidmembershipspro.com/) must be installed and activated
- WordPress 5.0+

## Installation

1. Clone or download this repository.
2. Upload the plugin to your WordPress installation:
   - Upload via **Plugins > Add New > Upload Plugin** in the WordPress dashboard, or
   - Upload the extracted folder to `/wp-content/plugins/` via FTP or CLI
3. Activate the plugin through the WordPress admin under **Plugins**

## Usage

Once the plugin is active:

1. Navigate to any page using the Paid Memberships Pro checkout form.
2. You will see a **"Generate Info"** button above the username field.
3. Click the button to populate the username, email, password, and password confirmation fields with randomized test data.
4. Continue the checkout process as usual.

## Notes

- This plugin is intended for development and staging environments. It should not be used on production sites.
- No data is stored or tracked by this plugin; all user data is fetched on demand from the [randomuser.me](https://randomuser.me/) API.

## Contributing

Pull requests are welcome. If you encounter a bug or have a feature suggestion, feel free to open an issue.
