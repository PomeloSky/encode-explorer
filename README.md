Encode Explorer (Bootstrap 5 & PHP 8.0+ Mod)
==================================

Encode Explorer is a lightweight, single-file file browser written in PHP. This modified version has been completely upgraded to support **PHP 8.0+** and modernized with **Bootstrap 5** for a fully responsive, clean user interface. 

It displays the list of files in a folder and is designed to be simple, highly functional, and easy to deploy. Free for everyone.

Features
----------------------------------
* **Modern & Responsive UI**: Rebuilt with Bootstrap 5 and Bootstrap Icons for flawless display on desktops, tablets, and mobile devices.
* **PHP 8.0+ Compatible**: Updated syntax, strict type handling, and modernized codebase.
* **Single-file deployment**: Everything (backend, frontend, icons, and translations) is packed into a single `index.php` file.
* Files can be sorted by name, size, and editing time.
* Directory navigation and breadcrumbs.
* Thumbnails preview for images and PDF files.
* File uploading and directory creation.
* File and directory deletion (Admin only).
* Logging and email notifications.
* Optional password protection (User/Admin roles).
* Multi-language support (20+ languages included).

Manual
----------------------------------
1. Upload `index.php` to the directory on your server that you want to share or manage.
2. Open `index.php` with a text editor to configure settings (e.g., passwords, hidden files, upload permissions) in the `$_CONFIG` array at the top of the file. 
3. **Important**: Make sure to save the file in **UTF-8** encoding if you modify any settings to avoid broken characters or images.

Requirements
----------------------------------
* Web Server (Apache, Nginx, etc.)
* PHP 8.0 or higher
* (Optional) PHP GD extension for image thumbnails
* (Optional) PHP ImageMagick extension for PDF thumbnails
* (Optional) PHP Fileinfo extension for accurate MIME type detection

License
----------------------------------
This software is distributed under The MIT License (MIT).

Copyright (c) 2023 Marek Rei (Original Author)
Modified for Bootstrap 5 & PHP 8.0+ Compatibility

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
