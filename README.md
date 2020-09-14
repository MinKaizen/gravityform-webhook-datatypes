# Introduction

The popular Gravity Forms plugin for WordPress has an addon called "Webhooks" which allows you to send form data to a custom URL endpoint.

However it is limited because only string values can be sent. This plugin allows you to send arrays & objects (using psudo JSON syntax) as well as int values.

It's a bit hacky, so please read the Usage and Example sections below.

# Usage

## Arrays and Objects (JSON Syntax)

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