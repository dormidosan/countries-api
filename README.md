<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Countries API

API built to get the information of countries, states and cities. Result returned in JSON format.

## Output example

The JSON result consist in three elements: data, links and meta.

Data: Contains the result from the query. This is the main result you will need most of the time.
Links: Contains links to next and previous result based in pagination.
Meta: Contains links for results in the group, from 1 to last result, in groups of ten.

Example of a result:

``` 
 "data": [
        {
        ...
        }
    ],
    "links": {
        "first": "http://localhost/city-api/public/api/v1/countries?page=1",
        "last": "http://localhost/city-api/public/api/v1/countries?page=25",
        "prev": null,
        "next": "http://localhost/city-api/public/api/v1/countries?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 25,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://localhost/city-api/public/api/v1/countries?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "...",
                "active": false
            },
            {
                "url": "http://localhost/city-api/public/api/v1/countries?page=25",
                "label": "25",
                "active": false
            },
            {
                "url": "http://localhost/city-api/public/api/v1/countries?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://localhost/city-api/public/api/v1/countries",
        "per_page": 10,
        "to": 10,
        "total": 250
    }
```

## Countries methods

**GET /countries/**

Retrieve the information of all countries available globally.

**Parameters:**

``` URI/countries```

no parameter. Get all the countries and use pagination of 10 results.

``` URI/countries?nopagination ```

nopagination (optional). Get all the countries in a JSON format. nopagination override country parameter.

``` URI/countries?country=Irel ```
country (optional). Filter based on the specific string. 





**Outputs:**

data: List of countries

``` 
 "data": [
        {
            "id": 1,
            "name": "Afghanistan",
            "iso2": "AF",
            "iso3": "AFG",
            "region_id": 3,
            "subregion_id": 14
        },
        ...
        {
            "id": 10,
            "name": "Antigua And Barbuda",
            "iso2": "AG",
            "iso3": "ATG",
            "region_id": 2,
            "subregion_id": 7
        }
    ],
    "links": {
        ...
    },
    "meta": {
        ...
    }
```

GET /countries/{country_id}/states

Retrieve the information of all states of a specific country.

Inputs:
country_id: ID from the list of countries

Outputs:
data: List of states of a specific country

```	
	"data": [
        {
            "id": 1069,
            "name": "Tipperary",
            "country_id": 105,
            "country_code": "IE",
            "iso2": "TA"
        },
        {
            "id": 1070,
            "name": "Sligo",
            "country_id": 105,
            "country_code": "IE",
            "iso2": "SO"
        },
        {
            "id": 1071,
            "name": "Donegal",
            "country_id": 105,
            "country_code": "IE",
            "iso2": "DL"
        },
        {
            "id": 1072,
            "name": "Dublin",
            "country_id": 105,
            "country_code": "IE",
            "iso2": "D"
        },
        ...
        {
            "id": 1078,
            "name": "Offaly",
            "country_id": 105,
            "country_code": "IE",
            "iso2": "OY"
        }
    ],
    "links": {
       ...
    },
    "meta": {
	...
    }
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
