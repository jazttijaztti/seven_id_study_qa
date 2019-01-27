/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' , groups: ['fontsize']},
		{ name: 'colors' },
	];

	config.extraPlugins = 'youtube,font';
	config.youtube_related = true;
	config.youtube_older = false;
	config.youtube_privacy = false;

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
  config.removeDialogTabs = 'image:advanced;link:advanced';
  config.filebrowserBrowseUrl = '../../../static/plugins/kcfinder/browse.php?type=files';
  config.filebrowserImageBrowseUrl = '../../../static/plugins/kcfinder/browse.php?type=images';
  config.filebrowserFlashBrowseUrl = '../../../static/plugins/kcfinder/browse.php?type=flash';
  config.filebrowserUploadUrl = '../../../static/plugins/kcfinder/upload.php?type=files';
  config.filebrowserImageUploadUrl = '../../../static/plugins/kcfinder/upload.php?type=images';
  config.filebrowserFlashUploadUrl = '../../../static/plugins/kcfinder/upload.php?type=flash';
  config.height = '500px';
  config.skin = 'moono-dark';
};
