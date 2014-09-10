/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

   config.filebrowserBrowseUrl 		= '/modesty/public/assets/backend/ckeditor/plugins/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = '/modesty/public/assets/backend/ckeditor/plugins/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = '/modesty/public/assets/backend/ckeditor/plugins/plugin/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl 		= '/modesty/public/assets/backend/ckeditor/plugins/plugin/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = '/modesty/public/assets/backend/ckeditor/plugins/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = '/modesty/public/assets/backend/ckeditor/plugins/kcfinder/upload.php?opener=ckeditor&type=flash';
};


