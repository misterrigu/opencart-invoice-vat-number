# Configurable version

This version adds a small OpenCart admin module so the VAT, GST or tax registration details can be changed without editing code.

## Features

- Configurable label, such as `VAT No.`, `GST No.` or `Tax ID`
- Configurable registration number
- Enable/disable control
- Displays nothing if disabled or if the registration number is blank
- No core files are overwritten

## Installation

1. Download the configurable `.ocmod.zip` package from the latest GitHub release.
2. In OpenCart admin, go to **Extensions → Installer**.
3. Upload the ZIP.
4. Go to **Extensions → Modifications** and click **Refresh**.
5. Go to **Extensions → Extensions**.
6. Choose **Modules** from the extension type dropdown.
7. Find **Invoice VAT / Tax Number** and click **Install**.
8. Click **Edit**.
9. Enter your label and registration number, enable the module, and save.
10. Print an invoice to confirm the details appear.

## Uninstallation

1. Disable and uninstall **Invoice VAT / Tax Number** from **Extensions → Extensions → Modules**.
2. Remove the extension package through **Extensions → Installer**.
3. Go to **Extensions → Modifications** and click **Refresh**.

## Notes

This version uses OpenCart's normal settings system. It is intended for the standard OpenCart 3 admin invoice controller and template.
