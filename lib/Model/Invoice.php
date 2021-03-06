<?php
/**
 * Invoice
 *
 * PHP version 5
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * freee API
 *
 * <h1 id=\"freee_api\">freee API</h1> <hr /> <h2 id=\"\">スタートガイド</h2> <p>1. セットアップ</p> <ol> <ul><li><a href=\"https://support.freee.co.jp/hc/ja/articles/202847230\" class=\"external-link\" rel=\"nofollow\">freeeアカウント（無料）</a>を<a href=\"https://secure.freee.co.jp/users/sign_up\" class=\"external-link\" rel=\"nofollow\">作成</a>します（すでにお持ちの場合は次へ）</li><li><a href=\"https://app.secure.freee.co.jp/developers/demo_companies/description\" class=\"external-link\" rel=\"nofollow\">開発者向け事業所・環境を作成</a>します</li><li><span><a href=\"https://app.secure.freee.co.jp/developers/applications\" class=\"external-link\" rel=\"nofollow\">前のステップで作成した事業所を選択してfreeeアプリを追加</a>します</span></li><li>Client IDをCopyしておきます</li> </ul> </ol>  <p>2. 実際にAPIを叩いてみる（ブラウザからAPIのレスポンスを確認する）</p> <ol> <ul><li><span><span>以下のURLの●をclient_idに入れ替えて<a href=\"https://app.secure.freee.co.jp/developers/tutorials/3-%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9%E3%83%88%E3%83%BC%E3%82%AF%E3%83%B3%E3%82%92%E5%8F%96%E5%BE%97%E3%81%99%E3%82%8B#%E8%AA%8D%E5%8F%AF%E3%82%B3%E3%83%BC%E3%83%89%E3%82%92%E5%8F%96%E5%BE%97%E3%81%99%E3%82%8B\" class=\"external-link\" rel=\"nofollow\">アクセストークンを取得</a>します</span></span><ul><li><span><span><pre><code>https://accounts.secure.freee.co.jp/public_api/authorize?client_id=●&amp;redirect_uri=urn%3Aietf%3Awg%3Aoauth%3A2.0%3Aoob&amp;response_type=token</a></code></pre></span></span></li></ul></li><li><span><a href=\"https://developer.freee.co.jp/docs/accounting/reference#/%E9%80%A3%E7%B5%A1%E5%85%88\" class=\"external-link\" rel=\"nofollow\">APIリファレンス</a>で<code>Authorize</code>を押下します</span></li><li><span>アクセストークン<span><span>を入力して</span></span>&nbsp;もう一度<span><code>Authorize</code>を押下して<code>Close</code>を押下します</span></span></li><li>リファレンス内のCompanies（事業所）に移動し、<code>Try it out</code>を押下し、<code>Execute</code>を押下します</li><li>Response bodyを参照し、事業所ID(id属性)を活用して、Companies以外のエンドポイントでどのようなデータのやりとりできるのか確認します</li></ul> </ol> <p>3. 連携を実装する</p> <ol> <ul><li><a href=\"https://developer.freee.co.jp/tips\" class=\"external-link\" rel=\"nofollow\">API TIPS</a>を参考に、ユースケースごとの連携の概要を学びます。<span>例えば</span><span>&nbsp;</span><a href=\"https://developer.freee.co.jp/tips/how-to-cooperate-salesmanegement-system\" class=\"external-link\" rel=\"nofollow\">SFA、CRM、販売管理システムから会計freeeへの連携</a>や<a href=\"https://developer.freee.co.jp/tips/how-to-cooperate-excel-and-spreadsheet\" class=\"external-link\" rel=\"nofollow\">エクセルやgoogle spreadsheetからの連携</a>です</li><li>実利用向け事業所がすでにある場合は利用、ない場合は作成します（セットアップで作成したのは開発者向け環境のため活用不可）</li><li><a href=\"https://developer.freee.co.jp/docs/accounting/reference\" class=\"external-link\" rel=\"nofollow\">API documentation</a><span>&nbsp;を参照し、躓いた場合は</span><span>&nbsp;</span><a href=\"https://developer.freee.co.jp/community/forum/community\" class=\"external-link\" rel=\"nofollow\">Community</a><span>&nbsp;で質問してみましょう</span></li></ul> </ol> <p>アプリケーションの登録方法や認証方法、またはAPIの活用方法でご不明な点がある場合は<a href=\"https://support.freee.co.jp/hc/ja/sections/115000030743\">ヘルプセンター</a>もご確認ください</p> <hr /> <h2 id=\"_2\">仕様</h2>  <h3 id=\"api\">APIエンドポイント</h3>  <p>https://api.freee.co.jp/ (httpsのみ)</p>  <h3 id=\"_3\">認証方式</h3>  <p><a href=\"http://tools.ietf.org/html/rfc6749\">OAuth2</a>に対応</p>  <ul> <li>Authorization Code Flow (Webアプリ向け)</li>  <li>Implicit Flow (Mobileアプリ向け)</li> </ul>  <h3 id=\"_4\">認証エンドポイント</h3>  <p>https://accounts.secure.freee.co.jp/</p>  <ul> <li>authorize : https://accounts.secure.freee.co.jp/public_api/authorize</li>  <li>token : https://accounts.secure.freee.co.jp/public_api/token</li> </ul>  <h3 id=\"_5\">アクセストークンのリフレッシュ</h3>  <p>認証時に得たrefresh_token を使ってtoken の期限をリフレッシュして新規に発行することが出来ます。</p>  <p>grant_type=refresh_token で https://accounts.secure.freee.co.jp/public_api/token にアクセスすればリフレッシュされます。</p>  <p>e.g.)</p>  <p>POST: https://accounts.secure.freee.co.jp/public_api/token</p>  <p>params: grant_type=refresh_token&amp;client_id=UID&amp;client_secret=SECRET&amp;refresh_token=REFRESH_TOKEN</p>  <p>詳細は<a href=\"https://github.com/applicake/doorkeeper/wiki/Enable-Refresh-Token-Credentials#flow\">refresh_token</a>を参照下さい。</p>  <h3 id=\"_6\">アクセストークンの破棄</h3>  <p>認証時に得たaccess_tokenまたはrefresh_tokenを使って、tokenを破棄することができます。 token=access_tokenまたはtoken=refresh_tokenでhttps://accounts.secure.freee.co.jp/public_api/revokeにアクセスすると破棄されます。token_type_hintでaccess_tokenまたはrefresh_tokenを陽に指定できます。</p>  <p>e.g.)</p>  <p>POST: https://accounts.secure.freee.co.jp/public_api/revoke</p>  <p>params: token=ACCESS_TOKEN</p>  <p>または</p>  <p>params: token=REFRESH_TOKEN</p>  <p>または</p>  <p>params: token=ACCESS_TOKEN&amp;token_type_hint=access_token</p>  <p>または</p>  <p>params: token=REFRESH_TOKEN&amp;token_type_hint=refresh_token</p>  <p>詳細は <a href=\"https://tools.ietf.org/html/rfc7009\">OAuth 2.0 Token revocation</a> をご参照ください。</p>  <h3 id=\"_7\">データフォーマット</h3>  <p>リクエスト、レスポンスともにJSON形式をサポート</p>  <h3 id=\"_8\">共通レスポンスヘッダー</h3>  <p>すべてのAPIのレスポンスには以下のHTTPヘッダーが含まれます。</p>  <ul> <li> <p>X-Freee-Request-ID</p> <ul> <li>各リクエスト毎に発行されるID</li> </ul> </li> </ul>  <h3 id=\"_9\">共通エラーレスポンス</h3>  <ul> <li> <p>ステータスコードはレスポンス内のJSONに含まれる他、HTTPヘッダにも含まれる</p> </li>  <li> <p>type</p>  <ul> <li>status : HTTPステータスコードの説明</li>  <li>validation : エラーの詳細の説明（開発者向け）</li> </ul> </li> </ul>  <p>レスポンスの例</p>  <pre><code>  {     &quot;status_code&quot; : 400,     &quot;errors&quot; : [       {         &quot;type&quot; : &quot;status&quot;,         &quot;messages&quot; : [&quot;不正なリクエストです。&quot;]       },       {         &quot;type&quot; : &quot;validation&quot;,         &quot;messages&quot; : [&quot;Date は不正な日付フォーマットです。入力例：2013-01-01&quot;]       }     ]   }</code></pre> <hr /> <h2 id=\"_10\">連絡先</h2>  <p>ご不明点、ご要望等は <a href=\"https://support.freee.co.jp/hc/ja/requests/new\">freee サポートデスクへのお問い合わせフォーム</a> からご連絡ください。</p> <hr />&copy; Since 2013 freee K.K.
 *
 * The version of the OpenAPI document: v1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Freee\Accounting\Model;

use \ArrayAccess;
use \Freee\Accounting\ObjectSerializer;

/**
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'company_id' => 'int',
        'issue_date' => 'string',
        'invoice_number' => 'string',
        'total_amount' => 'int',
        'total_vat' => 'int',
        'sub_total' => 'int',
        'invoice_status' => 'string',
        'payment_status' => 'string',
        'posting_status' => 'string',
        'company_name' => 'string',
        'payment_type' => 'string',
        'invoice_layout' => 'string',
        'tax_entry_method' => 'string',
        'invoice_contents' => '\Freee\Accounting\Model\InvoiceInvoiceContents[]',
        'total_amount_per_vat_rate' => '\Freee\Accounting\Model\InvoiceTotalAmountPerVatRate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'company_id' => null,
        'issue_date' => null,
        'invoice_number' => null,
        'total_amount' => null,
        'total_vat' => null,
        'sub_total' => null,
        'invoice_status' => null,
        'payment_status' => null,
        'posting_status' => null,
        'company_name' => null,
        'payment_type' => null,
        'invoice_layout' => null,
        'tax_entry_method' => null,
        'invoice_contents' => null,
        'total_amount_per_vat_rate' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'company_id' => 'company_id',
        'issue_date' => 'issue_date',
        'invoice_number' => 'invoice_number',
        'total_amount' => 'total_amount',
        'total_vat' => 'total_vat',
        'sub_total' => 'sub_total',
        'invoice_status' => 'invoice_status',
        'payment_status' => 'payment_status',
        'posting_status' => 'posting_status',
        'company_name' => 'company_name',
        'payment_type' => 'payment_type',
        'invoice_layout' => 'invoice_layout',
        'tax_entry_method' => 'tax_entry_method',
        'invoice_contents' => 'invoice_contents',
        'total_amount_per_vat_rate' => 'total_amount_per_vat_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'issue_date' => 'setIssueDate',
        'invoice_number' => 'setInvoiceNumber',
        'total_amount' => 'setTotalAmount',
        'total_vat' => 'setTotalVat',
        'sub_total' => 'setSubTotal',
        'invoice_status' => 'setInvoiceStatus',
        'payment_status' => 'setPaymentStatus',
        'posting_status' => 'setPostingStatus',
        'company_name' => 'setCompanyName',
        'payment_type' => 'setPaymentType',
        'invoice_layout' => 'setInvoiceLayout',
        'tax_entry_method' => 'setTaxEntryMethod',
        'invoice_contents' => 'setInvoiceContents',
        'total_amount_per_vat_rate' => 'setTotalAmountPerVatRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'issue_date' => 'getIssueDate',
        'invoice_number' => 'getInvoiceNumber',
        'total_amount' => 'getTotalAmount',
        'total_vat' => 'getTotalVat',
        'sub_total' => 'getSubTotal',
        'invoice_status' => 'getInvoiceStatus',
        'payment_status' => 'getPaymentStatus',
        'posting_status' => 'getPostingStatus',
        'company_name' => 'getCompanyName',
        'payment_type' => 'getPaymentType',
        'invoice_layout' => 'getInvoiceLayout',
        'tax_entry_method' => 'getTaxEntryMethod',
        'invoice_contents' => 'getInvoiceContents',
        'total_amount_per_vat_rate' => 'getTotalAmountPerVatRate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const INVOICE_STATUS_DRAFT = 'draft';
    const INVOICE_STATUS_APPLYING = 'applying';
    const INVOICE_STATUS_REMANDED = 'remanded';
    const INVOICE_STATUS_REJECTED = 'rejected';
    const INVOICE_STATUS_APPROVED = 'approved';
    const INVOICE_STATUS_ISSUED = 'issued';
    const PAYMENT_STATUS_EMPTY = '';
    const PAYMENT_STATUS_UNSETTLED = 'unsettled';
    const PAYMENT_STATUS_SETTLED = 'settled';
    const POSTING_STATUS_EMPTY = '';
    const POSTING_STATUS_UNREQUESTED = 'unrequested';
    const POSTING_STATUS_PREVIEW_REGISTERED = 'preview_registered';
    const POSTING_STATUS_PREVIEW_FAILED = 'preview_failed';
    const POSTING_STATUS_ORDERED = 'ordered';
    const POSTING_STATUS_ORDER_FAILED = 'order_failed';
    const POSTING_STATUS_PRINTING = 'printing';
    const POSTING_STATUS_CANCELED = 'canceled';
    const POSTING_STATUS_POSTED = 'posted';
    const PAYMENT_TYPE_EMPTY = '';
    const PAYMENT_TYPE_TRANSFER = 'transfer';
    const PAYMENT_TYPE_DIRECT_DEBIT = 'direct_debit';
    const INVOICE_LAYOUT_DEFAULT_CLASSIC = 'default_classic';
    const INVOICE_LAYOUT_STANDARD_CLASSIC = 'standard_classic';
    const INVOICE_LAYOUT_ENVELOPE_CLASSIC = 'envelope_classic';
    const INVOICE_LAYOUT_CARRIED_FORWARD_STANDARD_CLASSIC = 'carried_forward_standard_classic';
    const INVOICE_LAYOUT_CARRIED_FORWARD_ENVELOPE_CLASSIC = 'carried_forward_envelope_classic';
    const INVOICE_LAYOUT_DEFAULT_MODERN = 'default_modern';
    const INVOICE_LAYOUT_STANDARD_MODERN = 'standard_modern';
    const INVOICE_LAYOUT_ENVELOPE_MODERN = 'envelope_modern';
    const TAX_ENTRY_METHOD_EMPTY = '';
    const TAX_ENTRY_METHOD_INCLUSIVE = 'inclusive';
    const TAX_ENTRY_METHOD_EXCLUSIVE = 'exclusive';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceStatusAllowableValues()
    {
        return [
            self::INVOICE_STATUS_DRAFT,
            self::INVOICE_STATUS_APPLYING,
            self::INVOICE_STATUS_REMANDED,
            self::INVOICE_STATUS_REJECTED,
            self::INVOICE_STATUS_APPROVED,
            self::INVOICE_STATUS_ISSUED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS_EMPTY,
            self::PAYMENT_STATUS_UNSETTLED,
            self::PAYMENT_STATUS_SETTLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPostingStatusAllowableValues()
    {
        return [
            self::POSTING_STATUS_EMPTY,
            self::POSTING_STATUS_UNREQUESTED,
            self::POSTING_STATUS_PREVIEW_REGISTERED,
            self::POSTING_STATUS_PREVIEW_FAILED,
            self::POSTING_STATUS_ORDERED,
            self::POSTING_STATUS_ORDER_FAILED,
            self::POSTING_STATUS_PRINTING,
            self::POSTING_STATUS_CANCELED,
            self::POSTING_STATUS_POSTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_EMPTY,
            self::PAYMENT_TYPE_TRANSFER,
            self::PAYMENT_TYPE_DIRECT_DEBIT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceLayoutAllowableValues()
    {
        return [
            self::INVOICE_LAYOUT_DEFAULT_CLASSIC,
            self::INVOICE_LAYOUT_STANDARD_CLASSIC,
            self::INVOICE_LAYOUT_ENVELOPE_CLASSIC,
            self::INVOICE_LAYOUT_CARRIED_FORWARD_STANDARD_CLASSIC,
            self::INVOICE_LAYOUT_CARRIED_FORWARD_ENVELOPE_CLASSIC,
            self::INVOICE_LAYOUT_DEFAULT_MODERN,
            self::INVOICE_LAYOUT_STANDARD_MODERN,
            self::INVOICE_LAYOUT_ENVELOPE_MODERN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxEntryMethodAllowableValues()
    {
        return [
            self::TAX_ENTRY_METHOD_EMPTY,
            self::TAX_ENTRY_METHOD_INCLUSIVE,
            self::TAX_ENTRY_METHOD_EXCLUSIVE,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['issue_date'] = isset($data['issue_date']) ? $data['issue_date'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['total_vat'] = isset($data['total_vat']) ? $data['total_vat'] : null;
        $this->container['sub_total'] = isset($data['sub_total']) ? $data['sub_total'] : null;
        $this->container['invoice_status'] = isset($data['invoice_status']) ? $data['invoice_status'] : null;
        $this->container['payment_status'] = isset($data['payment_status']) ? $data['payment_status'] : null;
        $this->container['posting_status'] = isset($data['posting_status']) ? $data['posting_status'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['invoice_layout'] = isset($data['invoice_layout']) ? $data['invoice_layout'] : null;
        $this->container['tax_entry_method'] = isset($data['tax_entry_method']) ? $data['tax_entry_method'] : null;
        $this->container['invoice_contents'] = isset($data['invoice_contents']) ? $data['invoice_contents'] : null;
        $this->container['total_amount_per_vat_rate'] = isset($data['total_amount_per_vat_rate']) ? $data['total_amount_per_vat_rate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if ($this->container['issue_date'] === null) {
            $invalidProperties[] = "'issue_date' can't be null";
        }
        if ($this->container['invoice_number'] === null) {
            $invalidProperties[] = "'invoice_number' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if ($this->container['invoice_status'] === null) {
            $invalidProperties[] = "'invoice_status' can't be null";
        }
        $allowedValues = $this->getInvoiceStatusAllowableValues();
        if (!is_null($this->container['invoice_status']) && !in_array($this->container['invoice_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($this->container['payment_status']) && !in_array($this->container['payment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['posting_status'] === null) {
            $invalidProperties[] = "'posting_status' can't be null";
        }
        $allowedValues = $this->getPostingStatusAllowableValues();
        if (!is_null($this->container['posting_status']) && !in_array($this->container['posting_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'posting_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
        }
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($this->container['payment_type']) && !in_array($this->container['payment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['invoice_layout'] === null) {
            $invalidProperties[] = "'invoice_layout' can't be null";
        }
        $allowedValues = $this->getInvoiceLayoutAllowableValues();
        if (!is_null($this->container['invoice_layout']) && !in_array($this->container['invoice_layout'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_layout', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['tax_entry_method'] === null) {
            $invalidProperties[] = "'tax_entry_method' can't be null";
        }
        $allowedValues = $this->getTaxEntryMethodAllowableValues();
        if (!is_null($this->container['tax_entry_method']) && !in_array($this->container['tax_entry_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tax_entry_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['total_amount_per_vat_rate'] === null) {
            $invalidProperties[] = "'total_amount_per_vat_rate' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 請求書ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int $company_id 事業所ID
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return string
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param string $issue_date 請求日 (yyyy-mm-dd)
     *
     * @return $this
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number 請求書番号
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return int
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param int $total_amount 合計金額
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets total_vat
     *
     * @return int|null
     */
    public function getTotalVat()
    {
        return $this->container['total_vat'];
    }

    /**
     * Sets total_vat
     *
     * @param int|null $total_vat 合計金額
     *
     * @return $this
     */
    public function setTotalVat($total_vat)
    {
        $this->container['total_vat'] = $total_vat;

        return $this;
    }

    /**
     * Gets sub_total
     *
     * @return int|null
     */
    public function getSubTotal()
    {
        return $this->container['sub_total'];
    }

    /**
     * Sets sub_total
     *
     * @param int|null $sub_total 小計
     *
     * @return $this
     */
    public function setSubTotal($sub_total)
    {
        $this->container['sub_total'] = $sub_total;

        return $this;
    }

    /**
     * Gets invoice_status
     *
     * @return string
     */
    public function getInvoiceStatus()
    {
        return $this->container['invoice_status'];
    }

    /**
     * Sets invoice_status
     *
     * @param string $invoice_status 請求書ステータス  (draft: 下書き, applying: 申請中, remanded: 差し戻し, rejected: 却下, approved: 承認済み, issued: 発行済み)
     *
     * @return $this
     */
    public function setInvoiceStatus($invoice_status)
    {
        $allowedValues = $this->getInvoiceStatusAllowableValues();
        if (!in_array($invoice_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_status'] = $invoice_status;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param string|null $payment_status 入金ステータス  (unsettled: 入金待ち, settled: 入金済み)
     *
     * @return $this
     */
    public function setPaymentStatus($payment_status)
    {
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($payment_status) && !in_array($payment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets posting_status
     *
     * @return string
     */
    public function getPostingStatus()
    {
        return $this->container['posting_status'];
    }

    /**
     * Sets posting_status
     *
     * @param string $posting_status 郵送ステータス(unrequested: リクエスト前, preview_registered: プレビュー登録, preview_failed: プレビュー登録失敗, ordered: 注文中, order_failed: 注文失敗, printing: 印刷中, canceled: キャンセル, posted: 投函済み)
     *
     * @return $this
     */
    public function setPostingStatus($posting_status)
    {
        $allowedValues = $this->getPostingStatusAllowableValues();
        if (!in_array($posting_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'posting_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['posting_status'] = $posting_status;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name 事業所名
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type 支払方法 (振込: transfer, 引き落とし: direct_debit)
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!in_array($payment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets invoice_layout
     *
     * @return string
     */
    public function getInvoiceLayout()
    {
        return $this->container['invoice_layout'];
    }

    /**
     * Sets invoice_layout
     *
     * @param string $invoice_layout レイアウト(default_classic: レイアウト１/クラシック, standard_classic: レイアウト２/クラシック, envelope_classic: 封筒１/クラシック, carried_forward_standard_classic: レイアウト３（繰越金額欄あり）/クラシック, carried_forward_envelope_classic: 封筒２（繰越金額欄あり）/クラシック, default_modern: レイアウト１/モダン, standard_modern: レイアウト２/モダン, envelope_modern: 封筒/モダン)
     *
     * @return $this
     */
    public function setInvoiceLayout($invoice_layout)
    {
        $allowedValues = $this->getInvoiceLayoutAllowableValues();
        if (!in_array($invoice_layout, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_layout', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_layout'] = $invoice_layout;

        return $this;
    }

    /**
     * Gets tax_entry_method
     *
     * @return string
     */
    public function getTaxEntryMethod()
    {
        return $this->container['tax_entry_method'];
    }

    /**
     * Sets tax_entry_method
     *
     * @param string $tax_entry_method 請求書の消費税計算方法(inclusive: 内税, exclusive: 外税)
     *
     * @return $this
     */
    public function setTaxEntryMethod($tax_entry_method)
    {
        $allowedValues = $this->getTaxEntryMethodAllowableValues();
        if (!in_array($tax_entry_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tax_entry_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_entry_method'] = $tax_entry_method;

        return $this;
    }

    /**
     * Gets invoice_contents
     *
     * @return \Freee\Accounting\Model\InvoiceInvoiceContents[]|null
     */
    public function getInvoiceContents()
    {
        return $this->container['invoice_contents'];
    }

    /**
     * Sets invoice_contents
     *
     * @param \Freee\Accounting\Model\InvoiceInvoiceContents[]|null $invoice_contents 請求内容
     *
     * @return $this
     */
    public function setInvoiceContents($invoice_contents)
    {
        $this->container['invoice_contents'] = $invoice_contents;

        return $this;
    }

    /**
     * Gets total_amount_per_vat_rate
     *
     * @return \Freee\Accounting\Model\InvoiceTotalAmountPerVatRate
     */
    public function getTotalAmountPerVatRate()
    {
        return $this->container['total_amount_per_vat_rate'];
    }

    /**
     * Sets total_amount_per_vat_rate
     *
     * @param \Freee\Accounting\Model\InvoiceTotalAmountPerVatRate $total_amount_per_vat_rate total_amount_per_vat_rate
     *
     * @return $this
     */
    public function setTotalAmountPerVatRate($total_amount_per_vat_rate)
    {
        $this->container['total_amount_per_vat_rate'] = $total_amount_per_vat_rate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


