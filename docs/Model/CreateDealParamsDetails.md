# # CreateDealParamsDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_code** | **int** | 税区分コード | [optional] 
**tax_id** | **int** | 税区分ID（廃止予定。上記tax_codeを使用してください。tax_code, tax_idはどちらかの指定が必須です。） | [optional] 
**account_item_id** | **int** | 勘定科目ID | 
**amount** | **int** | 取引金額（税込で指定してください） | 
**item_id** | **int** | 品目ID | [optional] 
**section_id** | **int** | 部門ID | [optional] 
**tag_ids** | **int[]** | メモタグID | [optional] 
**segment_1_tag_id** | **int** | セグメント１ID | [optional] 
**segment_2_tag_id** | **int** | セグメント２ID | [optional] 
**segment_3_tag_id** | **int** | セグメント３ID | [optional] 
**description** | **string** | 備考 | [optional] 
**vat** | **int** | 消費税額（指定しない場合は自動で計算されます） | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


