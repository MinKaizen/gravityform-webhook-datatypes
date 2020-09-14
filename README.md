# Usage

## Send JSON data instead of string

1. Append `_as_json'` in the **field name**.
2. Use JSON syntax with *SINGLE QUOTES* in the **field value**.


> The `_as_json` suffix will be removed in the final output.

> You can still send form data using the default `{fieldName:fieldId}` syntax. This will be resolved before the string is converted to JSON

## Send int instead of string

1. Append `_as_int` in the **field name**
2. Enter integer values in the **field value**

> The `_as_int` suffix will be removed in the final output.

<br>

# Example

In the Gravity Forms Webhook GUI:
```yaml
# Note the use of single quotes
users_as_json: {{'name':'John','gender':'male'}, {'name':'Jill','gender':'female'}}
```

This will output:
```js
// Note 'users_as_json' is truncated to just 'users'
users: {
  {
    name: "John",
    gender: "male"
  },
  {
    name: "Jill",
    gender: "female"
  }
}

```