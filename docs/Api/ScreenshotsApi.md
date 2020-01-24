# Swagger\Client\ScreenshotsApi

All URIs are relative to *https://app.diffy.website/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsIdCreateCustomSnapshotPost**](ScreenshotsApi.md#projectsidcreatecustomsnapshotpost) | **POST** /projects/{id}/create-custom-snapshot | Create custom uploaded screenshot
[**projectsIdScreenshotsPost**](ScreenshotsApi.md#projectsidscreenshotspost) | **POST** /projects/{id}/screenshots | Create Screenshot
[**snapshotsIdActionPut**](ScreenshotsApi.md#snapshotsidactionput) | **PUT** /snapshots/{id}/{action} | Start/stop screenshot&#x27;s jobs
[**snapshotsIdDelete**](ScreenshotsApi.md#snapshotsiddelete) | **DELETE** /snapshots/{id} | Delete Screenshot
[**snapshotsIdGet**](ScreenshotsApi.md#snapshotsidget) | **GET** /snapshots/{id} | Full info of the Screenshot
[**snapshotsIdPut**](ScreenshotsApi.md#snapshotsidput) | **PUT** /snapshots/{id} | Update screenshot name

# **projectsIdCreateCustomSnapshotPost**
> float projectsIdCreateCustomSnapshotPost($id, $snapshot_name, $files, $urls, $breakpoints)

Create custom uploaded screenshot

Create custom uploaded screenshot for the Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID
$snapshot_name = "snapshot_name_example"; // string | 
$files = array("files_example"); // string[] | 
$urls = array("urls_example"); // string[] | 
$breakpoints = array(56); // int[] | 

try {
    $result = $apiInstance->projectsIdCreateCustomSnapshotPost($id, $snapshot_name, $files, $urls, $breakpoints);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->projectsIdCreateCustomSnapshotPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID |
 **snapshot_name** | **string**|  | [optional]
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **urls** | [**string[]**](../Model/string.md)|  | [optional]
 **breakpoints** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

**float**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsIdScreenshotsPost**
> float projectsIdScreenshotsPost($id, $body)

Create Screenshot

Create Screenshot for the Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID
$body = new \Swagger\Client\Model\CreateScreenshot(); // \Swagger\Client\Model\CreateScreenshot | 

try {
    $result = $apiInstance->projectsIdScreenshotsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->projectsIdScreenshotsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID |
 **body** | [**\Swagger\Client\Model\CreateScreenshot**](../Model/CreateScreenshot.md)|  | [optional]

### Return type

**float**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snapshotsIdActionPut**
> string snapshotsIdActionPut($id, $action)

Start/stop screenshot's jobs

Start/stop screenshot's jobs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Screenshot ID
$action = "action_example"; // string | Action type

try {
    $result = $apiInstance->snapshotsIdActionPut($id, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->snapshotsIdActionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Screenshot ID |
 **action** | **string**| Action type |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snapshotsIdDelete**
> string snapshotsIdDelete($id)

Delete Screenshot

Delete Screenshot if it is not used by any Diff

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Screenshot ID

try {
    $result = $apiInstance->snapshotsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->snapshotsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Screenshot ID |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snapshotsIdGet**
> \Swagger\Client\Model\FullScreenshot snapshotsIdGet($id)

Full info of the Screenshot

Get full details of the Screenshot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Screenshot ID

try {
    $result = $apiInstance->snapshotsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->snapshotsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Screenshot ID |

### Return type

[**\Swagger\Client\Model\FullScreenshot**](../Model/FullScreenshot.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snapshotsIdPut**
> \Swagger\Client\Model\ScreenshotUpdateResponse snapshotsIdPut($id, $body)

Update screenshot name

Update screenshot name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Screenshot ID
$body = new \Swagger\Client\Model\ScreenshotUpdateData(); // \Swagger\Client\Model\ScreenshotUpdateData | 

try {
    $result = $apiInstance->snapshotsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->snapshotsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Screenshot ID |
 **body** | [**\Swagger\Client\Model\ScreenshotUpdateData**](../Model/ScreenshotUpdateData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ScreenshotUpdateResponse**](../Model/ScreenshotUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

