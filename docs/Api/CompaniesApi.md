# Freee\Accounting\CompaniesApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCompanies**](CompaniesApi.md#getCompanies) | **GET** /companies | 事業所一覧の取得
[**getCompany**](CompaniesApi.md#getCompany) | **GET** /companies/{id} | 事業所の詳細情報の取得
[**updateCompany**](CompaniesApi.md#updateCompany) | **PUT** /companies/{id} | 事業所情報の更新



## getCompanies

> \Freee\Accounting\Model\CompaniesIndexResponse getCompanies()

事業所一覧の取得

<h2 id=\"\">概要</h2>  <p>ユーザが所属する事業所の一覧を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li>role <ul> <li>admin : 管理者</li>  <li>simple_accounting : 一般</li>  <li>self_only : 取引登録のみ</li>  <li>read_only : 閲覧のみ</li> </ul> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCompanies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompanies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Freee\Accounting\Model\CompaniesIndexResponse**](../Model/CompaniesIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCompany

> \Freee\Accounting\Model\CompaniesShowResponse getCompany($id, $details, $account_items, $taxes, $items, $partners, $sections, $tags, $walletables)

事業所の詳細情報の取得

<h2 id=\"\">概要</h2>  <p>ユーザが所属する事業所の詳細を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li>role <ul> <li>admin : 管理者</li>  <li>simple_accounting : 一般</li>  <li>self_only : 取引登録のみ</li>  <li>read_only : 閲覧のみ</li> </ul> </li> </ul>  <h2 id=\"_3\">

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 事業所ID
$details = True; // bool | 取得情報に勘定科目・税区分コード・税区分・品目・取引先・部門・メモタグ・口座の一覧を含める
$account_items = True; // bool | 取得情報に勘定科目一覧を含める
$taxes = True; // bool | 取得情報に税区分コード・税区分一覧を含める
$items = True; // bool | 取得情報に品目一覧を含める
$partners = True; // bool | 取得情報に取引先一覧を含める
$sections = True; // bool | 取得情報に部門一覧を含める
$tags = True; // bool | 取得情報にメモタグ一覧を含める
$walletables = True; // bool | 取得情報に口座一覧を含める

try {
    $result = $apiInstance->getCompany($id, $details, $account_items, $taxes, $items, $partners, $sections, $tags, $walletables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 事業所ID |
 **details** | **bool**| 取得情報に勘定科目・税区分コード・税区分・品目・取引先・部門・メモタグ・口座の一覧を含める | [optional]
 **account_items** | **bool**| 取得情報に勘定科目一覧を含める | [optional]
 **taxes** | **bool**| 取得情報に税区分コード・税区分一覧を含める | [optional]
 **items** | **bool**| 取得情報に品目一覧を含める | [optional]
 **partners** | **bool**| 取得情報に取引先一覧を含める | [optional]
 **sections** | **bool**| 取得情報に部門一覧を含める | [optional]
 **tags** | **bool**| 取得情報にメモタグ一覧を含める | [optional]
 **walletables** | **bool**| 取得情報に口座一覧を含める | [optional]

### Return type

[**\Freee\Accounting\Model\CompaniesShowResponse**](../Model/CompaniesShowResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCompany

> \Freee\Accounting\Model\CompaniesUpdateResponse updateCompany($id, $parameters)

事業所情報の更新

<h2 id=\"\">概要</h2>  <p>ユーザが所属する事業所の情報を更新する</p>  <p>※同時に複数のリクエストを受け付けない</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 事業所ID
$parameters = new \Freee\Accounting\Model\UpdateCompanyParams(); // \Freee\Accounting\Model\UpdateCompanyParams | 

try {
    $result = $apiInstance->updateCompany($id, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->updateCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 事業所ID |
 **parameters** | [**\Freee\Accounting\Model\UpdateCompanyParams**](../Model/UpdateCompanyParams.md)|  | [optional]

### Return type

[**\Freee\Accounting\Model\CompaniesUpdateResponse**](../Model/CompaniesUpdateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

