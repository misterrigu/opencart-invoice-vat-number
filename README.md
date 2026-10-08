# OpenCart Invoice VAT / Tax Number

Adds a VAT, GST or other tax registration number to printed invoices in OpenCart 3.

Developed by [Rigu](https://rigu.co.uk), an independent UK camera accessories retailer, after needing a VAT registration number on invoices produced by a live OpenCart store.

Two versions are included so store owners can choose between the smallest possible modification and a configurable admin interface.

## Which version should I use?

### Simple version

Choose this if you want the smallest possible modification and do not mind editing one file before installation.

- One OCMOD file
- No additional admin page
- No database schema changes
- VAT/tax label and number are hard-coded in the modification
- Best when your registration number is unlikely to change

See [simple/README.md](simple/README.md).

### Configurable version

Choose this if you would rather enter the details through OpenCart admin.

- Adds a small module settings page
- Configurable label, for example `VAT No.`, `GST No.` or `Tax ID`
- Configurable registration number
- Number can be changed later without editing code
- Leaves invoices unchanged when the number is blank

See [configurable/README.md](configurable/README.md).

## Compatibility

- OpenCart 3.x
- Developed and tested against OpenCart 3.0.5.1
- Targets the standard admin invoice template:
  `admin/view/template/sale/order_invoice.twig`

If another extension replaces the admin invoice template or order controller, adaptation may be required.

## Where the number appears

The tax registration number is displayed with the store contact details near the top of the printed invoice.

For example:

```text
VAT No. GB 383 6653 63
```

## Releases

The **configurable** version can be distributed as a ready-to-install `.ocmod.zip`.

The **simple** version must be customised with your own label and registration number before it is zipped and installed. This is intentional: it avoids adding an admin settings page for such a small change.

## Licence

MIT. See [LICENSE](LICENSE).

## About Rigu

[Rigu](https://rigu.co.uk) is an independent UK retailer specialising in camera straps, creative photographic filters and light-painting equipment.

This extension was created to solve a practical issue encountered while running the Rigu OpenCart store and is shared in case it is useful to other OpenCart users.
