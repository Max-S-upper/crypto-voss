<?php

use Illuminate\Http\Middleware\CheckResponseForModifications;
use Illuminate\Support\Facades\Route;

// Scripts & Styles...
Route::get('/scripts/{script}', 'ScriptController@show')->middleware(CheckResponseForModifications::class);
Route::get('/styles/{style}', 'StyleController@show')->middleware(CheckResponseForModifications::class);

// Global Search...
Route::get('/search', 'SearchController@index');

// Fields...
Route::get('/{resource}/field/{field}', 'FieldController@show');
Route::post('/{resource}/trix-attachment/{field}', 'TrixAttachmentController@store')->middleware('logs');
Route::delete('/{resource}/trix-attachment/{field}', 'TrixAttachmentController@destroyAttachment')->middleware('logs');
Route::delete('/{resource}/trix-attachment/{field}/{draftId}', 'TrixAttachmentController@destroyPending')->middleware('logs');
Route::get('/{resource}/creation-fields', 'CreationFieldController@index')->middleware('logs');
Route::get('/{resource}/{resourceId}/update-fields', 'UpdateFieldController@index')->middleware('logs');
Route::get('/{resource}/creation-pivot-fields/{relatedResource}', 'CreationPivotFieldController@index');
Route::get('/{resource}/{resourceId}/update-pivot-fields/{relatedResource}/{relatedResourceId}', 'UpdatePivotFieldController@index');
Route::get('/{resource}/{resourceId}/download/{field}', 'FieldDownloadController@show')->middleware('logs');
Route::delete('/{resource}/{resourceId}/field/{field}', 'FieldDestroyController@handle')->middleware('logs');
Route::delete('/{resource}/{resourceId}/{relatedResource}/{relatedResourceId}/field/{field}', 'PivotFieldDestroyController@handle')->middleware('logs');

// Dashboards...
Route::get('/dashboards/{dashboard}', 'DashboardController@index');
Route::get('/dashboards/cards/{dashboard}', 'DashboardCardController@index');

// Actions...
Route::get('/{resource}/actions', 'ActionController@index');
Route::post('/{resource}/action', 'ActionController@store');

// Filters...
Route::get('/{resource}/filters', 'FilterController@index');

// Lenses...
Route::get('/{resource}/lenses', 'LensController@index');
Route::get('/{resource}/lens/{lens}', 'LensController@show');
Route::get('/{resource}/lens/{lens}/count', 'LensResourceCountController@show');
Route::delete('/{resource}/lens/{lens}', 'LensResourceDestroyController@handle');
Route::delete('/{resource}/lens/{lens}/force', 'LensResourceForceDeleteController@handle');
Route::put('/{resource}/lens/{lens}/restore', 'LensResourceRestoreController@handle');
Route::get('/{resource}/lens/{lens}/actions', 'LensActionController@index');
Route::post('/{resource}/lens/{lens}/action', 'LensActionController@store');
Route::get('/{resource}/lens/{lens}/filters', 'LensFilterController@index');

// Cards / Metrics...
Route::get('/metrics', 'DashboardMetricController@index');
Route::get('/metrics/{metric}', 'DashboardMetricController@show');
Route::get('/{resource}/metrics', 'MetricController@index');
Route::get('/{resource}/metrics/{metric}', 'MetricController@show');
Route::get('/{resource}/{resourceId}/metrics/{metric}', 'DetailMetricController@show');

Route::get('/{resource}/lens/{lens}/metrics', 'LensMetricController@index');
Route::get('/{resource}/lens/{lens}/metrics/{metric}', 'LensMetricController@show');

Route::get('/cards', 'DashboardCardController@index');
Route::get('/{resource}/cards', 'CardController@index');
Route::get('/{resource}/lens/{lens}/cards', 'LensCardController@index');

// Authorization Information...
Route::get('/{resource}/relate-authorization', 'RelatableAuthorizationController@show');

// Soft Delete Information...
Route::get('/{resource}/soft-deletes', 'SoftDeleteStatusController@show');

// Resource Management...
Route::get('/{resource}', 'ResourceIndexController@handle')->middleware('logs');
Route::get('/{resource}/count', 'ResourceCountController@show');
Route::delete('/{resource}/detach', 'ResourceDetachController@handle')->middleware('logs');
Route::put('/{resource}/restore', 'ResourceRestoreController@handle')->middleware('logs');
Route::delete('/{resource}/force', 'ResourceForceDeleteController@handle')->middleware('logs');
Route::get('/{resource}/{resourceId}', 'ResourceShowController@handle')->middleware('logs');
Route::post('/{resource}', 'ResourceStoreController@handle');
Route::put('/{resource}/{resourceId}', 'ResourceUpdateController@handle')->middleware('logs');
Route::delete('/{resource}', 'ResourceDestroyController@handle')->middleware('logs');

// Associatable Resources...
Route::get('/{resource}/associatable/{field}', 'AssociatableController@index');
Route::get('/{resource}/{resourceId}/attachable/{field}', 'AttachableController@index');
Route::get('/{resource}/morphable/{field}', 'MorphableController@index');

// Resource Attachment...
Route::post('/{resource}/{resourceId}/attach/{relatedResource}', 'ResourceAttachController@handle')->middleware('logs');
Route::post('/{resource}/{resourceId}/update-attached/{relatedResource}/{relatedResourceId}', 'AttachedResourceUpdateController@handle')->middleware('logs');
Route::post('/{resource}/{resourceId}/attach-morphed/{relatedResource}', 'MorphedResourceAttachController@handle')->middleware('logs');
