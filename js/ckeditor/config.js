/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		'/',
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		'/',
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	config.removeButtons = 'Sourcedialog,About,Form,Checkbox,Radio,TextField,Textarea,Select,Button,HiddenField,Scayt,Print,Preview,NewPage,Save,Language,BidiRtl,BidiLtr,ImageButton';
  
  //images upload settings
  config.filebrowserImageUploadUrl = '/management/news/upload_content_image';
  config.allowedContent=true;

  config.autoGrow_onStartup = true;
  config.autoGrow_bottomSpace = 50;
  config.autoGrow_maxHeight = 500;
  
  config.templates_files = [CKEDITOR.plugins.getPath("templates")+'templates/editor_template.js'];
};
