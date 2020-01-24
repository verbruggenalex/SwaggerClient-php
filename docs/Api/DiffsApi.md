# Swagger\Client\DiffsApi

All URIs are relative to *https://app.diffy.website/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**diffsIdActionPut**](DiffsApi.md#diffsidactionput) | **PUT** /diffs/{id}/{action} | Start/stop diff&#x27;s jobs
[**diffsIdDelete**](DiffsApi.md#diffsiddelete) | **DELETE** /diffs/{id} | Delete Diff
[**diffsIdGet**](DiffsApi.md#diffsidget) | **GET** /diffs/{id} | Full info of the Diff
[**diffsIdPut**](DiffsApi.md#diffsidput) | **PUT** /diffs/{id} | Update diff name
[**projectsIdDiffsPost**](DiffsApi.md#projectsiddiffspost) | **POST** /projects/{id}/diffs | Create Diff

# **diffsIdActionPut**
> string diffsIdActionPut($id, $action)

Start/stop diff's jobs

Start/stop diff's jobs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DiffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Diff ID
$action = "action_example"; // string | Action type

try {
    $result = $apiInstance->diffsIdActionPut($id, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiffsApi->diffsIdActionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Diff ID |
 **action** | **string**| Action type |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diffsIdDelete**
> string diffsIdDelete($id)

Delete Diff

Delete Diff

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DiffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Diff ID

try {
    $result = $apiInstance->diffsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiffsApi->diffsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Diff ID |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diffsIdGet**
> \Swagger\Client\Model\FullDiff diffsIdGet($id)

Full info of the Diff

Get full details of the Diff

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DiffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Diff ID

try {
    $result = $apiInstance->diffsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiffsApi->diffsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Diff ID |

### Return type

[**\Swagger\Client\Model\FullDiff**](../Model/FullDiff.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diffsIdPut**
> \Swagger\Client\Model\DiffUpdateResponse diffsIdPut($id, $body)

Update diff name

Update diff name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DiffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Diff ID
$body = new \Swagger\Client\Model\DiffUpdateData(); // \Swagger\Client\Model\DiffUpdateData | 

try {
    $result = $apiInstance->diffsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiffsApi->diffsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Diff ID |
 **body** | [**\Swagger\Client\Model\DiffUpdateData**](../Model/DiffUpdateData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DiffUpdateResponse**](../Model/DiffUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsIdDiffsPost**
> float projectsIdDiffsPost($id, $body)

Create Diff

Create Diff for the Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DiffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID
$body = new \Swagger\Client\Model\CreateDiff(); // \Swagger\Client\Model\CreateDiff | 

try {
    $result = $apiInstance->projectsIdDiffsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiffsApi->projectsIdDiffsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID |
 **body** | [**\Swagger\Client\Model\CreateDiff**](../Model/CreateDiff.md)|  | [optional]

### Return type

**float**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

