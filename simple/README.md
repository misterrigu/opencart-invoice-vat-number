# Simple version

This version adds a VAT, GST or tax registration number to OpenCart invoices without adding an admin settings page.

## Before installing

Open `install.xml` in a text editor and change these two values:

```xml
<b>VAT No.</b> YOUR VAT NUMBER
```

For example:

```xml
<b>VAT No.</b> GB 123 4567 89
```

You can also change the label:

```xml
<b>GST No.</b> 123456789
```

## Installation

1. Edit `install.xml` with your own label and registration number.
2. Create a ZIP file containing `install.xml` at the **root of the ZIP**.
3. Name the ZIP with an `.ocmod.zip` ending, for example:
   `invoice_tax_number_simple.ocmod.zip`
4. In OpenCart admin, go to **Extensions → Installer**.
5. Upload the ZIP.
6. Go to **Extensions → Modifications**.
7. Click **Refresh**.
8. Print an invoice to confirm the number appears.

No core files are overwritten.

## Uninstallation

1. Remove the modification through **Extensions → Installer**.
2. Go to **Extensions → Modifications**.
3. Click **Refresh**.
