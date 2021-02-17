# Tables

`Laminas\Text\Table` is a component for creating text-based tables on the fly using
decorators.  This can be helpful for sending structured data in text emails, or
to display table information in a CLI application. `Laminas\Text\Table` supports
multi-line columns, column spans, and alignment.

<!-- markdownlint-disable-next-line MD001 -->
> ### Encoding
>
> `Laminas\Text\Table` expects your strings to be UTF-8 encoded by default. If this
> is not the case, you can either supply the character encoding as a parameter
> to the constructor or the `setContent()` method of `Laminas\Text\Table\Column`.
> Alternately, if you have a different encoding in the entire process, you can
> define the standard input charset with
> `Laminas\Text\Table\Table::setInputCharset($charset)`. In case you need another
> output charset for the table, you can set it with
> `Laminas\Text\Table\Table::setOutputCharset($charset)`.

A `Laminas\Text\Table\Table` object consists of rows which contain columns,
represented by `Laminas\Text\Table\Row` and `Laminas\Text\Table\Column`, respectively.
When creating a table, you can supply an array with options for the table.

Options include:

- `columnWidths` (required): An array defining all columns width their widths in characters.
- `decorator`: The decorator to use for the table borders. The default is
  `unicode`, but you may also specify `ascii` or give an instance of a custom
  decorator object.
- `padding`: The number of characters of left and right padding within the
  columns. The default padding is zero.
- `AutoSeparate`: How the rows are separated with horizontal lines; the default
  is to separate all rows. This is defined as a bitmask containing one ore more
  of the following `Laminas\Text\Table` constants:
  - `Laminas\Text\Table\Table::AUTO_SEPARATE_NONE`
  - `Laminas\Text\Table\Table::AUTO_SEPARATE_HEADER`
  - `Laminas\Text\Table\Table::AUTO_SEPARATE_FOOTER`
  - `Laminas\Text\Table\Table::AUTO_SEPARATE_ALL`
  Where header is always the first row, and the footer is always the last row.

Rows are added to the table by creating a new instance of `Laminas\Text\Table\Row`
and appending it to the table via the `appendRow()` method. Rows themselves have
no options. You can also provide the `appendRow()` method with an array of
options describing a row; these will then be automatically converted to a row
object, containing multiple column objects.

Adding columns follows the same process as adding rows.  Create a new instance
of `Laminas\Text\Table\Column` and then either set the column options in the
constructor or later with the `set*()` methods. The first parameter is the
content of the column; content may have multiple lines, which should be
separated by `\n` characters. The second parameter defines the alignment, which
is 'left' by default, but can be any of the following `Laminas\Text\Table\Column`
constant values:

- `ALIGN_LEFT`
- `ALIGN_CENTER`
- `ALIGN_RIGHT`

The third parameter is the column span. For example, when you provide the value "2", the
column will span two columns of the table.

The last parameter defines the encoding of the content, which should be
supplied only if the content is neither ASCII nor UTF-8.

To append the column to the row, call `appendColumn()` in your row object with
the column object as a parameter. Alternately, provide a string to the
`appendColumn()` method.

To render the table, use the `render()` method, or rely on the
`__toString()` implementation to do implicit casting

```php
echo $table;

// or
$tableString = (string) $table`;
```

## Basic Usage

```php
$table = new Laminas\Text\Table\Table([
    'columnWidths' => [10, 20]
]);

// Implicitly build rows, by supply an array of column values:
$table->appendRow(['Laminas', 'Framework']);

// Or build the row and column manually:
$row = new Laminas\Text\Table\Row();

$row->appendColumn(new Laminas\Text\Table\Column('Laminas'));
$row->appendColumn(new Laminas\Text\Table\Column('Framework'));

$table->appendRow($row);

echo $table;
```

The above results in the following output:

```text
┌──────────┬────────────────────┐
│Laminas      │Framework           │
|──────────|────────────────────|
│Laminas      │Framework           │
└──────────┴────────────────────┘
```
