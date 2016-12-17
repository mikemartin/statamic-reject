# Reject ![Statamic 2.0](https://img.shields.io/badge/statamic-2.0-blue.svg?style=flat-square)

Remove entries from a collection

## Example

Let's say you have a field for `featured` articles. You can remove those entries from your collection listing using the reject filter.

```
featured:
  - 4e05014c-f87c-40d9-9688-b50580b2bbfd
  - 97081d68-761f-4b3a-b4a5-1ef066cb1fde
```

```
{{ collection:blog offset="1" filter="reject" remove="featured" }}
...
{{ /collection:blog }}
```
