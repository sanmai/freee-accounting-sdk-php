# # UpdateDealParamsDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | 取引金額（税込で指定してください） | 
**tag_ids** | **int[]** | メモタグID | [optional] 
**item_id** | **int** | 品目ID | [optional] 
**vat** | **int** | 消費税額（指定しない場合は自動で計算されます） | [optional] 
**description** | **string** | 備考 | [optional] 
**tax_id** | **int** | 税区分ID（廃止予定。上記tax_codeを使用してください。tax_code, tax_idはどちらかの指定が必須です。） | [optional] 
**segment_2_tag_id** | **int** | セグメント２ID | [optional] 
**tax_code** | **int** | 税区分コード | [optional] 
**segment_3_tag_id** | **int** | セグメント３ID | [optional] 
**section_id** | **int** | 部門ID | [optional] 
**account_item_id** | **int** | 勘定科目ID | 
**id** | **int** | 取引行ID: 既存取引行を更新する場合に指定します。IDを指定しない取引行は、新規行として扱われ追加されます。また、detailsに含まれない既存の取引行は削除されます。更新後も残したい行は、必ず取引行IDを指定してdetailsに含めてください。 | [optional] 
**segment_1_tag_id** | **int** | セグメント１ID | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

