# Swagger\Client\ProjectsApi

All URIs are relative to *https://app.diffy.website/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsGet**](ProjectsApi.md#projectsget) | **GET** /projects | List Projects
[**projectsIdComparePost**](ProjectsApi.md#projectsidcomparepost) | **POST** /projects/{id}/compare | Compare environments
[**projectsIdDelete**](ProjectsApi.md#projectsiddelete) | **DELETE** /projects/{id} | Delete Project
[**projectsIdDiffsGet**](ProjectsApi.md#projectsiddiffsget) | **GET** /projects/{id}/diffs | List of Diffs
[**projectsIdGet**](ProjectsApi.md#projectsidget) | **GET** /projects/{id} | Get Project information
[**projectsIdPost**](ProjectsApi.md#projectsidpost) | **POST** /projects/{id} | Update Project
[**projectsIdScreenshotsGet**](ProjectsApi.md#projectsidscreenshotsget) | **GET** /projects/{id}/screenshots | List of Screenshots
[**projectsIdSetBaseLineImageScreenshotIdPut**](ProjectsApi.md#projectsidsetbaselineimagescreenshotidput) | **PUT** /projects/{id}/set-base-line-image/{screenshot_id} | Set as baseline image
[**projectsIdSetBaseLineSetScreenshotIdPut**](ProjectsApi.md#projectsidsetbaselinesetscreenshotidput) | **PUT** /projects/{id}/set-base-line-set/{screenshot_id} | Set whole set as baseline images
[**projectsPost**](ProjectsApi.md#projectspost) | **POST** /projects | Create Project
[**projectsProjectIdComparePost**](ProjectsApi.md#projectsprojectidcomparepost) | **POST** /projects/{project_id}/compare | Compare custom environments

# **projectsGet**
> \Swagger\Client\Model\Project[] projectsGet()

List Projects

Get the list of the Projects current user has access to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->projectsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Project[]**](../Model/Project.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsIdComparePost**
> string projectsIdComparePost($id, $body)

Compare environments

This call can be used for example when you are doing release to staging environment and would like to check it against production. Available environments are 'prod-stage', 'prod-dev', 'stage-dev', 'custom', 'baseline-stage', 'baseline-prod', 'baseline-dev'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID
$body = new \Swagger\Client\Model\CompareEnvironment(); // \Swagger\Client\Model\CompareEnvironment | 

try {
    $result = $apiInstance->projectsIdComparePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsIdComparePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID |
 **body** | [**\Swagger\Client\Model\CompareEnvironment**](../Model/CompareEnvironment.md)|  | [optional]

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsIdDelete**
> string projectsIdDelete($id)

Delete Project

Delete Project with all its Screenshots and Diffs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID

try {
    $result = $apiInstance->projectsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsIdDiffsGet**
> \Swagger\Client\Model\DiffsList projectsIdDiffsGet($id, $page)

List of Diffs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID
$page = 56; // int | Page number

try {
    $result = $apiInstance->projectsIdDiffsGet($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsIdDiffsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID |
 **page** | **int**| Page number | [optional]

### Return type

[**\Swagger\Client\Model\DiffsList**](../Model/DiffsList.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsIdGet**
> \Swagger\Client\Model\FullProject projectsIdGet($id)

Get Project information

Full information about the Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID

try {
    $result = $apiInstance->projectsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID |

### Return type

[**\Swagger\Client\Model\FullProject**](../Model/FullProject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsIdPost**
> float projectsIdPost($id, $body)

Update Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID
$body = new \Swagger\Client\Model\FullProject(); // \Swagger\Client\Model\FullProject | 

try {
    $result = $apiInstance->projectsIdPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID |
 **body** | [**\Swagger\Client\Model\FullProject**](../Model/FullProject.md)|  | [optional]

### Return type

**float**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsIdScreenshotsGet**
> \Swagger\Client\Model\ScreenshotsList projectsIdScreenshotsGet($id, $page)

List of Screenshots

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID
$page = 56; // int | Page number

try {
    $result = $apiInstance->projectsIdScreenshotsGet($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsIdScreenshotsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID |
 **page** | **int**| Page number | [optional]

### Return type

[**\Swagger\Client\Model\ScreenshotsList**](../Model/ScreenshotsList.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsIdSetBaseLineImageScreenshotIdPut**
> string projectsIdSetBaseLineImageScreenshotIdPut($id, $screenshot_id, $url, $breakpoint)

Set as baseline image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID
$screenshot_id = 56; // int | Screenshot ID
$url = "url_example"; // string | 
$breakpoint = "breakpoint_example"; // string | 

try {
    $result = $apiInstance->projectsIdSetBaseLineImageScreenshotIdPut($id, $screenshot_id, $url, $breakpoint);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsIdSetBaseLineImageScreenshotIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID |
 **screenshot_id** | **int**| Screenshot ID |
 **url** | **string**|  | [optional]
 **breakpoint** | **string**|  | [optional]

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsIdSetBaseLineSetScreenshotIdPut**
> string projectsIdSetBaseLineSetScreenshotIdPut($id, $screenshot_id)

Set whole set as baseline images

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID
$screenshot_id = 56; // int | Screenshot ID

try {
    $result = $apiInstance->projectsIdSetBaseLineSetScreenshotIdPut($id, $screenshot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsIdSetBaseLineSetScreenshotIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID |
 **screenshot_id** | **int**| Screenshot ID |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsPost**
> float projectsPost($body)

Create Project

Create new Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Project(); // \Swagger\Client\Model\Project | 

try {
    $result = $apiInstance->projectsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Project**](../Model/Project.md)|  | [optional]

### Return type

**float**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsProjectIdComparePost**
> string projectsProjectIdComparePost($project_id, $body)

Compare custom environments

This call can be used for example when you are doing release to staging environment and would like to check it against production. Available environments are 'custom'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 56; // int | Project ID
$body = new \Swagger\Client\Model\CompareCustomEnvironment(); // \Swagger\Client\Model\CompareCustomEnvironment | 

try {
    $result = $apiInstance->projectsProjectIdComparePost($project_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectIdComparePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **int**| Project ID |
 **body** | [**\Swagger\Client\Model\CompareCustomEnvironment**](../Model/CompareCustomEnvironment.md)|  | [optional]

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

