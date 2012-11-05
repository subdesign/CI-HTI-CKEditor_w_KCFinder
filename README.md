# Codeigniter "How-to-implement" series part 5 - *CKEditor with KCFinder*

*This series objective is to demonstrate how to implement several libraries into Codeigniter*

***

#### This part is about how to enable KCFinder in CKEditor to upload files on the server after the user logged in.

## 1. Installation

Copy the package files into the corresponding folders. I use /assets for CKEditor and KCFinder, and there is an _uploads_ folder with .htaccess file, too. If you want to rename this folder, you have to change it in the KCFinder config.php file.

## 2. Setup

Update the CKEditor config.js:

    CKEDITOR.editorConfig = function( config )
    {
       config.filebrowserBrowseUrl = base_url + '/assets/kcfinder/browse.php?type=files';
       config.filebrowserImageBrowseUrl = base_url + '/assets/kcfinder/browse.php?type=images';
       config.filebrowserFlashBrowseUrl = base_url + '/assets/kcfinder/browse.php?type=flash';
       config.filebrowserUploadUrl = base_url + '/assets/kcfinder/upload.php?type=files';
       config.filebrowserImageUploadUrl = base_url + '/assets/kcfinder/upload.php?type=images';
       config.filebrowserFlashUploadUrl = base_url + '/assets/kcfinder/upload.php?type=flash';
       // Define changes to default configuration here. For example:
       // config.language = 'fr';
       // config.uiColor = '#AADC6E';
    };

Set the upload folder path in KCFinder's config.php:

    'uploadURL' => "../uploads",
    'uploadDir' => "",

## 3. How it works

When your user logs in, a php session starts and initialize/enable KCFinder. In the CKEditor edit window now the user is allowed to upload files/pictures onto the server. If you copy the KCFinder window's link when it's opened, and paste in the browser after you logged out, you get an error message, so external visitor can't use and upload with KCFinder. At the end, when the user logs out, the session is destroyed.  
Base_url is used troughout the scripts so you don't have to bother with current site urls in every editor instance you use during making different sites.

## 4. Author

The solution provided by Barna Szalai <b.sz@devartpro.com>